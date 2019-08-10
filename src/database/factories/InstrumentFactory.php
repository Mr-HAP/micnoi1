<?php

use Faker\Generator as Faker;

$factory->define(App\Instrument::class, function (Faker $faker) {
    return [
        'name_instrument' => $faker->title
    ];
});
