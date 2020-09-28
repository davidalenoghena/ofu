<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BlogSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OpportunitySeeder::class);
        $this->call(InternshipSeeder::class);
    }
}
