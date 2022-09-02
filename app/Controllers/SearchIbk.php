<?php

namespace App\Controllers;

use App\Models\IbkModel;
use App\Models\IbkDataModel;
use App\Models\IbkItemModel;
use App\Models\AuditLogModel;

use Config\Services;

class SearchIbk extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->ibkDataModel = new IbkDataModel($request);
        $this->ibkItemModel = new IbkItemModel($request);
        $this->auditLogModel = new AuditLogModel($request);
    }

    public function index()
    {
        $request = Services::request();
        $AuditLogModel = new AuditLogModel($request);
        // $username = $this->session->userdata('username');
        $username = 'username';
        $menu = 'Pencarian IBK';
        $activity = 'View';
        $AuditLogModel->tracing($username, $menu, $activity);

        $data = [
            'title' => 'Pencarian IBK'
        ];

        echo view('layout/header', $data);

        echo view('input_ibk/search_ibk');

        echo view('layout/footer');
    }

    public function listIbk()
    {
        $request = Services::request();
        $ibkDataModel = new IbkDataModel($request);

        if ($this->request->isAJAX()) {
            if ($request->getMethod(true) === 'POST') :
                $ibkLists = $ibkDataModel->getDataTable();
                $ibkRow = [];
                $no = $request->getPost("start");
                foreach ($ibkLists as $ibkList) :
                    $id = $ibkList->id;
                    $row = array();

                    $concateAlamat = $ibkList->alamat1 . ' ' . $ibkList->alamat2;
                    $djp_date = date("d-m-Y", strtotime($ibkList->djp_date));
                    $check_date = date("d-m-Y", strtotime($ibkList->check_date));
                    $dispos_date = date("d-m-Y", strtotime($ibkList->dispos_date));
                    $string_periode = explode('-', $ibkList->periode);
                    $date1 = explode('/', $string_periode[0]);
                    $date2 = explode('/', $string_periode[1]);
                    $periode_from = trim($date1[1], " ") . '-' . trim($date1[0], " ") . '-' . trim($date1[2], " ");
                    $periode_to = trim($date2[1], " ") . '-' . trim($date2[0], " ") . '-' . trim($date2[2], " ");
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
                    $row[] = '<a href="ibk/detail/' . $id . '" title="detail" class="btn waves-effect waves-light btn-info btn-sm col-sm" style="margin: 2px; width: auto;"><i class="zmdi zmdi-eye"></i></a>';
                    $ibkRow[] = $row;
                endforeach;

                $output = array(
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $ibkDataModel->count_all_data(),
                    "recordsFiltered" => $ibkDataModel->count_filtered_data(),
                    "data" => $ibkRow
                );

                echo json_encode($output);
            endif;
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function detailIbk($id)
    {
        $request = Services::request();
        $AuditLogModel = new AuditLogModel($request);
        // // $username = $this->session->userdata('username');
        // $username = 'username';
        // $menu = 'Pencarian IBK/Detail IBK';
        // $activity = 'View';
        // $AuditLogModel->tracing($username, $menu, $activity);

        $data = [
            'title' => 'Detail IBK'
        ];

        echo view('layout/header', $data);

        $header = $this->ibkDataModel->where(['id' => $id])->first();
        $item = $this->ibkItemModel->where(['djp_no' => $header['djp_no']])->findAll();
        $dataDetail = [
            'header' => $header,
            'items' => $item
        ];
        echo view('input_ibk/detail_ibk', $dataDetail);

        echo view('layout/footer');

        // $username = $this->session->userdata('username');
        $username = 'username';
        $menu = 'Pencarian IBK/Detail IBK' . '/No. DJP ' . $header['djp_no'];
        $activity = 'View';
        $AuditLogModel->tracing($username, $menu, $activity);
    }

    public function detailItemIbk()
    {
        $request = Services::request();
        $ibkItemModel = new IbkItemModel($request);
        if ($this->request->isAJAX()) {
            if ($request->getMethod(true) === 'POST') :
                $djp = $this->request->getVar('djp_no');
                // $items = $this->ibkItemModel->where(['djp_no' => $djp])->findAll();
                $items = $ibkItemModel->getDataTable();
                $detailRow = [];

                $i = 0;
                foreach ($items as $item) :
                    $row = array();

                    $row[] = $item->surat_pajak;
                    $row[] = $item->surat_pajak_date;
                    $row[] = $item->kantor_pajak;
                    $row[] = $item->nasabah;
                    $row[] = $item->outlet;
                    $row[] = $item->nik;
                    $row[] = $item->npwp;
                    $row[] = $item->tempat_lahir;
                    $row[] = $item->tgl_lahir;
                    $row[] = $item->keterangan;
                    $row[] = $item->add_keterangan;

                    $detailRow[] = $row;
                    $i++;
                // $x = $item->surat_pajak;
                endforeach;
                $count = count($items);
                $output = array(
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $ibkItemModel->count_all_data(),
                    "recordsFiltered" => $ibkItemModel->count_filtered_data(),
                    "data" => $detailRow
                );

                echo json_encode($output);
            endif;
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}
