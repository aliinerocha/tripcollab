<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LikeTopic;
use Faker\Generator as Faker;

$factory->define(LikeTopic::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'topic_id' => factory('App\Topic')->create()->id,
        'like_topic' => $faker->boolean(50),
    ];
});
