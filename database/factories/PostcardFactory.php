<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;

$factory->define(Postcard::class, function (Faker $faker) {
    return [
        
        'name' => $faker-> name,
        'address' => $faker-> address(),
        'text' => $faker-> optional()->sentence(),
        'image' => null
    ];
});
