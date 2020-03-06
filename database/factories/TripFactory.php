<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    return [
        'admin' => factory('App\User')->create()->id,
        'name' => $faker->country,
        'description' => $faker->sentence,
        'photo' => 'nophoto', //$faker->imageUrl($width = 640, $height = 480),
        'departure' => $faker->dateTimeBetween('-5 years', '2025-12-31', null),
        'return_date' => $faker->dateTimeBetween('-5 years', '2025-12-31', null),
        'visibility' => $faker->boolean(50),
        'foreseen_budget' => $faker->randomFloat(2, 100, 50000),
    ];
});
