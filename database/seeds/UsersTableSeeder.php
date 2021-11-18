<?php

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
        factory(App\User::class,20)->create();

        // // fakerの定義→コントローラーでもブレードでもどこでも使える
        // $faker = \Faker\Factory::create('ja_JP');
        // for ($i = 0; $i < 50; $i++){
        // $param = [
        //     'name' => $faker->name(),
        //     // substr(文字列、前から何番目か)
        //     // 指定した番号まで文字を切り取る
        //     'address' => substr($faker->address(),7),
        //     'tel' => $faker->phoneNumber(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ];
        // DB::table('users')->insert($param);
        // }
    }
}