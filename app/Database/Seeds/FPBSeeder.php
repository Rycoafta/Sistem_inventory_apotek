<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FPBSeeder extends Seeder
{
    public function run()
    {
        $fpb = [
            ['id' => 1, 'tanggal' => '2023-07-21 15:30:00', 'ref' => 'WO-0083-CNI-III-2023', 'nama' => 'Randika', 'divisi' => 'Operasional', 'lokasi_penempatan' => 'Jaksel', 'kebutuhan_projek' => 'untuk instalasi', 'keterangan' => 'tidak ada'],
            ['id' => 2, 'tanggal' => '2023-08-21 15:30:00', 'ref' => 'WO-0083-CNI-III-2023', 'nama' => 'Bobby', 'divisi' => 'Humas', 'lokasi_penempatan' => 'Jakbar', 'kebutuhan_projek' => 'untuk pemasangan', 'keterangan' => 'tidak ada'],
            ];
        $this->db->table('fpb')->insertBatch($fpb);
    }
}
