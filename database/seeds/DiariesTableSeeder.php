<?php

use Illuminate\Database\Seeder;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Diary::truncate();
        factory('App\Diary', 20)->create();
    }
}
