<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('blogs')->insert([
            [
               "img" => "hgg",
               "blog_title" => "what I do",
               "blog_post" => "I am doing some stuffs so people can play game and have some fun. This isn't the main thing about life I know but I can't just help myself",
               "author"=> "David",
               "status" => 1,
               "category" => "Money"
           ],
           [
            "img" => "aab",
            "blog_title" => "what I don't do",
            "blog_post" => "I am not doing some stuffs so people can play game and have some fun. This isn't the main thing about life I know but I can't just help myself",
            "author"=> "Benjamin",
            "status" => 1,
            "category" => "Money"
            ],
        ]);
        // $this->call(UserSeeder::class);
    }
}
