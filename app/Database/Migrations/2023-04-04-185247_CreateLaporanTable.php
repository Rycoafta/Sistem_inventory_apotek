<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporanTable extends Migration
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
            'kode_obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'nama_obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'hb_obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'hj_obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'stok' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'jenis' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('laporan');
    }

    public function down()
    {
        $this->forge->dropTable('laporan');
    }
}
