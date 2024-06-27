<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama'      => 'Admin',
            'username'  => 'admin',
            'password'  => md5('admin'),
        ];

        $this->db->table('tbl_admin')->insert($data);
    }
}
