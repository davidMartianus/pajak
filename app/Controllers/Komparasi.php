<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlokirModel;
use Config\Services;

class Komparasi extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->BM = new BlokirModel();
    }
    public function index()
    {
        return view('/pages/compare');
    }


    public function ambildata3()
    {
        if ($this->request->isAJAX()) {
            $ip = $this->BM;
            $data = [
                'tampil' => $ip->findAll()
            ];

            $msg = [
                'data' => view('pages/datanasabah', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('maaf tidak dapat diproses');
        }
    }
}
