<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function(Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ? : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Sponsor::class, function(Faker\Generator $faker) {
    $name        = $faker->words(random_int(1, 3), true);
    $description = $faker->sentences(4, true);

    return [
        'name'        => [
            'sl' => $name,
            'en' => $name
        ],
        'description' => [
            'sl' => $description,
            'en' => $description
        ],
        'logo'        => 'images/logo.png'
    ];
});

$factory->define(App\Leadership::class, function(Faker\Generator $faker) {
    $position = $faker->word;
    $name     = $faker->name;

    return [
        'name'     => [
            'sl' => $name,
            'en' => $name
        ],
        'position' => [
            'sl' => $position,
            'en' => $position
        ],
        'image'    => 'images/bg2.jpg'
    ];
});
