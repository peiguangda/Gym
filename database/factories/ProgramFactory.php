<?php

use Faker\Generator as Faker;

$factory->define(App\Program::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'descript' => implode('',$faker->sentences),
        'trainer' => $faker->name,
        'image' => $faker->imageUrl(1000,500),
    ];
});