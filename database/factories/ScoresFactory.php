<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Scores;
use Faker\Generator as Faker;

$factory->define(Scores::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => str_slug($title),
        'body' => $faker->text,
    ];
});
