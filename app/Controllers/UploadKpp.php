<?php

namespace App\Controllers;

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UploadKpp extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Upload file KPP'
        ];
        return view('pages/upload_kpp', $data);
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
            dd(count($data));
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
}
