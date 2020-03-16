<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,250),
        'movie_id' => $faker->numberBetween(1, 300),
        'rating' => $faker->numberBetween(1,5),
        'body' => $faker->paragraph(),
    ];
});
