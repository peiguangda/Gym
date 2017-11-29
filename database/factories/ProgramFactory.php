<?php

use Faker\Generator as Faker;

$factory->define(App\Program::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'descript' => implode('',$faker->sentences),
        'image' => $faker->imageUrl(1000,500),
    ];
});