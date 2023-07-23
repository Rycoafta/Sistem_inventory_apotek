<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlatSeeder extends Seeder
{
    public function run()
    {
        $alat = [
            ['id' => 1, 'nama' => 'Kabel Optik', 'stok' => 20],
            ['id' => 2, 'nama' => 'RJ45', 'stok' => 100],
            ];
        $this->db->table('alat')->insertBatch($alat);
    }
}
