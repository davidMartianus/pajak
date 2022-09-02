<?php

namespace App\Controllers;

use App\Models\IbkModel;
use App\Models\IbkDataModel;
use App\Models\DataBlokirModel;

use Config\Services;

class Pages extends BaseController
{
    protected $data_blokir;

    public function __construct()
    {
        $this->data_blokir = new DataBlokirModel();
    }

    public function index()
    {
        $title = ['title' => 'Dashboard'];
        echo view('layout/header', $title);

        $data = [
            'title' => 'Dashboard',
            // 'totalTaxLetters' => $this->data_blokir->where('status_blokir', '')->countAllResults(),
            // 'totalIBKLetters' => $this->data_blokir->where('status_blokir', '')->countAllResults(),
            // 'totalBlockLetters' => $this->data_blokir->where('status_blokir', '')->countAllResults(),
            'totalBlocked' => $this->data_blokir->where('status_blokir', 'Blocked')->countAllResults(),
            'totalNotBlock' => $this->data_blokir->where('status_blokir', 'Pending Block')->orWhere('status_blokir', NULL)->countAllResults(),
            'totalUnblocked' => $this->data_blokir->where('status_blokir', 'Unblocked')->countAllResults()
        ];
        echo view('pages/dashboard', $data);

        echo view('layout/footer');

        // return view('pages/dashboard', $data);
    }

    // public $ibkModel;

    // public function __construct()
    // {
    //     $this->ibkModel = new IbkModel();
    // }

    // public function index()
    // {
    //     $data = [
    //         'title' => 'Dashboard'
    //     ];

    //     echo view('layout/header', $data);

    //     echo view('pages/dashboard');

    //     echo view('layout/footer');

    //     // return view('pages/dashboard', $data);
    // }

    // public function searchIbk()
    // {
    //     $request = Services::request();

    //     $ibkLists = $this->ibkModel->findAll();

    //     $ibkRow = [];
    //     $no = $request->getPost("start");
    //     foreach ($ibkLists as $ibkList) :
    //         $row = array();
    //         $row[] = ++$no;
    //         $row[] = $ibkList['id'];
    //         $row[] = $ibkList['reffcode'];
    //         $row[] = $ibkList['djp_no'];
    //         $row[] = $ibkList['djp_date'];
    //         $row[] = $ibkList['kpp_no'];
    //         $row[] = $ibkList['dispos_date'];
    //         $row[] = $ibkList['alamat1'];
    //         $row[] = $ibkList['alamat2'];
    //         $row[] = $ibkList['kode_pos'];
    //         $row[] = $ibkList['check_date'];
    //         $row[] = $ibkList['sla'];
    //         $row[] = $ibkList['jenis_kp'];
    //         $row[] = $ibkList['kantor_pajak'];
    //         $row[] = $ibkList['petugas'];
    //         $row[] = $ibkList['surat_jwb_no'];
    //         $row[] = $ibkList['periode_from'];
    //         $row[] = $ibkList['periode_to'];
    //         $row[] = $ibkList['created_at'];
    //         $row[] = $ibkList['changed_at'];
    //         $ibkRow[] = $row;
    //     endforeach;

    //     $output = array(
    //         "draw" => $request->getPost('draw'),
    //         "recordsTotal" => $this->ibkModel->count_all_data(),
    //         "recordsFiltered" => $this->ibkModel->count_filtered_data(),
    //         "data" => $ibkRow,
    //     );

    //     echo json_encode($output);
    //     $data = [
    //         'title' => 'Pencarian IBK'
    //     ];
    //     return view('pages/search_ibk', $data);
    // }



    // public function compareIbk()
    // {
    //     $data = [
    //         'title' => 'Bandingkan IBK'
    //     ];
    //     return view('pages/compare_ibk', $data);
    // }
}
