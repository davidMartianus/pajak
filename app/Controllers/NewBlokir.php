<?php


namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Db_petugas;
use Config\Services;
use App\Models\Tapen;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

class NewBlokir extends BaseController
{
    protected $datakc;
    protected $tapen;
    protected $request;

    public function index()
    {
        // return view('pages/InputPetugas');

        echo view('layout/header');

        echo view('input_blokir/InputPetugas');

        echo view('layout/footer');
    }

    public function halo()
    {
        // return view('pages/baru');

        echo view('layout/header');

        echo view('input_blokir/baru');

        echo view('layout/footer');
    }

    public function menutama()
    {
        // return view('/pages/in');

        echo view('layout/header');

        echo view('input_blokir/in');

        echo view('layout/footer');
    }

    public function __construct()
    {
        $request = Services::request();
        $this->Model = new Db_petugas($request);
        $this->tapeN = new Tapen($request);
    }

    public function getReffCode()
    {
        $ibkDataModel = $this->Model;

        $reffCode = $ibkDataModel->getReffCode();

        echo json_encode($reffCode);
    }

    public function save_header()
    {

        $this->_validation();
        $currentYear = date('Y');
        $created_at = (new \CodeIgniter\I18n\Time("now", "Asia/Jakarta", "de_DE"));
        // $created_at = date('Y-m-d H:i:s');
        $header = $this->request->getVar();

        if ($this->Model->save([
            'reffcode' => $this->request->getVar('reffcode'),
            'nomorSuratDJP' => $this->request->getVar('nomorSuratDJP'),
            'tanggalSuratDJP' => $this->request->getVar('tanggalSuratDJP'),
            'tanggalDisposisi' => $this->request->getVar('tanggalDisposisi'),
            'fiscal_year' => $currentYear,
            'alamat' => $this->request->getVar('alamat'),
            'kodePos' => $this->request->getVar('kodePos'),
            'tanggalPemeriksaan' => $this->request->getVar('tanggalPemeriksaan'),
            'sla' => $this->request->getVar('sla'),
            'jenisKantorPajak' => $this->request->getVar('jenisKantorPajak'),
            'kantorPajak' => $this->request->getVar('kantorPajak'),
            'petugas' => $this->request->getVar('petugas'),
            'nomorSuratJawaban' => $this->request->getVar('nomorSuratJawaban')
            // 'created_at' => $created_at,
        ]) == true) {
            $message = array('status' => 1, 'message' => 'success', 'header' => $header);
        } else {
            $message = array('status' => 0, 'message' => 'failed', 'header' => $header);
        }
        // $message = array('status' => 1, 'message' => 'success', 'header' => $header);
        echo json_encode($message);
    }

    public function save_item()
    {
        // $this->_validation();
        // $currentYear = date('Y');
        $created_at = (new \CodeIgniter\I18n\Time("now", "Asia/Jakarta", "de_DE"));

        $item = $this->request->getVar();

        if ($this->tapeN->save([
            'nomorSuratDJP' => $this->request->getVar('nomorSuratDJP'),
            'noSuratPajak' => $this->request->getVar('noSuratPjkTbl'),
            'tanggalSurat' => $this->request->getVar('tglSuratPjkTbl'),
            'kantorPajak' => $this->request->getVar('kantorPjkTbl'),
            'tanggalDisposisi' => $this->request->getVar('tglDisposisiTbl'),
            // 'cif' => '',
            'namaNasabah' => $this->request->getVar('nasabahTbl'),
            // 'rekening' => '',
            'outlet' => $this->request->getVar('outletTbl'),
            'nik' => $this->request->getVar('nikTbl'),
            'npwp' => $this->request->getVar('npwpTbl'),
            'tempatLahir' => $this->request->getVar('tmptLahirTbl'),
            'tanggalLahir' => $this->request->getVar('tglLahirTbl'),
            'keterangan' => $this->request->getVar('keteranganTbl'),
            'add_keterangan' => $this->request->getVar('addKetPjkTbl')
            // 'created_at' => $created_at,
            // 'updated_at' => $created_at,
        ]) == true) {
            $message = array('status' => 1, 'message' => 'success', 'item' => $item);
        } else {
            $message = array('status' => 0, 'message' => 'failed', 'item' => $item);
        }
        // $message = array('status' => 1, 'message' => 'success', 'item' => $item);
        echo json_encode($message);
    }

