<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'message' => $faker->sentence,
        'read' => $faker->boolean(50),
        'user1_id' => factory('App\User')->create()->id,
        'user2_id' => factory('App\User')->create()->id,
    ];
});
