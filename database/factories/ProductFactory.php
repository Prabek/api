<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
    'name' => $faker->word,
    'detail' => $faker->paragraph,
    'price' => $faker->numberBetween(100,10000),
    'discount' => $faker->numberBetween(1,30),
    'stock' => $faker->randomDigit


    ];
});
