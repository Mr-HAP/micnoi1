<?php

use App\Role;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Offer::class, function (Faker $faker) {

    $role_musico = Role::where('name', 'musico')->first();
    return [

        'user_id'=> $role_musico,
        'title'=> $faker->text(20),
        'description'=> $faker->paragraph,
        'photo'=> $faker->imageUrl('400', '300'),
    ];
});
