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
            'kode_penjualan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'tanggal' => [
                'type'              => 'DATE',
                'null'              => false,
            ],
            'name_obat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'qty' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'harga' => [
                'type'              => 'INT',
                'constraint'        => 11
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
