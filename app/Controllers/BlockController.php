<?php

namespace App\Controllers;

use App\Entities\DataBlokirEntity;
use App\Models\DataBlokirModel;
use CodeIgniter\Files\File;

class BlockController extends BaseController
{
    protected $data_blokir;

    public function __construct()
    {
        $this->data_blokir = new DataBlokirModel();
    }

    public function blockList()
    {
        $data = [
            'title' => 'Block List',
            'data_blokir' => $this->data_blokir->Where('status_blokir', 'Block Rejected')
                ->orWhere('status_blokir', 'Pending Block')
                ->orWhere('status_blokir', NULL)
                ->paginate(10, 'default'),
            'pager' => $this->data_blokir->pager,
        ];
        // return view('pages/block_list', $data);

        $title = ['title' => 'Block List'];
        echo view('layout/header', $title);

        echo view('input_branch/block_list', $data);

        echo view('layout/footer');
    }

    public function blockInput($id)
    {
        $data = [
            'title' => 'Block Form',
            'data_blokir' => $this->data_blokir->where('id', $id)->first()
        ];
        // return view('pages/block_input', $data);

        $title = ['title' => 'Block Form'];
        echo view('layout/header', $title);

        echo view('input_branch/block_input', $data);

        echo view('layout/footer');
    }

    public function unblockList()
    {
        $data_filter = [];
        // $status_block = [];

        $nama = $this->request->getVar('nama');
        $nik = $this->request->getVar('nik');
        $npwp = $this->request->getVar('npwp');
        // $status = $this->request->getVar('status');

        if ($nama != '') {
            $data_filter['nama'] = $nama;
        }

        if ($nik != '') {
            $data_filter['id_nik'] = $nik;
        }

        if ($npwp != '') {
            $data_filter['id_npwp'] = $npwp;
        }

        // if($status != '') {
        //     $status_block['status_blokir'] = $status == 'No Status' ? null : $status;
        // }

        // $data_blokir =  isset($data_filter) || isset($status_block) ? $this->data_blokir->like($data_filter)->where('status_blokir', 'blocked')->paginate(10, 'default') 
        //                 : $this->data_blokir->where('status_blokir', 'blocked')->paginate(10, 'default');

        // $data_blokir =  $this->data_blokir->like($data_filter)->where('status_blokir', 'blocked')->paginate(10, 'default');

        $data = [
            'title' => 'Unblock List',
            'data_blokir' => $this->data_blokir->like($data_filter)->where('status_blokir', 'blocked')->paginate(10, 'default'),
            'pager' => $this->data_blokir->pager
        ];
        // return view('pages/unblock_list', $data);

        $title = ['title' => 'Unblock List'];
        echo view('layout/header', $title);

        echo view('input_branch/unblock_list', $data);

        echo view('layout/footer');
    }

    public function unblockInput($id)
    {
        $data = [
            'title' => 'Unblock Form',
            'data_blokir' => $this->data_blokir->where('id', $id)->first()
        ];
        // return view('pages/unblock_input', $data);
        $title = ['title' => 'Unblock Input'];
        echo view('layout/header', $title);

        echo view('input_branch/unblock_input', $data);

        echo view('layout/footer');
    }

    public function uploadBlockedDocuments()
    {
        $id = $this->request->getVar("id");
        $data_blokir = $this->data_blokir->asObject()->where('id', $id)->first(); //query untuk select file

        //$data_blokir = variabel untuk menyimpan data

        $document = $this->request->getFile('document');
        $document->move(WRITEPATH . 'uploads\\document\\', $data_blokir->id . "_" . $document->getName(), $overwrite = true);
        $data_blokir->berita_acara = $document->getName();

        $screenshot = $this->request->getfile('screenshot');
        $screenshot->move(WRITEPATH . 'uploads\\screenshot\\', $data_blokir->id . "_" . $screenshot->getName(), $overwrite = true);
        $data_blokir->screenshot = $screenshot->getName();


        $data_blokir->status_blokir = 'Pending Block'; //ubah status blokir jika sudah upload 

        $this->data_blokir->save($data_blokir); //menyimpan data ke database

        //dd( $filePajak, $this->data_blokir, $data_blokir, $data_blokir->{$this->data_blokir->primaryKey}, is_object($data_blokir) && isset($data_blokir->{$this->data_blokir->primaryKey}),  $this->data_blokir->getIdValue($data_blokir));

        return redirect()->route('block-list');
    }

    public function uploadUnblockedDocuments()
    {
        $id = $this->request->getVar("id");
        $data_blokir = $this->data_blokir->asObject()->where('id', $id)->first();

        $document_unblock = $this->request->getFile('document_unblock');
        $document_unblock->move(WRITEPATH . 'uploads\\document_unblock\\', $data_blokir->id . "_" . $document_unblock->getName(), $overwrite = true);
        $data_blokir->berita_acara_unblock = $document_unblock->getName();

        $screenshot_unblock = $this->request->getfile('screenshot_unblock');
        $screenshot_unblock->move(WRITEPATH . 'uploads\\screenshot_unblock\\', $data_blokir->id . "_" . $screenshot_unblock->getName(), $overwrite = true);
        $data_blokir->screenshot_unblock = $screenshot_unblock->getName();

        $data_blokir->status_blokir = 'Pending Unblock'; //ubah status blokir jika sudah upload 

        $this->data_blokir->save($data_blokir);

        //dd( $this->data_blokir, $data_blokir, $data_blokir->{$this->data_blokir->primaryKey}, is_object($data_blokir) && isset($data_blokir->{$this->data_blokir->primaryKey}),  $this->data_blokir->getIdValue($data_blokir));

        return redirect()->route('unblock-list');
    }
}
