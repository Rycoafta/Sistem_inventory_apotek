<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlatSeeder extends Seeder
{
    public function run()
    {
        $alat = [
            ['id' => 1, 'kode_alat' => 'CNI01', 'nama_alat' => 'Kabel Optik', 'stok' => 20],
            ['id' => 2, 'kode_alat' => 'CNI02', 'nama_alat' => 'RJ45', 'stok' => 100],
            ];
        $this->db->table('alat')->insertBatch($alat);
    }
}
