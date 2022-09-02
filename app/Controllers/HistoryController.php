<?php

namespace App\Controllers;

use App\Entities\DataBlokirEntity;
use App\Models\DataBlokirModel;
use CodeIgniter\Files\File;

class HistoryController extends BaseController
{
    protected $data_blokir;

    public function __construct()
    {
        $this->data_blokir = new DataBlokirModel();
    }

    public function unblockHistory()
    {
        $data = [
            'title' => 'Unblock History',
            'data_blokir' => $this->data_blokir->Where('status_blokir', 'Unblocked')
                ->paginate(10, 'default'),
            'pager' => $this->data_blokir->pager,
        ];
        // return view('pages/unblock_history', $data);

        $title = ['title' => 'Unblock History'];
        echo view('layout/header', $title);

        echo view('input_branch/unblock_history', $data);

        echo view('layout/footer');
    }
}
