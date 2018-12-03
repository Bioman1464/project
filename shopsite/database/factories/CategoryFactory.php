<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => ucfirst(implode(" ", $faker->words(random_int(2, 4))))
    ];
});