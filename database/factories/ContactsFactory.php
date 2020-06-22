<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'contact_firstname' => $faker->name,
        'contact_name' => $faker->name,
        'contact_email' => $faker->email,
        'contact_message' => $faker->text,
        'contact_object' => $faker->title,
    ];
});
