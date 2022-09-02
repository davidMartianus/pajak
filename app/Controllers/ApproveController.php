<?php

namespace App\Controllers;

use App\Entities\DataBlokirEntity;
use App\Models\DataBlokirModel;
use CodeIgniter\Files\File;
use CodeIgniter\RESTful\ResourceController;

class ApproveController extends BaseController
{
    protected $data_blokir;

    public function __construct()
    {
        $this->data_blokir = new DataBlokirModel();
    }

    public function blockApproveList()
    {
        $title = ['title' => 'Block Approve List'];
        $data = [
            'title' => 'Block Approve List',
            'data_blokir' => $this->data_blokir->asObject()->where('status_blokir', 'Pending Block')
                ->paginate(10, 'default'),
            'pager' => $this->data_blokir->pager,
        ];
        // return view('pages/block_approve_list', $data);

        echo view('layout/header', $title);

        echo view('input_branch/block_approve_list', $data);

        echo view('layout/footer');
    }

    public function blockApproveInput($id)
    {
        $title = ['title' => 'Block Approve Form'];
        $data_blokir = $this->data_blokir->where('id', $id)->first();

        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $status = $this->request->getVar("status");
            $data_blokir->status_blokir = $status;
            if ($this->data_blokir->update($id, $data_blokir)) {
                return json_encode(['success' => true, 'message' => "Status successfully update into " . $status]);
            } else {
                return json_encode(['success' => false, 'message' => "Status failed update into " . $status]);
            }
        }

        $data = [
            'title' => 'Block Approve Form',
            'data_blokir' => $data_blokir
        ];
        // return view('pages/block_approve_input', $data);

        echo view('layout/header', $title);

        echo view('input_branch/block_approve_input', $data);

        echo view('layout/footer');
    }

    public function unblockApproveList()
    {
        $title = ['title' => 'Unblock Approve List'];
        $data = [
            'title' => 'Unblock Approve List',
            'data_blokir' => $this->data_blokir->asObject()->where('status_blokir', 'Pending Unblock')
                ->paginate(10, 'default'),
            'pager' => $this->data_blokir->pager,
        ];
        // return view('pages/unblock_approve_list', $data);

        echo view('layout/header', $title);

        echo view('input_branch/unblock_approve_list', $data);

        echo view('layout/footer');
    }

    public function unblockApproveInput($id)
    {
        $title = ['title' => 'Unblock Approve Form'];
        $data_blokir = $this->data_blokir->where('id', $id)->first();

        if ($this->request->isAJAX() && $this->request->getMethod(true) === 'POST') {
            $status = $this->request->getVar("status");
            $data_blokir->status_blokir = $status;
            if ($this->data_blokir->update($id, $data_blokir)) {
                return json_encode(['success' => true, 'message' => "Status successfully update into " . $status]);
            } else {
                return json_encode(['success' => false, 'message' => "Status failed update into " . $status]);
            }
        }

        $data = [
            'title' => 'Unblock Approve Form',
            'data_blokir' => $data_blokir
        ];
        // return view('pages/unblock_approve_input', $data);

        echo view('layout/header', $title);

        echo view('input_branch/unblock_approve_input', $data);

        echo view('layout/footer');
    }
}
