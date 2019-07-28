<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => Str::random(10),
        'description' => $faker->text(100),
        'image' => $faker->imageUrl(),
    ];
});
