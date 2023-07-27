<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role = [
            ['id' => 1, 'nama' => 'admin'],
            ['id' => 2, 'nama' => 'gm'],
            ['id' => 3, 'nama' => 'manager'],
            ['id' => 4, 'nama' => 'supervisor'],
            ['id' => 5, 'nama' => 'gm_bd'],
            ['id' => 6, 'nama' => 'manager_bd'],
            ['id' => 7, 'nama' => 'supervisor_bd'],
            ['id' => 8, 'nama' => 'staff_warehouse'],
            ['id' => 9, 'nama' => 'staff'],
            ];
        $this->db->table('role')->insertBatch($role);
    }
}
