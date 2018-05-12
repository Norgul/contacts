<?php

use Faker\Generator as Faker;

$factory->define(\App\Phone::class, function (Faker $faker) {
    return [
        'name'  => ucfirst($faker->word),
        'label' => $faker->phoneNumber,
    ];
});
