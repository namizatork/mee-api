<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'best_programming_language_id' => 1,
            'best_framework_id'            => 1,
            'user_name'                    => 'テスト',
            'age'                          => 1,
            'prefecture'                   => 1,
            'industry'                     => 1,
            'gender'                       => 1,
            'experience_years'             => 1,
            'email'                        => "test@test.com",
            'password'                     => Hash::make('12345678'),
            'profile_image'                => "test.jpg",
            'company'                      => "テスト会社",
            'twitter_url'                  => "https://test.com",
            'facebook_url'                 => "https://test.com",
            'github_url'                   => "https://test.com",
            'qiita_url'                    => "https://test.com",
            'connpass_url'                 => "https://test.com",
            'speakerdeck_url'              => "https://test.com",
            'portfolio_url'                => "https://test.com",
            'misc_url'                     => "https://test.com",
            'first_flg'                    => true
        ]);
    }
}
