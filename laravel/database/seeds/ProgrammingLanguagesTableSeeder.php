<?php

use Illuminate\Database\Seeder;

class ProgrammingLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programming_languages')->insert([
            'programming_language_name' => "Laravel",
            'icon_image'                => "test.jpg",
            'display_order'             => 1
        ]);
    }
}
