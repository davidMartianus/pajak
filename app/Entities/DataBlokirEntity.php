<?php 
namespace App\Entities;

class DataBlokirEntity { //cerminan tabel dalam database

    protected $id;//cerminan kolom dari tabel dalam database
    protected $no_surat; 
    protected $nama;
    protected $alamat;
    protected $id_nik;
    protected $id_npwp;
    protected $no_rek;
    protected $status_blokir;
    protected $file_pajak;
    protected $berita_acara;
    protected $screenshot;
    protected $berita_acara_unblock;
    protected $screenshot_unblock;

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->{$key};
        }
    }

    public function __set($key, $value)
    {
        if (property_exists($this, $key)) {
            $this->{$key} = $value;
        }
    }
}

