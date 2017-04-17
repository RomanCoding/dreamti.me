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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Artist::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Genre::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(),
    ];
});

$factory->define(App\Album::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->words(2, true),
        'artist_id' => function() {
            return factory(App\Artist::class)->create()->id;
        },
        'genre_id' => function() {
            return factory(App\Genre::class)->create()->id;
        },
    ];
});

$factory->define(App\Song::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->words(2, true),
        'artist_id' => function() {
            return factory(App\Artist::class)->create()->id;
        },
        'album_id' => function() {
            return factory(App\Album::class)->create()->id;
        },
        'number' => 1,
    ];
});