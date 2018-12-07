<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(random_int(6, 8)),
        'price' => $faker->randomFloat(10,10.0, 20.0),
        'color' => $faker->text(8),
        'discription' => $faker->text(54)

    ];
});
