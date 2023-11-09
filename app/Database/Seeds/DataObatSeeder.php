<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataObatSeeder extends Seeder
{
    public function run()
    {
        $data_obat = [
            ['id' => 1, 'kode_obat' => 'B000001', 'nama_obat' => 'Paracetamol', 'hb_obat' => 33000, 'hj_obat' => 44000, 'stok' => 100, 'jenis' => 'Tablet'],
            ['id' => 2, 'kode_obat' => 'B000002', 'nama_obat' => 'Betason-N', 'hb_obat' => 9000, 'hj_obat' => 15000, 'stok' => 80, 'jenis' => 'Krim'],
            ];
        $this->db->table('data_obat')->insertBatch($data_obat);
    }
}
