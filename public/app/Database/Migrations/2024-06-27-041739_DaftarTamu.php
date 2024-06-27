<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarTamu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'asal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'divisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keperluan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'company' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => 'TRUE',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => 'TRUE',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_tamu');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_tamu');
    }
}
