<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\supplier;
use Faker\Generator as Faker;

$factory->define(supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->randomDigit,
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'created_at' => now(),
        'updated_at' => now(),

    ];
});
