<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IbkItem extends Migration
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
            'djp_no' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'surat_pajak' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'kantor_pajak' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'nasabah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'outlet' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'npwp' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'add_keterangan' => [
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
        $this->forge->createTable('ibk_item');
    }

    public function down()
    {
        $this->forge->dropTable('ibk_item');
    }
}
