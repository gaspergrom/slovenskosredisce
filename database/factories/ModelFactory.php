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

$factory->define(App\Event::class, function(Faker\Generator $faker) {
    $start = $faker->date("Y-m-d H:i:s", "+2 week");
    $end   = date("Y-m-d H:i:s", strtotime($start) + 60 * 60 * 2);

    return [
        'name'        => [
            'sl' => $faker->sentence(3, true),
            'en' => $faker->sentence(3, true),
        ],
        'description' => [
            'sl' => $faker->sentences(3, true),
            'en' => $faker->sentences(3, true),
        ],
        'excerpt'     => [
            'sl' => $faker->sentences(3, true),
            'en' => $faker->sentences(3, true),
        ],
        'image'       => 'images/bg2.jpg',
        'price'       => random_int(5, 70),
        'begins_at'   => $start,
        'ends_at'     => $end
    ];
});
