<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DivisiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_divisi'      => 'Sales'
            ],
            [
                'nama_divisi'      => 'Marketing'
            ],
            [
                'nama_divisi'      => 'Finance'
            ],
            [
                'nama_divisi'      => 'Purchasing'
            ],
            [
                'nama_divisi'      => 'Produksi'
            ],
            [
                'nama_divisi'      => 'Logistic'
            ],
            [
                'nama_divisi'      => 'Admin Pajak'
            ],
            [
                'nama_divisi'      => 'HRD'
            ],
        ];

        $this->db->table('tbl_divisi')->insertBatch($data);
    }
}
