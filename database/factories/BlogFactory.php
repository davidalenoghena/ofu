<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\blog;
use Faker\Generator as Faker;

$factory->define(blog::class, function (Faker $faker) {
    return [
        'img' => $faker->name(5),
        'blog_title' => $faker->text(20),
        'blog_post' => $faker->text,
        'author' => $faker->name,
        'status' => $faker->boolean(),
        'category' => $faker->text(6),
    ];
});
