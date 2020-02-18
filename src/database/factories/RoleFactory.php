<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => 'Chamullo',
        'update_at' => Carbon::now(),
        'created_at' => Carbon::now(),
    ];
});
