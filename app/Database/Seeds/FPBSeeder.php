<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FPBSeeder extends Seeder
{
    public function run()
    {
        $fpb = [
            ['id' => 1, 'tanggal' => '2023-07-21 15:30:00', 'ref' => 'WO-0083-CNI-III-2023', 'nama_peminjam' => 'Randika', 'divisi' => 'Operasional', 'lokasi_penempatan' => 'Jaksel', 'kebutuhan_projek' => 'untuk instalasi', 'keterangan' => 'tidak ada', 'nama_barang' => 'Kabel Optik', 'tipe' => '20mm', 'qty' => '20', 'note' => '-', 'status_fpb' => 'Pending'],
            ['id' => 2, 'tanggal' => '2023-08-21 15:30:00', 'ref' => 'WO-0084-CNI-III-2023', 'nama_peminjam' => 'Bobby', 'divisi' => 'Humas', 'lokasi_penempatan' => 'Jakbar', 'kebutuhan_projek' => 'untuk pemasangan', 'keterangan' => 'tidak ada', 'nama_barang' => 'RJ45', 'tipe' => '1ks', 'qty' => '12', 'note' => 'mungkin nambah', 'status_fpb' => 'Pending'],
            ];
        $this->db->table('fpb')->insertBatch($fpb);
    }
}