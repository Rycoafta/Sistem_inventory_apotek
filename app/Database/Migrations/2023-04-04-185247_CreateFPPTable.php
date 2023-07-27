<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFPPTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'tanggal' => [
                'type'              => 'DATETIME',
                'null'              => false,
            ],
            'jenis_kebutuhan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'nama_pelanggan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'lokasi_penempatan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'ref' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'ref_fpb' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'keterangan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'nama_barang' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'id_barang' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'tipe' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'harga_satuan' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'qty' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'jumlah' => [
                'type'              => 'INT',
                'constraint'        => 20
            ],
            'vendor' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('fpp');
    }

    public function down()
    {
        $this->forge->dropTable('fpp');
    }
}
