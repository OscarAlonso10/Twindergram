<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'text' => $faker->text($maxNbChars = 255),
        'imatge' => $faker->text($maxNbChars = 5),
        'user_id' => rand(1,50)
    ];
});
