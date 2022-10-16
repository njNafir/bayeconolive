<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'blood_group' => Arr::random(['O+', 'B-', 'B+']),
        'image' => $faker->word,
        'gender' => Arr::random(['Male', 'Female']),
        'date_of_birth' => $faker->date('Y-m-d H:i:s'),
        'password' => bcrypt(1234), // password
        'father_name' => $faker->name,
        'father_occupation' => $faker->word,
        'mother_name' => $faker->name,
        'address' => $faker->address,
        'status' => Arr::random([1, 0]),
        'created_at'        => $faker->date('Y-m-d H:i:s'),
        'updated_at'        => $faker->date('Y-m-d H:i:s'),
    ];
});
