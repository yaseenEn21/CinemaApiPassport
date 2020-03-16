<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'story' => $faker->paragraph(),
        'year' => $faker->numberBetween(1980,2020),
        'rating' => $faker->numberBetween(1,5),
        'length' => $faker->randomElement($array = array('60', '80', '90','120')),
        'cover' => $faker->imageUrl(800,600),
    ];
});
