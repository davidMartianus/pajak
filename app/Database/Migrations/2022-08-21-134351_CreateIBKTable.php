<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateIBKTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_surat' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'id_nik' => [
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
            ],
            'id_npwp' => [
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
            ],
            'no_rek' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'status_blokir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'file_pajak' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'berita_acara' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'screenshot' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'berita_acara_unblock' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'screenshot_unblock' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ibk_block');
    }

    public function down()
    {
        $this->forge->dropTable('ibk_block');
    }
}
