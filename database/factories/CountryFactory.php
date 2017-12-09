<?php

use Faker\Generator as Faker;

$factory->define(App\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'area' => $faker->numberBetween(10000, 50000),
        'population' => $faker->numberBetween(1, 1000),
    ];
});

