<?php

use Illuminate\Support\Str;
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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'best_programming_language_id' => 1,
        'best_framework_id'            => 1,
        'user_name'                    => $faker->name,
        'age'                          => 1,
        'prefecture'                   => 1,
        'industry'                     => 1,
        'gender'                       => 1,
        'experience_years'             => 1,
        'email'                        => $faker->email,
        'password'                     => Hash::make('12345678'),
        'profile_image'                => $faker->imageUrl,
        'company'                      => $faker->company,
        'twitter_url'                  => $faker->url,
        'facebook_url'                 => $faker->url,
        'github_url'                   => $faker->url,
        'qiita_url'                    => $faker->url,
        'connpass_url'                 => $faker->url,
        'speakerdeck_url'              => $faker->url,
        'portfolio_url'                => $faker->url,
        'misc_url'                     => $faker->url,
        'first_flg'                    => true,
        'registered_flg'               => false
    ];
});
