<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'user_id' => 195,
        	'category_id' => 3,
            'title' => str_random(10),
            'content' => str_random(200)
        ]);
    }
}
