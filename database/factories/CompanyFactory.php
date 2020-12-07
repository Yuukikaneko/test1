<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'company' => $faker->unique()->company(),
        'company_pass' => Str::random(10)
    ];
});
