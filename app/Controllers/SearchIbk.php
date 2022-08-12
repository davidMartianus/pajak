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
        // $ibkList = new ibkModel;

        $data = [
            'title' => 'Pencarian IBK'
        ];
        return view('pages/search_ibk', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $ibkList = new ibkModel;
            $data =  [
                'ibkLists' => $ibkList->findAll()
            ];
            // dd($data);
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

        if ($request->getMethod(true) == 'POST') :
            $ibkLists = $ibkDataModel->getDataTable();
            $ibkRow = [];
            $no = $request->getPost("start");
            foreach ($ibkLists as $ibkList) :
                $row = array();

                $row[] = ++$no;
                // $row[] = $ibkList->id;
                $row[] = $ibkList->reffcode;
                $row[] = $ibkList->djp_no;
                $row[] = $ibkList->djp_date;
                $row[] = $ibkList->kpp_no;
                $row[] = $ibkList->dispos_date;
                $row[] = $ibkList->alamat1;
                // $row[] = $ibkList->alamat2;
                $row[] = $ibkList->kode_pos;
                $row[] = $ibkList->check_date;
                $row[] = $ibkList->sla;
                $row[] = $ibkList->jenis_kp;
                $row[] = $ibkList->kantor_pajak;
                $row[] = $ibkList->petugas;
                $row[] = $ibkList->surat_jwb_no;
                $row[] = $ibkList->periode_from;
                // $row[] = $ibkList->periode_to;
                // $row[] = $ibkList->created_at;
                // $row[] = $ibkList->changed_at;
                $ibkRow[] = $row;
            endforeach;

            $output = array(
                "draw" => $request->getPost('draw'),
                "recordsTotal" => $ibkDataModel->count_all_data(),
                "recordsFiltered" => $ibkDataModel->count_filtered_data(),
                "data" => $ibkRow,
            );

            // $this->output->set_content_type('application/json')->set_output(json_encode($output));
            echo json_encode($output);
        endif;
    }
}
