<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\invoice;
use App\medecine;
use App\invoice_detail;
use Faker\Generator as Faker;

$factory->define(invoice_detail::class, function (Faker $faker) {
    return [
        'invoice_id' => invoice::get('id')->random(),
        'medecine_id' => medecine::get('id')->random(),
        'qty' => $faker->randomDigitNotNull,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
