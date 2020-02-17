<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TopicMessage;
use Faker\Generator as Faker;

$factory->define(TopicMessage::class, function (Faker $faker) {
    return [
        'message' => $faker->sentence,
    ];
});
