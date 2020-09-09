<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Opportunity;
use Faker\Generator as Faker;

$factory->define(Opportunity::class, function (Faker $faker) {
    return [
        'scholarshipname' => $faker->name,
        'details' => $faker->name,
        'phone' => $faker->randomNumber(3),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'is_admin' => $faker->boolean()
        //image?
        //Eligibility?
    ];
});
