<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'user_id'   => 1,
        'title'     => $faker->sentence,
        'tecnology' => $faker->randomElement($array = array ('Laravel','Angular','Vue')),
        'body'      => $faker->text(800)
    ];
});
