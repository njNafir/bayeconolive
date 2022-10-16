<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StudentDetail;
use Faker\Generator as Faker;

$factory->define(StudentDetail::class, function (Faker $faker) {

    return [
        'student_id' => $faker->randomDigitNotNull,
        'class_id' => $faker->randomDigitNotNull,
        'section_id' => $faker->randomDigitNotNull,
        'session_id' => $faker->randomDigitNotNull,
        'roll_no' => $faker->word,
        'reg_no' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
