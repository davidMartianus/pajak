<?php

namespace App\Controllers;

use App\Models\Db_petugas;
use Config\Services;
use App\Models\Tapen;

class InputNas extends BaseController
{
    public function __construct()
    {
        // $this->Model = new Db_petugas();
        // $this->tapeN = new Tapen($_REQUEST);
    }
    public function index()
    {

        $tapen = $this->tapeN->findAll();
        $data = [

            'tapen' => $tapen

        ];
        // return view('pages/inputNasabah', $data);

        echo view('layout/header');

        echo view('input_blokir/inputNasabah', $data);

        echo view('layout/footer');
    }
    public function save()
    {
        $this->Model->save([

            'nomorSuratDJP' => $this->request->getVar('nomorSuratDJP'),
            'tanggalSuratDJP' => $this->request->getVar('tanggalSuratDJP'),
            'tanggalDisposisi' => $this->request->getVar('tanggalDisposisi'),
            'alamat' => $this->request->getVar('alamat'),
            'kodePos' => $this->request->getVar('kodePos'),
            'tanggalPemeriksaan' => $this->request->getVar('tanggalPemeriksaan'),
            'sla' => $this->request->getVar('sla'),
            'jenisKantorPajak' => $this->request->getVar('jenisKantorPajak'),
            'kantorPajak' => $this->request->getVar('kantorPajak'),
            'petugas' => $this->request->getVar('petugas'),
            'nomorSuratJawaban' => $this->request->getVar('nomorSuratJawaban')
        ]);

        return redirect()->to('/NewBlokir');
    }
    public function saved()
    {
        $this->tapeN->save([
            'noSuratPajak' => $this->request->getVar('noSuratPajak'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'kantorPajak' => $this->request->getVar('kantorPajak'),
            'tanggalDisposisi' => $this->request->getVar('tanggalDisposisi'),
            'namaNasabah' => $this->request->getVar('namaNasabah'),
            'outlet' => $this->request->getVar('outlet'),
            'nik' => $this->request->getVar('nik'),
            'npwp' => $this->request->getVar('npwp'),
            'tempatLahir' => $this->request->getVar('tempatLahir'),
            'tanggalLahir' => $this->request->getVar('tanggalLahir')
        ]);
        return redirect()->to('/InputNas');
        // return view('/inputNasabah');
    }
}
