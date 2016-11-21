<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//hong added from http://stackoverflow.com/questions/30774341/class-user-not-found-laravel-5-1-php-artisan-dbseed

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->command->info('users table seeded');

        $this->call(MoviesTableSeeder::class);
        $this->command->info('movies table seeded');

        $this->call(DiariesTableSeeder::class);
        $this->command->info('diaries table seeded');

        Model::reguard();
        // $this->call(UsersTableSeeder::class);
    }
}
