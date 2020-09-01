<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\blog::class, 10)->create();
    }
}
