<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'テストマン',
            'email' => 'testtest@gmail.com',
            'password' => 'testtest',
            'postcode' => '444-4444',
            'address' => '愛知県名古屋市中区栄1234',
            'building' => 'テストマンション404',
            'user_image' => 'elephant.png',
        ];
        DB::table('users')->insert($param);
    }
}
