<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'area' => $faker->numberBetween(10000, 50000),
        'population' => $faker->numberBetween(1, 1000),
        'country_id' => function() { return factory(App\Country::class)->id; }
    ];
});
