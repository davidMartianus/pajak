<?php

namespace App\Controllers;

use App\Models\KppModel;
use Config\Services;

class ParKantorPajak extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->kppModel = new KppModel($request);
    }

    public function index()
    {

        $data = [
            'title' => 'Upload file KPP'
        ];

        echo view('layout/header', $data);

        echo view('parameter/kantor_pajak');

        echo view('layout/footer');

        // return view('pages/upload_kpp', $data);
    }

    public function upload()
    {
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'fileimport' => [
                'label' => 'Inputan File',
                'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi',
                    'ext_in' => '{field} harus ekstensi xls atau xlsx'
                ]
            ]
        ]);

        if (!$valid) {
            $this->session->setFlashData('pesan', $validation->getError('fileimport'));
        } else {
            $file_excel = $this->request->getFile('fileimport');

            $ext = $file_excel->getClientExtension();

            if ($ext == 'xls') {
                $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadsheet = $render->load($file_excel);

            $data = $spreadsheet->getActiveSheet()->toArray();
            // dd(count($data));
            // foreach ($data as $d => $row) {
            //     if ($d == 0) {
            //         continue;
            //     }
            //     $kpp_name = $row[0];
            //     $alamat1 = $row[1];
            //     $alamat2 = $row[2];

            //     $db = \Config\Database::connect();

            //     $datasimpan = [
            //         'kpp_name' => $kpp_name,
            //         'alamat1' => $alamat1,
            //         'alamat2' => $alamat2
            //     ];

            //     $db->table('kantor_pajak')->insert($datasimpan);
            // }
            return redirect()->to('/uploadKpp/index');
        }
    }

    public function getData()
    {
        $request = Services::request();
        $kppModel = new KppModel($request);
        if ($this->request->isAJAX()) {
            if ($request->getMethod(true) === 'POST') :
                // if ($this->$request->getMethod() == 'POST') :
                $kpps = $kppModel->getDataTable();
                $kppRow = [];
                $no = $request->getPost("start");
                foreach ($kpps as $kpp) :
                    $id = $kpp->id;
                    $row = array();

                    // $row[] = ++$no;
                    $row[] = $kpp->kpp_name;
                    $row[] = $kpp->alamat1;
                    $row[] = $kpp->alamat2;
                    $row[] = '<a href="ibk/detail/' . $id . '" title="detail" class="btn waves-effect waves-light btn-info btn-sm col-sm" style="margin: 2px; width: auto;"><i class="zmdi zmdi-eye"></i></a>';
                    $kppRow[] = $row;
                endforeach;

                $output = array(
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $kppModel->count_all_data(),
                    "recordsFiltered" => $kppModel->count_filtered_data(),
                    "data" => $kppRow
                );

                echo json_encode($output);
            endif;
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function downloadTemplateXls()
    {
        $fileTemplate = 'template_upload_kantor_pajak.xlsx';
        return $this->response->download($fileTemplate, null);
    }
}
