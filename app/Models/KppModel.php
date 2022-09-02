<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Model;

class KppModel extends Model
{
    protected $table = 'kantor_pajak';
    protected $primaryKey = 'id';
    protected $useTimeStamps = true;

    protected $allowedFields = [
        'kpp_name', 'alamat1', 'alamat2'
    ];

    protected $column_order = [null, 'kpp_name', 'alamat1', 'alamat2'];
    protected $column_search = ['kpp_name', 'alamat1', 'alamat2'];
    protected $order = ['kpp_name' => 'asc'];
    protected $request;
    protected $db;
    protected $dt;

    public $builder;

    function __construct(IncomingRequest $request)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);
        $this->builder = $this->db->table($this->table);
    }

    private function _get_datatables_query()
    {
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

    public function tracing($username, $menu, $activity)
    {
        $tanggal = (new \CodeIgniter\I18n\Time("now", "Asia/Jakarta", "id_ID"));
        if ($hasil = $this->dt->insert([
            'tanggal' => $tanggal,
            'username' => $username,
            'menu' => $menu,
            'activity' => $activity
        ]) == true) {
            $data = $hasil;
            return $data;
        } else {
            return FALSE;
        }
    }
}
