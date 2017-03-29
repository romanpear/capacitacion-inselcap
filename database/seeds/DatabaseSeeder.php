<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CreatePostSeeder::class);
        $post = factory('App\Post', 'active', 10)->create();
    	$post2 = factory('App\Post', 'inactive', 5)->create();

    }
}
