<?php

namespace App\Controllers;

use App\Models\IbkModel;
use App\Models\IbkDataModel;

use Config\Services;

class SearchIbk extends BaseController
{
    // protected $ibkModel;
    // public function __construct()
    // {
    //     $this->ibkModel = new IbkModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Pencarian IBK'
        ];

        echo view('layout/header', $data);

        echo view('pages/search_ibk');

        echo view('layout/footer');
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $ibkList = new ibkModel;
            $data =  [
                'ibkLists' => $ibkList->findAll()
            ];

            $msg = [
                'data' => view('pages/list_ibk', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function listIbk()
    {
        $request = Services::request();
        $ibkDataModel = new IbkDataModel($request);

        if ($this->request->isAJAX()) {
            $ibkList = new ibkModel;
            $data =  [
                'ibkLists' => $ibkList->findAll()
            ];

            // $msg = [
            //     'data' => view('pages/list_ibk', $data)
            // ];

            if ($request->getMethod(true) == 'POST') :
                $ibkLists = $ibkDataModel->getDataTable();
                $ibkRow = [];
                $no = $request->getPost("start");
                foreach ($ibkLists as $ibkList) :
                    $row = array();

                    $concateAlamat = $ibkList->alamat1 . $ibkList->alamat2;
                    $djp_date = date("d-m-Y", strtotime($ibkList->djp_date));
                    $check_date = date("d-m-Y", strtotime($ibkList->check_date));
                    $dispos_date = date("d-m-Y", strtotime($ibkList->dispos_date));
                    $string_periode = explode('-', $ibkList->periode);
                    $date1 = explode('/', $string_periode[0]);
                    $date2 = explode('/', $string_periode[1]);
                    $periode_from = $date1[1] . '-' . $date1[0] . '-' . $date1[2];
                    $periode_to = $date2[1] . '-' . $date2[0] . '-' . $date2[2];
                    $periode_date = $periode_from . ' s.d ' . $periode_to;

                    $row[] = ++$no;
                    $row[] = $ibkList->djp_no;
                    $row[] = $djp_date;
                    $row[] = $ibkList->kpp_no;
                    $row[] = $dispos_date;
                    $row[] = $concateAlamat;
                    $row[] = $ibkList->kode_pos;
                    $row[] = $check_date;
                    $row[] = $ibkList->sla;
                    $row[] = $ibkList->jenis_kp;
                    $row[] = $ibkList->kantor_pajak;
                    $row[] = $ibkList->petugas;
                    $row[] = $ibkList->surat_jwb_no;
                    $row[] = $periode_date;
                    $ibkRow[] = $row;
                endforeach;

                $output = array(
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $ibkDataModel->count_all_data(),
                    "recordsFiltered" => $ibkDataModel->count_filtered_data(),
                    "data" => $ibkRow,
                );

                echo json_encode($output);
            endif;
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}
