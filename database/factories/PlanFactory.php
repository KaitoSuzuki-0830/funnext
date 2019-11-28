<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'slug'=>$faker->sentence,
        'description'=>$faker->paragraph,
        'featured'=>'sample.jpg',
        'price'=>'100',
        'pref_id'=>'1',
        'place'=>'tokyo',
       // 'user_id'=>
        'category_id'


    ];
});
