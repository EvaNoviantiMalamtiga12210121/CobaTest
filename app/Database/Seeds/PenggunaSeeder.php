<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
      $data = [
       'nama'=>'Administrator',
        'gender'=> 'P',
        'email'=>'12210121@bsi.ac.id',
        'sandi'=> password_hash('Pontianak80',PASSWORD_BCRYPT),
        'created_at'=>Time::now(),
        'updated_at'=>Time::now(),
        'deleted_at'=>Time::now(),
      ];

      $this->db->query(
        "INSERT INTO pengguna (nama, gender, email, sandi, created_at, updated_at, deleted_at) VALUES(:nama:, :gender:, :email:, :sandi:, :created_at:, :updated_at:, :deleted_at:)"
      );
}
}