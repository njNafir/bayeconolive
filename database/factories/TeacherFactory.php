<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'nid' => $faker->randomNumber(),
        'blood_group' => $faker->randomElement(['O+', 'A-', 'B+']),
        'password' => bcrypt(1234),
        'designation' => $faker->randomElement(['Professor', 'Headmaster', 'Associated Teacher']),
        'education_qualification' => $faker->word,
        'joining_date' => $faker->date('Y-m-d H:i:s'),
        'mpo_date' => $faker->date('Y-m-d H:i:s'),
        'date_of_birth' => $faker->date('Y-m-d H:i:s'),
        'address' => $faker->address,
        'status' => $faker->randomElement([1,0]),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
