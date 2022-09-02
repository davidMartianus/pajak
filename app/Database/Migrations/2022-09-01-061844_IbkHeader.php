<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IbkHeader extends Migration
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
            'djp_no' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'djp_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'kpp_no' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'dispos_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'fiscal_year' => [
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => true,
            ],
            'alamat1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'alamat2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'kode_pos' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => true,
            ],
            'check_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'sla' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
                'null' => true,
            ],
            'jenis_kp' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'kantor_pajak' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'petugas' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'surat_jwb_no' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'periode' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'changed_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ibk_header');
    }

    public function down()
    {
        $this->forge->dropTable('ibk_header');
    }
}
