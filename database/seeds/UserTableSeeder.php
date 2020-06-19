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
            'username' => 'person123',
            'password' => 'pass123',
            'role' => 'personalia'
        ]);
    }
}
