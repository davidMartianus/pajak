<?php

namespace App\Controllers;

class Homie extends BaseController
{
    // public function index()
    // {
    //     return view('/pages/in');
    // }
    public function sura()
    {
        return view('/pages/sur');
    }

    // public function ambildata()
    // {
    //     if ($this->request->isAJAX()) {
    //         $ip = $this->Model;
    //         $data = [
    //             'tampil' => $ip->findAll()
    //         ];

    //         $msg = [
    //             'data' => view('pages/datapetugasView', $data)
    //         ];

    //         echo json_encode($msg);
    //     } else {
    //         exit('maaf tidak dapat diproses');
    //     }
    // }
}
