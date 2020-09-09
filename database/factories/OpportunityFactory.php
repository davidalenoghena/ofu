<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Opportunity;
use Faker\Generator as Faker;

$factory->define(Opportunity::class, function (Faker $faker) {
    return [
        'scholarship_name' => $faker->name,
        'image' => $faker->name,
        'details' => $faker->name,
        'status' => $faker->boolean(),
        'category' => $faker->name()
        //image?
        //Eligibility?
    ];
});
