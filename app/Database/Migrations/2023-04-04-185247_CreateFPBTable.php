<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFPBTable extends Migration
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
            'ref' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'nama_peminjam' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'divisi' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'lokasi_penempatan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'kebutuhan_projek' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'keterangan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'nama_barang' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'tipe' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'qty' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'note' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'status_fpb' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('fpb');
    }

    public function down()
    {
        $this->forge->dropTable('fpb');
    }
}
