<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;

class Tapen extends Model
{
    protected $table = 'djp_blokir_item';
    protected $useTimestamps = true;
    protected $allowedFields = [

        'nomorSuratDJP',
        'noSuratPajak',
        'tanggalSurat',
        'kantorPajak',
        'tanggalDisposisi',
        'namaNasabah',
        'outlet', 'nik',
        'npwp',
        'tempatLahir',
        'tanggalLahir',
        'keterangan',
        'add_keterangan'
    ];
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
}
