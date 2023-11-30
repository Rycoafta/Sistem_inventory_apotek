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
            'faktur' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'tanggal' => [
                'type'              => 'DATE',
                'null'              => false,
            ],
            'kode_obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'qty' => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'price' => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'nama_pembeli' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('kasir');
    }

    public function down()
    {
        $this->forge->dropTable('kasir');
    }
}
