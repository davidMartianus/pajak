<?php

namespace App\Models;

use CodeIgniter\Model;

class IbkModel extends Model
{
    public $builder;
    protected $table = 'ibk_header';
    protected $primaryKey = 'id';
    protected $useTimeStamps = true;
}
