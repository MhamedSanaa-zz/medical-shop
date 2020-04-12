<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\supplier;
use App\supply_order;
use Faker\Generator as Faker;

$factory->define(supply_order::class, function (Faker $faker) {
    return [
        'supplier_id' => supplier::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
