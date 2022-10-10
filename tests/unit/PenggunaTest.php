<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
class PenggunaTest extends CIUnitTestCase{
    use FeatureTestTrait;

    public function testLogin(){
        $this->call('post', 'login',[
            'email' => '12210121@bsi.ac.id',
            'sandi' => 'pontianak80'
        ])->assertStatus(200);
    }

    public function testCreatShowUpdateDelete(){
        $json = $this->call('post', 'pengguna', [
            'nama'  => 'Testing nama',
            'gender'=> 'L',
            'email' => 'testing@email.com',
            'sandi' => 'testing'
        ])->getJSON();
        $js  = json_decode($json, true);

        $this->assertTrue($js['id'] > 0);

        $this->call('get', "pengguna/".$js['id'])
                    ->assertStatus(200);

        $this->call('patch', 'pengguna', [
            'nama'      => 'Testing pengguna update',
            'gender'    => 'P',
            'email'     => 'testingupdate@email.com',
            'id' => $js['id']
        ])->assertStatus(200);

        $this->call('delete', 'pengguna', [
            'id' => $js['id']
        ])->assertStatus(200);
    }

    public function testRead(){
        $this->call('get', 'pengguna/all')
        ->assertStatus(200);
    }

    public function testLogout(){
        $this->call('delete', 'login')
        ->assertStatus(302);
    }

}