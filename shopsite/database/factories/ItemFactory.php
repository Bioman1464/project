<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(random_int(6, 8)),
        'content' => $faker->text(1000)
    ];
});
