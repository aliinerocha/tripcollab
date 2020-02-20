<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TopicMessage;
use Faker\Generator as Faker;

$factory->define(TopicMessage::class, function (Faker $faker) {
    return [
        'topic_id' => factory('App\Topic')->create()->id,
        'user_id' => factory('App\User')->create()->id,
        'message' => $faker->sentence,
    ];
});
