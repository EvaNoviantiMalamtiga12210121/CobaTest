<?php

namespace App\Database\Seeds;

use App\Models\PenilaianModel;
use CodeIgniter\Database\Seeder;

class PenilaianSeeder extends Seeder
{
    public function run()
    {
        $id = (new PenilaianModel())->insert([
            'mapel_id'         => 'mpl1',
            'siswa_id'         => 'sw1',
            'total_nilai'      => '50',
            'deskripsi_nilai'  => 'bahasa',
        ]);

        echo "hasil id= $id";
    }
}
