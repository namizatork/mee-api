<?php

use Illuminate\Database\Seeder;

class FrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frameworks')->insert([
            'framework_name' => "Laravel",
            'icon_image'     => "test.jpg",
            'display_order'  => 1
        ]);
    }
}
