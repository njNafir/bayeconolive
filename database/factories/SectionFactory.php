<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {

    return [
        'class_id' => $faker->randomDigitNotNull,
        'teacher_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'nick_name' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
