<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    return [

        'title'=>$faker->title,
        'slug'=>$faker->sentence(3),
        'description'=>$faker->paragraph(3),
        'featured'=> secure_asset('uploads/plans/meetup.jpg'),
        'price'=>$faker->randomDigit,
        'pref_id'=>$faker->numberBetween($min = 1, $max = 491),
        'place'=>$faker->sentence(3),
        'user_id'=>$faker->randomDigit,
        'category_id'=>$faker->randomDigit


    ];
});
