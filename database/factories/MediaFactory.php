<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {

    $qualities = ['360','480','720','1080'];

    return [
        'quality' => $faker->randomElement($qualities),
        'movie_id' => $faker->numberBetween(1,300),
        'source' => $faker->imageUrl(800,600),
        'type' => $faker->randomElement(['Trailer' , 'Movie']),
    ];
});
