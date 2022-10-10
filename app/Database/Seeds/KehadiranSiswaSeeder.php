<?php

namespace App\Database\Seeds;

use App\Models\KehadiranSiswaModel;
use CodeIgniter\Database\Seeder;

class KehadiranSiswaSeeder extends Seeder
{
    public function run()
    {
        $id = (new KehadiranSiswaModel())->insert([
            'kehadiran_guru_id' => 'gr1',
            'siswa_id'          => 'sw1',
            'status_hadir'      => 'Y',
        ]);

        echo "hasil id= $id";
    }
}
