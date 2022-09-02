<?php 

namespace App\Models;

use CodeIgniter\Model;

class DataBlokirModel extends Model
{
    protected $table         = 'ibk_block'; 
    protected $primaryKey    = 'id';
    protected $returnType    = \App\Entities\DataBlokirEntity::class;//entiti dari model
    protected $useAutoIncrement = true;
    protected $allowedFields = [ //field mana yang boleh dirubah ketika melakukan insert data
        'no_surat', 'nama', 'alamat', 'id_nik', 'id_npwp', 'no_rek', 
        'status_blokir', 'file_pajak', 'berita_acara', 'screenshot', 'berita_acara_unblock', 'screenshot_unblock'
    ];

}