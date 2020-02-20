<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'admin' => factory('App\User')->create()->id,
        'name' => $faker->name,
        'description' => $faker->sentence,
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'visibility' => $faker->boolean(50),
    ];
});
