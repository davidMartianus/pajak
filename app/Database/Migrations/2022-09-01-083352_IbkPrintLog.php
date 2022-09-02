<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IbkPrintLog extends Migration
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
            'jenis_surat' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'no_surat_djp' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'printed_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'todays_year' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => true,
            ],
            'todays_month' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => true,
            ],
            'todays_date' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'depthead1' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'depthead2' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ibk_print_log');
    }

    public function down()
    {
        $this->forge->dropTable('ibk_print_log');
    }
}
