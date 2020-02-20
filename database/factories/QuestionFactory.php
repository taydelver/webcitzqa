<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'contact_name' => $faker->name,
        'contact_email' => $faker->unique()->safeEmail,
        'posted_date' => '2020-02-18',
        'content' => $faker->text,
        'storefront_id' => 7,
        'product_id' => 207,
        'status' => 'pending',
        'product_name' => 'My Productasdfasdfasdfrta',
        'product_sku' => 'PRODUCT-gweererrrr'
    ];
});
