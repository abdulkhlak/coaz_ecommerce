<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    return [
        'category_name'          =>  $faker->name,
        'category_desc'   =>  $faker->realText(100),
        'parent_id'     =>  1,
    ];
});
