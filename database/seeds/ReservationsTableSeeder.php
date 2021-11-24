<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'number_of_people' => 2,
            'check_in_day' => '2021-11-5',
            'check_out_day' => '2021-11-6',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'user_id' => 2,
            'number_of_people' => 3,
            'check_in_day' => '2021-11-3',
            'check_out_day' => '2021-11-4',
        ];
        DB::table('reservations')->insert($param);
    }
    
}
