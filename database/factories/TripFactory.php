<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    return [
        'admin' => factory('App\User')->create()->id,
        'name' => $faker->name,
        'description' => $faker->sentence,
        'photo' => 'nophoto', //$faker->imageUrl($width = 640, $height = 480),
        'departure' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'return_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'visibility' => $faker->boolean(50),
        'foreseen_budget' => $faker->randomFloat(2, 100, 50000),
    ];
});