    public function getData()
    {
        $request = Services::request();
        $ibkItemModel = new Db_petugas($request);

        if ($request->getMethod(true) == 'POST') :
            $ibkItems = $ibkItemModel->getDataTable();
            $ibkRow = [];
            $no = $request->getPost("start");
            foreach ($ibkItems as $ibkItem) :
                $id = $ibkItem->nomorSuratDJP;
                $row = array();
                $row[] = ++$no;
                // $row[] = $ibkItem->reffcode;
                $row[] = $ibkItem->nomorSuratDJP;
                $row[] = $ibkItem->tanggalSuratDJP;
                $row[] = $ibkItem->tanggalDisposisi;
                $row[] = $ibkItem->alamat;
                // $row[] = $ibkItem->fiscal_year;
                $row[] = $ibkItem->kodePos;
                $row[] = $ibkItem->tanggalPemeriksaan;
                $row[] = $ibkItem->sla;
                $row[] = $ibkItem->jenisKantorPajak;
                $row[] = $ibkItem->kantorPajak;
                $row[] = $ibkItem->petugas;
                $row[] = $ibkItem->nomorSuratJawaban;
                $row[] = $ibkItem->nomorSuratJawaban;
                $row[] = '<a href="NewBlokir/detail/' . $id . '" title="detail" class="btn waves-effect waves-light btn-info btn-sm col-sm" style="margin: 2px"><i class="zmdi zmdi-eye"></i></a>';

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

    public function detail($id)
    {
        // $ibkList = new ibkModel;
        // d($header);

        // $item = $this->ibkItemModel->where(['djp_no' => $header['djp_no']])->findAll();
        // dd($item);

        // $request = Services::request();
        // $ibkDataModel = new IbkDataModel($request);
        // $data = [
        //     'title' => 'Detail IBK'
        // ];

        // echo view('layout/header', $data);

        $header = $this->Model->where(['nomorSuratDJP' => $id])->first();
        $item = $this->tapeN->where(['nomorSuratDJP' => $header['nomorSuratDJP']])->findAll();
        $dataDetail = [
            'header' => $header,
            'items' => $item
        ];
        // dd($item);
        // return view('/pages/detailed', $dataDetail);

        echo view('layout/header');

        echo view('input_blokir/detailed', $dataDetail);

        echo view('layout/footer');

        // echo view('layout/footer');
    }

    public function _validation()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;

        if ($this->request->getPost('tanggalDisposisi') == '') {
            $data['inputerror'][] = 'tanggalDisposisi';
            $data['error_string'][] = 'Tanggal Surat DJP wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('tanggalSuratDJP') == '') {
            $data['inputerror'][] = 'tanggalSuratDJP';
            $data['error_string'][] = 'Tanggal Surat Disposisi wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('nomorSuratDJP') == '') {
            $data['inputerror'][] = 'nomorSuratDJP';
            $data['error_string'][] = 'Nomor Surat DJP wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('alamat') == '') {
            $data['inputerror'][] = 'alamat';
            $data['error_string'][] = 'Alamat wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('kodePos') == '') {
            $data['inputerror'][] = 'kodePos';
            $data['error_string'][] = 'Kode Pos wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('tanggalPemeriksaan') == '') {
            $data['inputerror'][] = 'tanggalPemeriksaan';
            $data['error_string'][] = 'Tanggal Periksa wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('jenisKantorPajak') == '') {
            $data['inputerror'][] = 'jenisKantorPajak';
            $data['error_string'][] = 'Jenis Kantor Pajak wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('kantorPajak') == '') {
            $data['inputerror'][] = 'kantorPajak';
            $data['error_string'][] = 'Kantor Pajak wajib diisi';
            $data['status'] = false;
        }

        if ($this->request->getPost('nomorSuratJawaban') == '') {
            $data['inputerror'][] = 'nomorSuratJawaban';
            $data['error_string'][] = 'Nomor Surat Jawaban wajib diisi';
            $data['status'] = false;
        }

        if ($data['status'] === false) {
            echo json_encode($data);
            exit();
        }
    }
}
