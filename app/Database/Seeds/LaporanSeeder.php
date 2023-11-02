<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        $laporan = [
            ['id' => 1, 'kode_transaksi' => 'TM-2023-0000001', 'tanggal' => '2023-10-21 15:30:00', 'kode_obat' => 'B000001', 'nama_obat' => 'Paracetamol', 'hb_obat' => 'Rp33.000', 'hj_obat' => 'Rp44.000', 'stok' => 100, 'jenis' => 'Tablet'],
            ['id' => 2, 'kode_transaksi' => 'TM-2023-0000002', 'tanggal' => '2023-10-22 16:00:00', 'kode_obat' => 'B000002', 'nama_obat' => 'Betason-N', 'hb_obat' => 'Rp9.000', 'hj_obat' => 'Rp15.000', 'stok' => 80, 'jenis' => 'Krim'],
            ];
        $this->db->table('laporan')->insertBatch($laporan);
    }
}
