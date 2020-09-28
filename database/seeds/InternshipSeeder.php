<?php

use Illuminate\Database\Seeder;
use App\Internship;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Internship::class, 20)->create();
    }
}
