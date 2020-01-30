<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->text($maxNbChars = 255),
        'imatge' => $faker->text($maxNbChars = 5),
        'user_id' => rand(1,50),
        'post_id' => rand(1,50)
    ];
});
