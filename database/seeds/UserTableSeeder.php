<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'id' => '1',
            'username' => 'admin',
            'password' => 'pass123',
            'role' => 'administrator'
        ]);
        DB::table('user')->insert([
            'id' => '2',
            'username' => 'pendeta123',
            'password' => 'pass123',
            'role' => 'pendeta'
        ]);
        DB::table('user')->insert([
            'id' => '3',
            'username' => 'personaliaTornagodang',
            'password' => 'pass123',
            'role' => 'personaliaTornagodang'
        ]);
        DB::table('user')->insert([
            'id' => '4',
            'username' => 'personaliaSibosur',
            'password' => 'pass123',
            'role' => 'personaliaSibosur'
        ]);
        DB::table('user')->insert([
            'id' => '5',
            'username' => 'personaliaMatio',
            'password' => 'pass123',
            'role' => 'personaliaMatio'
        ]);
        DB::table('user')->insert([
            'id' => '6',
            'username' => 'personaliaPardomuan',
            'password' => 'pass123',
            'role' => 'personaliaPardomuan'
        ]);
    }
}
