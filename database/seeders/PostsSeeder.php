<?php

namespace Database\Seeders;
use App\Models\Post;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(5)->create();
    }
}
