<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostTag;
use Faker\Generator as Faker;

$factory->define(PostTag::class, function (Faker $faker) {
    return [
        'post_id' =>rand(1,24) ,
        'tag_id' => rand(1,30),
    ];
});
