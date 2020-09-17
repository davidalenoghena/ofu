<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Internship;
use Faker\Generator as Faker;

$factory->define(Internship::class, function (Faker $faker) {
    return [
        'img' => $faker->text(5),
        'name' => $faker->name(6),
        'location' => $faker->text(9),
        'eligibility_slug' => $faker->text(10),
        'status_slug' => $faker->numberBetween($min = 0, $max = 2),
        'detail' => $faker->text(20),
        'about' => $faker->text(1000),
        'status' => $faker->text(100),
        'eligibility' => $faker->text(50),
        'how_to_apply' => $faker->text(1000),
        'description' => $faker->text(500),
        'note' => $faker->text(250),
        'word' => $faker->unique()->word(5)
    ];
});
