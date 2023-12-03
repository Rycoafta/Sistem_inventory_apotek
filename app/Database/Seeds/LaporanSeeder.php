<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        $laporan = [
            ['id' => 1, 'kode_penjualan' => 'KP-2023-0000001', 'tanggal' => '2023-10-21', 'name_obat' => 'Paracetamol', 'qty' => 2, 'harga' => 88000],
            ['id' => 2, 'kode_penjualan' => 'KP-2023-0000002', 'tanggal' => '2023-10-22', 'name_obat' => 'Betason-N', 'qty' => 1, 'harga' => 15000],
            ];
        $this->db->table('laporan')->insertBatch($laporan);
    }
}
