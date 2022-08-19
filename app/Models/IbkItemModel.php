<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Model;

class IbkItemModel extends Model
{
    protected $table = 'ibk_item';
    protected $primaryKey = 'id';
    protected $useTimeStamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = [
        'djp_no', 'surat_pajak', 'surat_pajak_date', 'kantor_pajak', 'cif', 'nasabah', 'rekening', 'outlet',
        'nik', 'npwp', 'tempat_lahir', 'tgl_lahir', 'keterangan', 'add_keterangan'
    ];

    protected $column_order = [
        'djp_no', 'surat_pajak', 'surat_pajak_date', 'kantor_pajak', 'cif', 'nasabah', 'rekening', 'outlet',
        'nik', 'npwp', 'tempat_lahir', 'tgl_lahir', 'keterangan', 'add_keterangan'
    ];
    protected $column_search = ['surat_pajak'];
    protected $order = ['surat_pajak' => 'asc'];
    protected $request;
    protected $db;
    protected $dt;

    public $builder;

    function __construct(IncomingRequest $request)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;

        $this->builder = $this->db->table($this->table);

        $this->dt = $this->db->table($this->table);
    }

    private function _get_datatables_query()
    {
        // $this->builder = $this->db->table($table);
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($this->request->getPost('search')['value']) {
                if ($i === 0) {
                    $this->dt->groupStart();
                    $this->dt->like($item, $this->request->getPost('search')['value']);
                } else {
                    $this->dt->orLike($item, $this->request->getPost('search')['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->dt->groupEnd();
            }
            $i++;
        }

        if ($this->request->getPost('order')) {
            $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }

    public function getDataTable()
    {
        $this->_get_datatables_query();
        if ($this->request->getPost('length') != -1)
            $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        $query = $this->dt->get();
        return $query->getResult();
    }

    public function count_filtered_data()
    {
        $this->_get_datatables_query();
        return $this->dt->countAllResults();
    }

    public function count_all_data()
    {
        $tbl_storage = $this->db->table($this->table);
        return $tbl_storage->countAllResults();
    }

    // public function getReffCode()
    // {
    //     $currentYear = date('Y');

    //     $this->builder->selectMax('reffcode')->where('fiscal_year', $currentYear);
    //     $query = $this->builder->get();
    //     return $query->getResult();
    // }
}
