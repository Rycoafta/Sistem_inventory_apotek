<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FPPSeeder extends Seeder
{
    public function run()
    {
        $fpp = [
            ['id' => 1, 'tanggal' => '2023-07-21 15:30:00', 'jenis_kebutuhan' => 'instalasi', 'nama_pelanggan' => 'Randika Sagala', 'lokasi_penempatan' => 'Bekasi', 'keterangan' => 'no ket'],
            ['id' => 2, 'tanggal' => '2023-10-21 15:30:00', 'jenis_kebutuhan' => 'instalasi kabel', 'nama_pelanggan' => 'Jody', 'lokasi_penempatan' => 'Jakpus', 'keterangan' => 'Butuh mobil'],
            ];
        $this->db->table('fpp')->insertBatch($fpp);
    }
}
