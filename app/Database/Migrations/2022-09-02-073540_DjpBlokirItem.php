<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DjpBlokirItem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomorSuratDJP' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'noSuratPaajak' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'tanggalSurat' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'kantorPajak' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'tanggalDisposisi' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'namaNasabah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'outlet' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'npwp' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'tempatLahir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'tanggalLahir' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'addKeterangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('djp_blokir_item');
    }

    public function down()
    {
        $this->forge->dropTable('djp_blokir_item');
    }
}
