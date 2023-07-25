<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HistorySeeder extends Seeder
{
    public function run()
    {
        $history = [
            ['id' => 1, 'tanggal' => '2023-07-21 15:30:00', 'ref' => 'WO-0083-CNI-III-2023', 'nama' => 'Randika', 'divisi' => 'Operasional', 'lokasi_penempatan' => 'Jaksel', 'kebutuhan_projek' => 'untuk instalasi', 'keterangan' => 'tidak ada', 'namajenis' => 'barang C', 'idbarang' => '1234', 'tipe' => '20mm', 'qty' => '20', 'note' => '-'],
            ['id' => 2, 'tanggal' => '2023-08-21 15:30:00', 'ref' => 'WO-0083-CNI-III-2023', 'nama' => 'Bobby', 'divisi' => 'Humas', 'lokasi_penempatan' => 'Jakbar', 'kebutuhan_projek' => 'untuk pemasangan', 'keterangan' => 'tidak ada', 'namajenis' => 'barang A', 'idbarang' => '1235', 'tipe' => '1ks', 'qty' => '12', 'note' => 'mungkin nambah'],
            ];
        $this->db->table('history')->insertBatch($history);
    }
}
