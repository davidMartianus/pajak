<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserLog extends Migration
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
            'tanggal' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'menu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'activity' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user_log');
    }

    public function down()
    {
        $this->forge->dropTable('user_log');
    }
}
