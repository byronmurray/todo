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


$factory->define(App\Task::class, function (Faker\Generator $faker) {

    return [
        'user_id' => 1,
        'title' => $faker->jobTitle,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'importance' => rand(1,3),
    ];
});


$factory->define(App\Note::class, function (Faker\Generator $faker) {

    return [
        'task_id' => rand(1,5),
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
