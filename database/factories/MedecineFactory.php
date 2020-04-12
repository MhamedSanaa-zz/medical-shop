<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\medecine;
use Faker\Generator as Faker;

$factory->define(medecine::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'generic'=>$faker->name,
        'status'=>$faker->randomDigit,
        'price'=>$faker->randomFloat(3, 2, 1000),
        'description'=>$faker->sentence,
        'typeid' => type::get('id')->random(),

    ];
});
