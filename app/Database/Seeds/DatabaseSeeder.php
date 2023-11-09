<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call('DataMasukSeeder');
        $this->call('LaporanSeeder');
        $this->call('DataMasukSeeder');
        $this->call('DataObatSeeder');
        $this->call('RoleSeeder');
        $this->call('UserSeeder');
    }
}
