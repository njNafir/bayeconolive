<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TeacherDetail;
use Faker\Generator as Faker;

$factory->define(TeacherDetail::class, function (Faker $faker) {

    return [
        'teacher_id' => $faker->randomDigitNotNull,
        'main_salary' => $faker->word,
        'allowance' => $faker->word,
        'prev_increment' => $faker->word,
        'total' => $faker->word,
        're_increment' => $faker->word,
        'pf' => $faker->word,
        'submitted_pf' => $faker->word,
        'total_sin' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
