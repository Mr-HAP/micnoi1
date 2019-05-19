<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->description,
        'update_at' => Carbon::now(),
        'created_at' => Carbon::now(),
    ];
});
