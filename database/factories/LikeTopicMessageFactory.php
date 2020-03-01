<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LikeTopicMessage;
use Faker\Generator as Faker;

$factory->define(LikeTopicMessage::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'topic_message_id' => factory('App\TopicMessage')->create()->id,
        'like_topic_message' => $faker->boolean(50),
    ];
});
