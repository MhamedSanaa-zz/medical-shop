<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\customer;
use Faker\Generator as Faker;

$factory->define(customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
