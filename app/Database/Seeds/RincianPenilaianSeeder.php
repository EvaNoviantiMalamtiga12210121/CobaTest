<?php

namespace App\Database\Seeds;

use App\Models\RincianPenilaianModel;
use CodeIgniter\Database\Seeder;

class RincianPenilaianSeeder extends Seeder
{
    public function run()
    {
            $id = (new RincianPenilaianModel())->insert([
                'penilaian_id'          => 'pnl1',
                'nama_nilai'            => 'limapuluh',
                'nilai_angka'           => '50',
                'nilai_deskripsi'       => 'bahasa',
            ]);
    
            echo "hasil id= $id";
        }
    }
    