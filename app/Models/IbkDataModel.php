<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Model;

class IbkDataModel extends Model
{
    protected $table = 'ibk_header';
    // protected $table_ibk_item = 'ibk_item';
    protected $primaryKey = 'id';
    protected $useTimeStamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = [
        'reffcode', 'djp_no', 'djp_date', 'kpp_no', 'dispos_date', 'fiscal_year', 'alamat1', 'alamat2', 'kode_pos',
        'check_date', 'sla', 'jenis_kp', 'kantor_pajak', 'petugas', 'surat_jwb_no', 'periode', 'created_at', 'updated_at'
    ];

    // protected $allowedFields_item = [
    //     'djp_no', 'surat_pajak', 'surat_pajak_date', 'kantor_pajak', 'cif', 'nasabah', 'rekening', 'outlet',
    //     'nik', 'npwp', 'tempat_lahir', 'tgl_lahir', 'keterangan', 'add_keterangan', 'created_at', 'updated_at'
    // ];

    protected $column_order = [null, null, 'djp_no', 'djp_date', 'kpp_no', 'dispos_date', 'alamat1', 'alamat2', 'kode_pos', 'check_date', 'sla', 'jenis_kp', 'kantor_pajak', 'petugas', 'surat_jwb_no', 'periode_from', 'periode_to', null, null];
    protected $column_search = ['djp_no'];
    protected $order = ['djp_no' => 'asc'];
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

    // public function create($data)
    // {
    //     return $this->builder->insert($data);
    // }

    public function getReffCode()
    {
        $currentYear = date('Y');

        $this->builder->selectMax('reffcode')->where('fiscal_year', $currentYear);
        $query = $this->builder->get();
        return $query->getResult();
    }
}
