<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->name,
        'product_description' => $faker->text(200),
        'product_prize' => $faker->randomFloat(2,0,10),
        'category_id' => 1
    ];
});
