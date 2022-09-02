<?php

namespace App\Models;

use CodeIgniter\Model;

class LogSur extends Model
{
    public $builder;
    protected $table = 'surat';
    protected $primaryKey = 'id';
    protected $useTimeStamps = true;
    protected $allowedFields = [
        'jenis_surat', 'no_surat_djp', 'printed_at', 'todays_year', 'todays_month', 'todays_date', 'depthead1', 'depthead2'
    ];

    function __construct()
    {
        parent::__construct();
        $this->db = db_connect();

        $this->builder = $this->db->table($this->table);
    }

    public function getSuratDate($tipeSurat, $djp)
    {
        $this->builder->select('todays_year', 'todays_month', 'todays_date',)->where('jenis_surat', $tipeSurat)->where('no_surat_djp', $djp);
        $query = $this->builder->get();

        return $query->getResult();
    }
}
