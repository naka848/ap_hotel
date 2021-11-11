<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Reservation_roomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_id' => 1,
            'room_id' => 1,
            'accommodation_date' => '2021-11-03',
            'accommodation_fee' => 3400,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 2,
            'room_id' => 2,
            'accommodation_date' => '2021-11-03',
            'accommodation_fee' => 5400,
        ];
        DB::table('reservation_room')->insert($param);

        $param = [
            'reservation_id' => 3,
            'room_id' => 3,
            'accommodation_date' => '2021-11-03',
            'accommodation_fee' => 6500,
        ];
        DB::table('reservation_room')->insert($param);
    }
}
