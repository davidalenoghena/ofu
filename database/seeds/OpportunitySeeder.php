<?php

use Illuminate\Database\Seeder;
use App\Opportunity;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Opportunity::class, 20)->create();
    }
}
