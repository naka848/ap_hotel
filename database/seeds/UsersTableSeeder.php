<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $param = [
            'name' => 'hikaru',
            'address' => 'Onomichi-shi, Hiroshima-ken',
            'tel' => '12-3456',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'akira',
            'address' => 'Chiyoda-ku, Tokyo-to',
            'tel' => '78-9101',
        ];
        DB::table('users')->insert($param);
    }
}
