<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataMasukTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'kode_transaksi' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'tanggal' => [
                'type'              => 'DATETIME',
                'null'              => false,
            ],
            'obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'jlh_stok' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'jenis' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('data_masuk');
    }

    public function down()
    {
        $this->forge->dropTable('data_masuk');
    }
}
