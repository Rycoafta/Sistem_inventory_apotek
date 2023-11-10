<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKasirTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'total' => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'bayar' => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'kembali' => [
                'type'              => 'INT',
                'constraint'        => 11,
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('kasir');
    }

    public function down()
    {
        $this->forge->dropTable('kasir');
    }
}
