<?php

namespace App\Controllers;

use App\Models\AuditLogModel;
use Config\Services;

class AuditLog extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->auditLogModel = new AuditLogModel($request);
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        echo view('layout/header', $data);

        echo view('auditLog/index');

        echo view('layout/footer');
    }

    public function getLog()
    {
        $request = Services::request();
        $auditLogModel = new AuditLogModel($request);
        if ($this->request->isAJAX()) {
            if ($request->getMethod(true) === 'POST') :
                // if ($this->$request->getMethod() == 'POST') :
                $logs = $auditLogModel->getDataTable();
                $logRow = [];
                $no = $request->getPost("start");
                foreach ($logs as $log) :
                    $id = $log->id;
                    $row = array();

                    // $row[] = ++$no;
                    $row[] = $log->tanggal;
                    $row[] = $log->username;
                    $row[] = $log->menu;
                    $row[] = $log->activity;
                    $logRow[] = $row;
                endforeach;

                $output = array(
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $auditLogModel->count_all_data(),
                    "recordsFiltered" => $auditLogModel->count_filtered_data(),
                    "data" => $logRow
                );

                echo json_encode($output);
            endif;
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}
