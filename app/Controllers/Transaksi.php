<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model', 'transaksi');
    }

    function teller_id()
    {
        $nip = $this->session->userdata('nip_user');
        echo $nip;
    }

    function trxdate()
    {
        $trxdate = date('dmy');
        echo $trxdate;
    }


    public function post_spm($spm_id)
    {
        $this->check_permission(72);
        $jenis = 'spm';
        $where = array('spm_id' => $spm_id);
        $kredit = $this->transaksi->get_kredit($where);
        //$nip = $this->session->userdata('nip_user');
        $nip = '13861';
        $spm = $this->transaksi->get_no_spm($spm_id);
        $no_spm = $spm[0]->NoSPM;
        $no_spm = str_replace('/', '', $no_spm);


        // var_dump($no_spm);
        // die;

        $no = 0;
        foreach ($kredit as $row) {
            $where_debit = array(
                'spm_id' => $spm_id,
                'kode_debit' => $row->kode_debit
            );
            $debit[$no] = $this->transaksi->get_debit($where_debit);
            $no++;
        }


        // print_r('KREDIT');
        // echo "<pre>";
        // print_r($kredit);
        // echo "</pre>";

        // print_r('DEBIT');
        // echo "<pre>";
        // print_r($debit);
        // echo "</pre>";
        // die;



        $i = 0;
        foreach ($kredit as $data) {

            $db = $debit[$i][0]->type;
            $cr = $data->type;
            $gl_debit = $debit[$i][0]->coa_id;
            $rek_debit = $debit[$i][0]->no_rek;
            $gl_kredit = $data->coa_id;
            $rek_kredit = $data->no_rek;
            $jenis = 'spm';

            $trcd = $this->get_trancode($db, $cr, $jenis);
            $db_account = $this->get_account($gl_debit, $rek_debit);
            $cr_account = $this->get_account($gl_kredit, $rek_kredit);
            $pph_credit = $this->get_account($data->jenis_pph, null);
            $ppn_credit = $this->get_account('PPN', null);

            $trans[$i]['tellerid'] = $nip;
            // $trans[$i]['tellerid'] = '18619';
            $trans[$i]['refnum'] = $no_spm;
            $trans[$i]['trcd'] = $trcd;
            $trans[$i]['db_account'] = $db_account;
            $trans[$i]['balance_debit'] = $data->total_kredit;
            $trans[$i]['cr_account'] = $cr_account;
            $trans[$i]['balance_credit'] = $data->dana_diterima;

            $trans[$i]['ppn_credit'] = $ppn_credit;
            $trans[$i]['ppn_amount'] = $data->ppn;
            $trans[$i]['pph_debit'] = $db_account;
            $trans[$i]['pph_credit'] = $pph_credit;
            $trans[$i]['pph_amount'] = $data->pph;
            $trans[$i]['total_kredit'] = $data->total_kredit;
            $trans[$i]['jenis_pph'] = $data->jenis_pph;


            if ($data->jenis_pph == 'PPh 4(2)') {
                $ppn_debit = $this->get_account('PPn Sewa', null);
                $trans[$i]['ppn_debit'] =  $ppn_debit;
            } else {
                $trans[$i]['ppn_debit'] = $db_account;
            }
            // print_r('TRANSAKSI');
            // echo "<pre>";
            // print_r($trans[$i]);
            // echo "</pre>";

            $i++;
        }
        // die;



        $count = count($trans);
        $inc = 0;
        $done = 0;
        $pass = 0;
        $boolean = true;
        $new_seq = 0;
        for ($i = 0; $i < $count;) {

            if ($boolean == true) {
                $seq = $this->get_sequence();
                $trans[$i]['seq'] = $seq;
            } else if ($boolean == false) {
                $trans[$i]['seq'] = $new_seq;
            }

            // print_r('TRANSAKSI');
            // echo "<pre>";
            // print_r($trans[$i]);
            // echo "</pre>";

            $check = $this->transaksi->cek_transaksi($trans[$i], $spm_id, $jenis);
            // var_dump('check ');
            // var_dump($check);
            // die;

            if ($check == false) {
                // echo "<pre>";
                // print_r('Transaksi sudah dilakukan sebelumnya');
                // echo "</pre>";
                // $done++;
                $pass++;
                $i++;
            } else {
                //posting
                $remark = 'SPM' . $spm_id;
                $result = $this->post_transaksi($trans[$i], $remark, 'spm');
                // echo "<pre>";
                // print_r('RESULT');
                // echo "</pre>";
                // echo "<pre>";
                // print_r($result);
                // echo "</pre>";
                // $i++;
                // $boolean = true;

                if ($result->rsp == '178') {
                    $new_seq = $trans[$i]['seq'] + 1;
                    $boolean = false;
                    // echo "<pre>";
                    // print_r($new_seq);
                    // echo "</pre>";
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;
                } else if ($result->rsp == '000') {
                    $this->insert_log($trans[$i], $result, $spm_id, $jenis);
                    $i++;
                    $inc++;
                    $boolean = true;
                    $done++;
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // } else if ($result->rsp == '001') {
                    //     $this->insert_log($trans[$i], $result, $spm_id, $jenis);
                    //     $i++;
                    //     $inc++;
                    //     $boolean = true;
                    //     // echo "<pre>";
                    //     // print_r($result);
                    //     // echo "</pre>";
                } else if ($result->rsp == '001' || $result->rsp == '999' || $result->rsp == '996' || $result->rsp == '251' || $result->rsp == '997' || $result->rsp == '400' || $result->rsp == '005' || $result->rsp == '998') {
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;

                    $this->insert_log($trans[$i], $result, $spm_id, $jenis);
                    $i++;
                    $inc++;
                    $boolean = true;
                }
            }
        }

        // echo $inc;
        // echo $count;
        // echo $done;
        // echo $pass;
        // die;



        if ($inc == $count && $done == $count) {
            $update = array(
                'Status_posting' => 'Success'
            );

            $this->transaksi->update_spm($update, $spm_id);

            $return = 1;
        } else if ($done < $count && $done > 0) {
            $update = array(
                'Status_posting' => 'Partially Success'
            );

            $this->transaksi->update_spm($update, $spm_id);

            $return = 2;
        } else if ($done == 0) {
            $update = array(
                'Status_posting' => 'Failed'
            );

            $this->transaksi->update_spm($update, $spm_id);
            $return = 3;
        } else {
            $return = 3;
        }

        echo json_encode($return);
    }



    public function post_umpenarikan($um_id)
    {
        $this->check_permission(66);
        $jenis = $this->input->post('jenis');
        //$jenis = 'umpenarikan';

        if ($jenis == 'umpenarikan') {
            $remark = 'UMPENARIKAN' . $um_id;
            $table = 'umtarik';
        } else if ($jenis == 'umsetor') {
            $table = 'umsetor';
            $remark = 'UMSETOR' . $um_id;
        }
        $where = array('id' => $um_id);
        $um = $this->transaksi->get_um_where($table, $where);

        $i = 0;
        foreach ($um as $data) {

            if ($jenis == 'umpenarikan') {
                $gl_debit = $data->coa_id;
                $rek_debit = null;
                $gl_kredit = null;
                $rek_kredit = $data->NoRekTujuan;
            } else if ($jenis == 'umsetor') {
                $gl_debit = null;
                $rek_debit = $data->NoRekAsal;
                $gl_kredit = $data->coa_id;
                $rek_kredit = null;
            }

            $trcd = $data->Trancode;
            $db_account = $this->get_account($gl_debit, $rek_debit);
            $cr_account = $this->get_account($gl_kredit, $rek_kredit);

            //$nip = $this->session->userdata('nip_user');
            $nip = '13861';
            $trans[$i]['tellerid'] = $nip;
            // $trans[$i]['tellerid'] = '18619';

            $trans[$i]['trcd'] = $trcd;
            $trans[$i]['db_account'] = $db_account;
            $trans[$i]['balance_debit'] = $data->Nominal;
            $trans[$i]['cr_account'] = $cr_account;
            $trans[$i]['balance_credit'] = $data->Nominal;

            $i++;
        }

        // echo "<pre>";
        // print_r($trans);
        // echo "</pre>";
        // die;


        $count = count($trans);
        $inc = 0;
        $done = 0;
        $boolean = true;
        $new_seq = 0;
        for ($i = 0; $i < $count;) {

            if ($boolean == true) {
                $seq = $this->get_sequence();
                $trans[$i]['seq'] = $seq;
            } else if ($boolean == false) {
                $trans[$i]['seq'] = $new_seq;
            }

            // print_r('TRANSAKSI');
            // echo "<pre>";
            // print_r($trans[$i]);
            // echo "</pre>";

            $check = $this->transaksi->cek_transaksi($trans[$i], $um_id, $jenis);
            // var_dump('check ');
            // var_dump($check);
            // die;

            if ($check == false) {
                // echo "<pre>";
                // print_r('Transaksi sudah dilakukan sebelumnya');
                // echo "</pre>";
                $done++;
                $i++;
            } else {
                //posting
                $result = $this->post_transaksi($trans[$i], $remark, 'um');
                // echo "<pre>";
                // print_r('RESULT');
                // echo "</pre>";
                // die;
                // echo "<pre>";
                // print_r($result);
                // echo "</pre>";
                // $i++;
                // $boolean = true;

                if ($result->rsp == '178') {
                    $new_seq = $trans[$i]['seq'] + 1;
                    $boolean = false;
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;
                } else if ($result->rsp == '000') {
                    $this->insert_log($trans[$i], $result, $um_id, $jenis);
                    $i++;
                    $inc++;
                    $boolean = true;
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                } else if ($result->rsp == '001') {
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;
                    $this->insert_log($trans[$i], $result, $um_id, $jenis);
                    $i++;
                    $boolean = true;
                } else if ($result->rsp == '999' || $result->rsp == '996' || $result->rsp == '251' || $result->rsp == '997' || $result->rsp == '400' || $result->rsp == '005' || $result->rsp == '998') {
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;

                    $this->insert_log($trans[$i], $result, $um_id, $jenis);
                    $i++;
                    $boolean = true;
                }
            }
        }

        // echo $inc;
        // echo $count;
        // die;

        if ($inc == $count) {
            $update = array(
                'Status_posting' => 'Success'
            );

            $this->transaksi->update_um($update, $um_id, $table);

            $return = 1;
        } else if ($inc > 0 && $inc < $count) {
            $update = array(
                'Status_posting' => 'Partially Success'
            );

            $this->transaksi->update_um($update, $um_id, $table);

            $return = 2;
        } else if ($inc == 0 && $done == 0) {
            $update = array(
                'Status_posting' => 'Failed'
            );

            $this->transaksi->update_um($update, $um_id, $table);
            $return = 3;
        } else {
            $return = 3;
        }

        echo json_encode($return);
    }

    public function post_umsetor($um_id)
    {
        $this->check_permission(68);
        $jenis = $this->input->post('jenis');
        // $jenis = 'umsetor';

        if ($jenis == 'umpenarikan') {
            $remark = 'UMPENARIKAN' . $um_id;
            $table = 'umtarik';
        } else if ($jenis == 'umsetor') {
            $table = 'umsetor';
            $remark = 'UMSETOR' . $um_id;
        }
        $where = array('id' => $um_id);
        $um = $this->transaksi->get_um_where($table, $where);

        $i = 0;
        foreach ($um as $data) {

            if ($jenis == 'umpenarikan') {
                $gl_debit = $data->coa_id;
                $rek_debit = null;
                $gl_kredit = null;
                $rek_kredit = $data->NoRekTujuan;
            } else if ($jenis == 'umsetor') {
                $gl_debit = null;
                $rek_debit = $data->NoRekAsal;
                $gl_kredit = $data->coa_id;
                $rek_kredit = null;
            }

            $trcd = $data->Trancode;
            $db_account = $this->get_account($gl_debit, $rek_debit);
            $cr_account = $this->get_account($gl_kredit, $rek_kredit);

            //$nip = $this->session->userdata('nip_user');
            $nip = '13861';
            $trans[$i]['tellerid'] = $nip;
            // $trans[$i]['tellerid'] = '18619';

            $trans[$i]['trcd'] = $trcd;
            $trans[$i]['db_account'] = $db_account;
            $trans[$i]['balance_debit'] = $data->Nominal;
            $trans[$i]['cr_account'] = $cr_account;
            $trans[$i]['balance_credit'] = $data->Nominal;

            $i++;
        }


        $count = count($trans);
        $inc = 0;
        $done = 0;
        $boolean = true;
        $new_seq = 0;
        for ($i = 0; $i < $count;) {

            if ($boolean == true) {
                $seq = $this->get_sequence();
                $trans[$i]['seq'] = $seq;
            } else if ($boolean == false) {
                $trans[$i]['seq'] = $new_seq;
            }

            // print_r('TRANSAKSI');
            // echo "<pre>";
            // print_r($trans[$i]);
            // echo "</pre>";

            $check = $this->transaksi->cek_transaksi($trans[$i], $um_id, $jenis);
            // var_dump('check ');
            // var_dump($check);
            // die;

            if ($check == false) {
                // echo "<pre>";
                // print_r('Transaksi sudah dilakukan sebelumnya');
                // echo "</pre>";
                $done++;
                $i++;
            } else {
                //posting
                $result = $this->post_transaksi($trans[$i], $remark, 'um');
                // echo "<pre>";
                // print_r('RESULT');
                // echo "</pre>";
                // die;
                // echo "<pre>";
                // print_r($result);
                // echo "</pre>";
                // $i++;
                // $boolean = true;

                if ($result->rsp == '178') {
                    $new_seq = $trans[$i]['seq'] + 1;
                    $boolean = false;
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;
                } else if ($result->rsp == '000') {
                    $this->insert_log($trans[$i], $result, $um_id, $jenis);
                    $i++;
                    $inc++;
                    $boolean = true;
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                } else if ($result->rsp == '001') {
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;
                    $this->insert_log($trans[$i], $result, $um_id, $jenis);
                    $i++;
                    $boolean = true;
                } else if ($result->rsp == '999' || $result->rsp == '996' || $result->rsp == '251' || $result->rsp == '997' || $result->rsp == '400' || $result->rsp == '005' || $result->rsp == '998') {
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // die;

                    $this->insert_log($trans[$i], $result, $um_id, $jenis);
                    $i++;
                    $boolean = true;
                }
            }
        }

        // echo $inc;
        // echo $count;
        // die;

        if ($inc == $count) {
            $update = array(
                'Status_posting' => 'Success'
            );

            $this->transaksi->update_um($update, $um_id, $table);

            $return = 1;
        } else if ($inc > 0 && $inc < $count) {
            $update = array(
                'Status_posting' => 'Partially Success'
            );

            $this->transaksi->update_um($update, $um_id, $table);

            $return = 2;
        } else if ($inc == 0 && $done == 0) {
            $update = array(
                'Status_posting' => 'Failed'
            );

            $this->transaksi->update_um($update, $um_id, $table);
            $return = 3;
        } else {
            $return = 3;
        }

        echo json_encode($return);
    }

    public function post_transaksi($trans, $remark, $jenis)
    {
        $trxdate = '080716';

        if ($jenis == 'um') {
            $post = '{
                "refnum": "RDPF16408438",
                "tellerid": "' . $trans['tellerid'] . '",
                "seq": "' . $trans['seq'] . '",
                "trcd": "' . $trans['trcd'] . '",
                "itlbcur": "IDR",
                "tlb01": "' . $trans['db_account'] . '",
                "tlb02": "' . $trans['balance_debit'] . '00",
                "tlb15": "' . $trans['cr_account'] . '",
                "tlb16": "' . $trans['balance_credit'] . '00",
                "remark1": "' . $remark . '",
                "trxdate": "' . $trxdate . '"
              }';
        } else if ($jenis == 'spm') {

            if ($trans['jenis_pph'] == 'PPh 4(2)') {
                $where = array(
                    'description' => 'PPn Sewa'
                );
                $result = $this->transaksi->get_gl_pajak($where);
                $account_ppn_sewa = $result[0]->akun;
                // $debit_amount = $trans['total_kredit'] - $trans['ppn_amount'];
                $debit_amount = $trans['total_kredit'];
            } else {
                $debit_amount = $trans['total_kredit'];
                $account_ppn_sewa =  $trans['ppn_credit'];
            }

            $post =
                '{
            "refnum": "' . $trans['refnum'] . '",
            "tellerid": "' . $trans['tellerid'] . '",
            "seq": "' . $trans['seq'] . '",
            "trcd": "' . $trans['trcd'] . '",
            "itlbcur": "IDR",
            "tlb01": "' . $trans['db_account'] . '",
            "tlb02": "' . $debit_amount . '00",';

            if ($trans['jenis_pph'] == 'PPh 4(2)') {

                $post .=
                    '"tlb03": "' . $account_ppn_sewa . '",
                "tlb04": "' . $trans['ppn_amount'] . '00",';
            } else {
                $debit_amount = $trans['total_kredit'];
            }

            if ($trans['ppn_amount'] == 0 || $trans['ppn_amount'] == '0') {
            } else {
                $post .=
                    '"tlb09": "' . $trans['ppn_credit'] . '",
                    "tlb10": "' . $trans['ppn_amount'] . '00",';
            }

            if ($trans['pph_amount'] == 0 || $trans['pph_amount'] == '0') {
            } else {
                $post .=
                    '"tlb13": "' . $trans['pph_credit'] . '",
                "tlb14": "' . $trans['pph_amount'] . '00",';
            }

            $post .=
                '"tlb15": "' . $trans['cr_account'] . '",
            "tlb16": "' . $trans['balance_credit'] . '00",
            "remark1": "' . $remark . '",
            "trxdate": "' . $trxdate . '"
          }';
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => URL_API_DEV . 'espm/post',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_HTTPHEADER => array(
                POST_ID_DEV,
                POST_KEY_DEV,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        // SPMID'.$id.'

        curl_close($curl);

        $resp = json_decode($response);
        return $resp;
    }



    function get_trancode($debit, $credit, $jenis)
    {
        $db = '';
        $cr = '';
        if ($debit == 'Debit Akun GL') {
            $db = 'GL';
        } else if ($debit == 'Debit Giro') {
            $db = 'CA';
        } else if ($debit == 'Debit Tabungan') {
            $db = 'SA';
        }

        if ($credit == 'Kredit Akun GL' || $credit == 'Akun GL') {
            $cr = 'GL';
        } else if ($credit == 'Kredit Giro') {
            $cr = 'CA';
        } else if ($credit == 'Kredit Tabungan') {
            $cr = 'SA';
        }

        $where = array(
            'db' => $db,
            'cr' => $cr,
            'jenis' => $jenis
        );

        $result = $this->transaksi->get_trancode($where);

        $trancode = $result[0]->code;
        return $trancode;
    }

    function get_account($gl, $rek)
    {
        if ($gl != '' || $gl != null) {
            if ($gl == 'PPN' || $gl == 'PPh 21' || $gl == 'PPh 26' || $gl == 'PPh 22' || $gl == 'PPh 23' || $gl == 'PPh 4(2)' || $gl == 'PPn Sewa') {
                $where = array(
                    'description' => $gl
                );
                $result = $this->transaksi->get_gl_pajak($where);
                $account = $result[0]->akun;
            } else {
                $where = array(
                    'id' => $gl
                );
                $result = $this->transaksi->get_account_gl($where);
                $account = $result[0]->coa;
            }
        } else {
            $account = $rek;
        }
        return $account;
    }

    function get_sequence()
    {
        // $first = 1001022;
        $first = 50000;
        $today = date('Y-m-d');
        $tran = $this->transaksi->get_tran_date($today);

        if ($tran == 0) {
            $sequence = $first;
        } else {
            $result = $this->transaksi->get_last_trancode($today);
            $sequence = $result[0]->seq + 1;
        }
        return $sequence;
    }

    public function insert_log($data, $resp, $id, $jenis)
    {
        if ($resp->rsp == '000') {
            $seq = $resp->seqsent;
        } else {
            $seq = $data['seq'];
        }
        $arr = array(
            'row_id' => $id,
            'teller_id' => $data['tellerid'],
            'trcd' => $data['trcd'],
            'debit' => $data['db_account'],
            'kredit' => $data['cr_account'],
            'nominal' => $data['balance_credit'],
            'seq' => $seq,
            'rsp' => $resp->rsp,
            'rspdesc' => $resp->rspdesc,
            'refnum' => $resp->refnum,
            'datetime' => date('Y-m-d H:i:s'),
            'jenis' => $jenis
        );

        $result = $this->transaksi->insert_log($arr);
        return $result;
    }
}
