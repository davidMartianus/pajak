<?php

namespace App\Controllers;

use App\Models\IbkModel;
use App\Models\IbkDataModel;
use App\Models\IbkItemModel;

use Config\Services;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

class InputIbk extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        echo view('layout/template', $data);

        echo view('pages/input_ibk');

        echo view('layout/footer');
    }
    // $this->ibkModel = new \App\Models\IbkModel();
    // protected $ibkModel;
    // protected $request;

    public function __construct()
    {
        $request = Services::request();
        $this->ibkDataModel = new IbkDataModel($request);
        $this->ibkItemModel = new IbkItemModel($request);
    }

    // // $ibk = $this->ibkModel->findAll();

    public function getData()
    {
        $request = Services::request();
        $ibkItemModel = new IbkItemModel($request);

        if ($request->getMethod(true) == 'POST') :
            $ibkItems = $ibkItemModel->getDataTable();
            $ibkRow = [];
            $no = $request->getPost("start");
            foreach ($ibkItems as $ibkItem) :
                $row = array();

                // $row[] = ++$no;
                // $row[] = $ibkItem->id;
                $row[] = $ibkItem->surat_pajak;
                $row[] = $ibkItem->surat_pajak_tgl;
                $row[] = $ibkItem->kantor_pajak;
                $row[] = $ibkItem->nasabah;
                $row[] = $ibkItem->outlet;
                $row[] = $ibkItem->nik;
                $row[] = $ibkItem->npwp;
                $row[] = $ibkItem->tempat_lahir;
                $row[] = $ibkItem->tgl_lahir;
                $row[] = $ibkItem->keterangan;
                $row[] = $ibkItem->add_keterangan;
                $ibkRow[] = $row;
            endforeach;

            $output = array(
                "draw" => $request->getPost('draw'),
                "recordsTotal" => $ibkItemModel->count_all_data(),
                "recordsFiltered" => $ibkItemModel->count_filtered_data(),
                "data" => $ibkRow,
            );

            echo json_encode($output);
        endif;
    }

    public function save()
    {
        // dd($this->request->getVar());
        $this->_validation();
        $currentYear = date('Y');
        $created_at = date('Y-m-d H:i:s');

        if ($this->ibkDataModel->save([
            'reffcode' => $this->request->getVar('reffcode'),
            'djp_no' => $this->request->getVar('noSuratDjp'),
            'djp_date' => $this->request->getVar('tglSuratDjp'),
            'kpp_no' => $this->request->getVar('noSuratKpp'),
            'dispos_date' => $this->request->getVar('tglSuratDispos'),
            'fiscal_year' => $currentYear,
            'alamat1' => $this->request->getVar('alamat1'),
            'alamat2' => $this->request->getVar('alamat2'),
            'kode_pos' => $this->request->getVar('kodepos'),
            'check_date' => $this->request->getVar('tglPeriksa'),
            'sla' => $this->request->getVar('sla'),
            'jenis_kp' => $this->request->getVar('JnsKantorPjk'),
            'kantor_pajak' => $this->request->getVar('kantorPjk'),
            'petugas' => $this->request->getVar('petugas'),
            'surat_jwb_no' => $this->request->getVar('nomorSuratJwb'),
            'periode' => $this->request->getVar('daterange'),
            'created_at' => $created_at,
        ]) == true) {
            $message = array('status' => 1, 'message' => 'success');
        } else {
            $message = array('status' => 0, 'message' => 'failed');
        }
        echo json_encode($message);

        // $this->ibkDataModel->save([
        //     'reffcode' => $this->request->getVar('reffcode'),
        //     'djp_no' => $this->request->getVar('noSuratDjp'),
        //     'djp_date' => $this->request->getVar('tglSuratDjp'),
        //     'kpp_no' => $this->request->getVar('noSuratKpp'),
        //     'dispos_date' => $this->request->getVar('tglSuratDispos'),
        //     'fiscal_year' => $currentYear,
        //     'alamat1' => $this->request->getVar('alamat1'),
        //     'alamat2' => $this->request->getVar('alamat2'),
        //     'kode_pos' => $this->request->getVar('kodepos'),
        //     'check_date' => $this->request->getVar('tglPeriksa'),
        //     'sla' => $this->request->getVar('sla'),
        //     'jenis_kp' => $this->request->getVar('JnsKantorPjk'),
        //     'kantor_pajak' => $this->request->getVar('kantorPjk'),
        //     'petugas' => $this->request->getVar('petugas'),
        //     'surat_jwb_no' => $this->request->getVar('nomorSuratJwb'),
        //     'periode' => $this->request->getVar('daterange'),
        // ]);

        // echo "berhasil";
    }

    public function getReffCode()
    {
        $request = Services::request();
        $ibkDataModel = new IbkDataModel($request);

        $reffCode = $ibkDataModel->getReffCode();

        echo json_encode($reffCode);
    }

    public function getKantorPajak()
    {
        if ($this->request->isAJAX()) {
            $findData = $this->request->getGet('search');

            $dataKantorPajak = $this->db->table('kantor_pajak')->LIKE('kpp_name', $findData)->get();

            if ($dataKantorPajak->getNumRows() > 0) {
                $list = [];
                $key = 0;
                foreach ($dataKantorPajak->getResultArray() as $kantorPajak) :
                    $list[$key]['id'] = $kantorPajak['kpp_name'];
                    $list[$key]['text'] = $kantorPajak['kpp_name'];
                    $key++;
                endforeach;

                echo json_encode($list);
            }
        }
    }

    public function _validation()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;

        if ($this->request->getPost('tglSuratDjp') == '') {
            $data['inputerror'][] = 'tglSuratDjp';
            $data['error_string'][] = 'Tanggal Surat DJP wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('tglSuratDispos') == '') {
            $data['inputerror'][] = 'tglSuratDispos';
            $data['error_string'][] = 'Tanggal Surat Disposisi wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('noSuratKpp') == '') {
            $data['inputerror'][] = 'noSuratKpp';
            $data['error_string'][] = 'Nomor Surat KPP wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('alamat1') == '') {
            $data['inputerror'][] = 'alamat1';
            $data['error_string'][] = 'Alamat wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('kodepos') == '') {
            $data['inputerror'][] = 'kodepos';
            $data['error_string'][] = 'Kode Pos wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('tglPeriksa') == '') {
            $data['inputerror'][] = 'tglPeriksa';
            $data['error_string'][] = 'Tanggal Periksa wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('JnsKantorPjk') == '') {
            $data['inputerror'][] = 'JnsKantorPjk';
            $data['error_string'][] = 'Jenis Kantor Pajak wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('kantorPjk') == '') {
            $data['inputerror'][] = 'kantorPjk';
            $data['error_string'][] = 'Kantor Pajak wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('nomorSuratJwb') == '') {
            $data['inputerror'][] = 'nomorSuratJwb';
            $data['error_string'][] = 'Nomor Surat Jawaban wajib diisi';
            $data['status'] = false;
        }

        if ($data['status'] === false) {
            echo json_encode($data);
            exit();
        }
    }
}
