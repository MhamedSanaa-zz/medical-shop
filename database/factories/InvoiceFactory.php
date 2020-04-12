<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\customer;
use App\invoice;
use Faker\Generator as Faker;

$factory->define(invoice::class, function (Faker $faker) {
    return [
        'customer_id' => customer::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
