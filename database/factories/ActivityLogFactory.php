<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\activityLog;
use Faker\Generator as Faker;

$factory->define(activityLog::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
