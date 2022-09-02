<?php

namespace App\Models;

use App\Controllers\NewBlokir;
use CodeIgniter\Model;
use CodeIgniter\HTTP\IncomingRequest;

class Db_petugas extends Model
{
    protected $primaryKey = 'id';
    protected $useTimeStamps = true;


    protected $column_order = [
        'reffcode',
        'nomorSuratDJP',
        'tanggalSuratDJP',
        'tanggalDisposisi',
        'alamat',
        'fiscal_year',
        'kodePos',
        'tanggalPemeriksaan',
        'sla', 'jenisKantorPajak',
        'kantorPajak',
        'petugas',
        'nomorSuratJawaban'
    ];
    protected $column_search = ['nomorSuratDJP'];
    protected $order = ['nomorSuratDJP' => 'asc'];
    protected $request;
    protected $db;
    protected $dt;

    public $builder;





    protected $table = 'djp_blokir_header';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'reffcode',
        'nomorSuratDJP',
        'tanggalSuratDJP',
        'tanggalDisposisi',
        'alamat',
        'fiscal_year',
        'kodePos',
        'tanggalPemeriksaan',
        'sla', 'jenisKantorPajak',
        'kantorPajak',
        'petugas',
        'nomorSuratJawaban'
    ];


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


    public function getReffCode()
    {
        $currentYear = date('Y');

        $this->builder->selectMax('reffcode')->where('fiscal_year', $currentYear);
        $query = $this->builder->get();
        return $query->getResult();
    }

    public function getSuratDate($djp)
    {
        $this->builder->select('created_at')->where('nomorSuratDJP', $djp);
        $query = $this->builder->get();

        return $query->getResult();
    }
}
