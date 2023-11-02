<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataMasukSeeder extends Seeder
{
    public function run()
    {
        $data_masuk = [
            ['id' => 1, 'kode_transaksi' => 'TM-2023-0000001', 'tanggal' => '2023-10-21 15:30:00', 'obat' => 'Paracetamol', 'jlh_stok' => 100, 'jenis' => 'Tablet'],
            ['id' => 2, 'kode_transaksi' => 'TM-2023-0000002', 'tanggal' => '2023-10-22 16:00:00', 'obat' => 'Betason-N', 'jlh_stok' => 80, 'jenis' => 'Krim'],
            ];
        $this->db->table('data_masuk')->insertBatch($data_masuk);
    }
}