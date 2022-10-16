<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {

    return [
        'year' => $faker->randomDigitNotNull,
        'status' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
