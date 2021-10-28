<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Reservation_detailsTableSeeder extends Seeder
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
            'accommodation_date' => '2021-11-3',
            'accommodation_fee' => 2500,
        ];
        DB::table('reservation_details')->insert($param);
    }
}
