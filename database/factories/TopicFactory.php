<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'group_id' => factory('App\Group')->create()->id,
        'user_id' => factory('App\User')->create()->id,
        'name' => $faker->sentence,
        'description' => $faker->paragraph(2, true),
    ];
});
