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
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
	
	$faker->addProvider(new Faker\Provider\en_US\Text($faker));

    return [
        'content' => $faker->realText($maxNbChars = 320, $indexSize = 2),
    ];
});