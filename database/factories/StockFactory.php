<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\medecine;
use App\stock;
use Faker\Generator as Faker;

$factory->define(stock::class, function (Faker $faker) {
    return [
        'batch_nbr'=>$faker->randomDigit,
        'qty'=>$faker->randomDigit,
        'expiration_date'=> now(),
        'medecine_id' => medecine::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
