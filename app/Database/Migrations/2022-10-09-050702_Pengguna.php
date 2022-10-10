<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Pengguna extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true],
            'nama'           => ['type'=>'varchar', 'constraint'=>80, 'null'=>false],
            'gender'             => ['type'=>'enum("L","P")', 'null'=>true ],
            'email'        => ['type'=>'varchar','constraint'=>128,'null'=>true,],
            'sandi'   => ['type'=>'varchar','constraint'=>60, 'null'=>true],
            'create_at'=>['type'=>'datetime', 'null'=>true],
            'update_at'=>['type'=>'datetime', 'null'=>true],
            'delete_at' =>['type'=>'datetime', 'null'=>true],
                      
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createtable('Pengguna');
    }

    public function down()
    {
        $this->forge->droptable('Pengguna'); 
    }
}
