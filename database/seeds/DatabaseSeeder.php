<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(Reservation_detailsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(Room_typesTableSeeder::class);
    }
}
