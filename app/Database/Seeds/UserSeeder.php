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
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'gm@gm.com',
            'email' => 'gm@gm.com',
            'password' => password_hash('qwerty', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'manager@manager.com',
            'email' => 'manager@manager.com',
            'password' => password_hash('1q2w3e', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'supervisor@supervisor.com',
            'email' => 'supervisor@supervisor.com',
            'password' => password_hash('wasd1234', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'gm_bd@gm_bd.com',
            'email' => 'gm_bd@gm_bd.com',
            'password' => password_hash('09876543', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'manager_bd@manager_bd.com',
            'email' => 'manager_bd@manager_bd.com',
            'password' => password_hash('asdzxc', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'supervisor_bd@supervisor_bd.com',
            'email' => 'supervisor_bd@supervisor_bd.com',
            'password' => password_hash('plok123', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'staff_warehouse@staff_warehouse.com',
            'email' => 'staff_warehouse@staff_warehouse.com',
            'password' => password_hash('test1234', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
            ['username' => 'staff@staff.com',
            'email' => 'staff@staff.com',
            'password' => password_hash('binary123', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')],
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
