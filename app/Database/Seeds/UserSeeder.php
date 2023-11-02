<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['username' => 'admin@admin.com',
            'email' => 'admin@admin.com',
            'password' => password_hash('1111', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'staff@staff.com',
            'email' => 'staff@staff.com',
            'password' => password_hash('2222', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
