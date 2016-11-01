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
$factory->define(App\Project::class, function (Faker\Generator $faker) {

    $faker->addProvider(new Faker\Provider\en_US\Text($faker));
	$statuses = ['Green', 'Yellow', 'Orange', 'Red'];

	$startDate = $faker->dateTime();
	$daysInAdvance = rand(1, 45);
	$dueDate = $faker->dateTime(strtotime("+" . $daysInAdvance . " day"));
	$status = $statuses[rand(0,3)];
	$done = rand(0,1);

    return [
        'title' => $faker->realText($maxNbChars = 120, $indexSize = 2),
    	'description' => $faker->realText($maxNbChars = 320, $indexSize = 2),
    	'start_date' => $startDate,
    	'due_date' => $dueDate,
    	'status' => $status,
    	'done' => $done,
    ];
});