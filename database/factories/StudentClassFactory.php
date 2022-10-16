<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StudentClass;
use Faker\Generator as Faker;

$factory->define(StudentClass::class, function (Faker $faker) {

    return [
        'name' => $faker->lexify('class ???'),
        'numeric_name' => $faker->randomDigit,
        'status' => $faker->randomElement([1,0]),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
