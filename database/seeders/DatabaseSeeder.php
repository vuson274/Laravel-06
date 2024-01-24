<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\PassPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Seeders\AuthorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(AuthorSeeder::class);
       PassPost::factory(5)->create();
    }
}
