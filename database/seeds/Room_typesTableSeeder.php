<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Room_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_type' => '和室',
            'capacity' => 4,
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type' => '洋室',
            'capacity' => 2,
        ];
        DB::table('room_types')->insert($param);
    }
}
