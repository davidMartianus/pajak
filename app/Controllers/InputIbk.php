<?php

namespace App\Controllers;

use App\Models\IbkModel;
use App\Models\IbkDataModel;
use App\Models\IbkItemModel;

use Config\Services;

class InputIbk extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Dashboard'
        ];
        return view('pages/input_ibk', $data);
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
                // $row[] = $ibkItem->alamat2;
                $row[] = $ibkItem->nik;
                $row[] = $ibkItem->npwp;
                $row[] = $ibkItem->tempat_lahir;
                $row[] = $ibkItem->tgl_lahir;
                $row[] = $ibkItem->keterangan;
                $row[] = $ibkItem->add_keterangan;
                // $row[] = $ibkItem->surat_jwb_no;
                // $row[] = $ibkItem->periode_from;
                // $row[] = $ibkItem->periode_to;
                // $row[] = $ibkItem->created_at;
                // $row[] = $ibkItem->changed_at;
                $ibkRow[] = $row;
            endforeach;

            $output = array(
                "draw" => $request->getPost('draw'),
                "recordsTotal" => $ibkItemModel->count_all_data(),
                "recordsFiltered" => $ibkItemModel->count_filtered_data(),
                "data" => $ibkRow,
            );

            // $this->output->set_content_type('application/json')->set_output(json_encode($output));
            echo json_encode($output);
        endif;
        // $data = [
        //     'title' => 'Dashboard'
        // ];
        // return view('pages/dashboard', $data);
    }

    public function save()
    {
        // if ($this->input->post) {
        $jenis_kp = $this->request->getVar('JnsKantorPjk');
        d($jenis_kp);
        // }
        dd($this->request->getVar());

        $djpDate = date("Y-m-d", strtotime($this->request->getVar('tglSuratDjp')));
        $disposDate = date("Y-m-d", strtotime($this->request->getVar('tglSuratDispos')));
        // dd($djpDate);
        // dd($disposDate);
        // dd($this->getVar());
        $currentYear = date('Y');

        $this->ibkDataModel->save([
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
        ]);

        echo "berhasil";
    }

    public function getReffCode()
    {
        $request = Services::request();
        $ibkDataModel = new IbkDataModel($request);

        $reffCode = $ibkDataModel->getReffCode();

        echo json_encode($reffCode);
        // dd($reffCode);
    }
}
