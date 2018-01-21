<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Teacher::class, function (Faker $faker) {
        static $password;
	return[
		'name' => $faker->name,
		'email' => $faker->unique()->email,
		'password' => $faker->password,
		'gender' => 'male',
		'graduated_at' => $faker->address,
		'experience' => $faker->randomElement($array = array(0, 1 , 2 , 3)),
		'school_id' => $faker->numberBetween(2, 6),
                'subject' => $faker->name,	
	];
});

$factory->define(App\Models\Student::class, function (Faker $faker) {
	static $password;
	return[
		'name' => $faker->name,
		'email' => $faker->unique()->email,
		'password' => $faker->password,
		'gender' => 'male',
		'school_id' => $faker->numberBetween(2, 6),	
	];
});

$factory->define(App\Models\Slide::class , function (Faker $faker) {
        return[
                'image_url' => $faker->name,
                'status' => '1',
        ];
});

$factory->define(App\Models\School::class , function (Faker $faker) {
        return[
                'name' => $faker->name,
                'description' => $faker->text(20),
                'city' => $faker->name,
        ];
});

$factory->define(App\Models\LopHoc::class , function (Faker $faker) {
        return[
                'name' => $faker->name,
                'begin_at' => $faker->datetime(),
                'number_of_lesson' => $faker->numberBetween(1, 10),
                'max_slot' => $faker->numberBetween(1, 10),
                'available_slot' => $faker->numberBetween(1, 10),
                'price' => $faker->numberBetween(500000, 1000000),
                'teacher_id' =>$faker->numberBetween(2, 6),
                'subject' => $faker->numberBetween(1, 10),
                'status' => 1,
        ];
});

$factory->define(App\Models\Booking::class , function (Faker $faker) {
        return[
                'payment' => $faker->numberBetween(100 , 10000),
                'status' => $faker->randomElement($array = array(0, 1 , 2 , 3)),
                'student_id' => $faker->numberBetween(1,25),
                'class_id' => '1',
        ];
});

$factory->define(App\Models\Social::class , function (Faker $faker) {
        return[
                'provider_user_id' => $faker->name,
                'provider' => $faker->name,
                'student_id' => $faker->numberBetween(1,25),
        ];
});

$factory->define(App\Models\Rate::class , function (Faker $faker) {
        return[
                'point' => $faker->numberBetween(1,10),
                'content' => $faker->text(30),
                'student_id' => $faker->numberBetween(1,25),
                'class_id' => '1',
        ];
});

$factory->define(App\Models\News::class , function (Faker $faker) {
        return[
                'title' => $faker->text(10),
                'content' => $faker->text(40),
        ];
});
