<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role = [
            ['id' => 1, 'nama' => 'admin'],
            ['id' => 2, 'nama' => 'staff'],
            ];
        $this->db->table('role')->insertBatch($role);
    }
}
