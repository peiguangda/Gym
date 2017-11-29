<?php

use Faker\Generator as Faker;

$factory->define(App\Action::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'rate' => $faker->numberBetween($min=1, $max=5),
        'trainer' => $faker->name,
        'timepractice' => $faker->numberBetween($min=1, $max=100),
        'lever' => $faker->randomElement(['Nặng', 'Trung bình', 'Nhẹ']),
        'id_program' => $faker->numberBetween($min=0, $max=20),
        'id_user' => $faker->numberBetween($min=0, $max=20),
    ];
});
