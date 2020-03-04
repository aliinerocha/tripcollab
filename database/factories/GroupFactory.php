<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'admin' => factory('App\User')->create()->id,
        'name' => $faker->name,
        'description' => $faker->sentence,
        'photo' => 'nophoto',
        'visibility' => $faker->boolean(50),
    ];
});
