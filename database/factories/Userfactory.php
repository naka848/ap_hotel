<!-- Factory…ダミーデータを作るためのクラス -->

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {

    return [
        'name' => $faker->name(),
        'address' => substr($faker->address(),7),
        'tel' => $faker->phoneNumber(),
    ];
});