<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DjpBlokirHeader extends Migration
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
            'reffcode' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'nomorSuratDJP' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'tanggalSuratDJP' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'tanggalDisposisi' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kodePos' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => true,
            ],
            'sla' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
                'null' => true,
            ],
            'jenisKantorPajak' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'kantorPajak' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'petugas' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'nomorSuratJawaban' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'fiscal_year' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
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
        $this->forge->createTable('djp_blokir_header');
    }

    public function down()
    {
        $this->forge->dropTable('djp_blokir_header');
    }
}
