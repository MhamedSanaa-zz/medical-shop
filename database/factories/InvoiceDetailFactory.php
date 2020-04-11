<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\invoice;
use App\medecine;
use App\invoice_detail;
use Faker\Generator as Faker;

$factory->define(invoice_detail::class, function (Faker $faker) {
    return [
        'invoiceid' => invoice::get('id')->random(),
        'medid' => medecine::get('id')->random(),
        'qty' => $faker->randomDigitNotNull,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
