<?php

use App\Category;
use App\Media;
use App\Movie;
use App\Post;
use App\Review;
use App\Tag;
use App\User;
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
        // $this->call(UsersTableSeeder::class);
        // factory(User::class , 250)->create();
        // factory(Category::class, 50)->create();
        // factory(Tag::class, 150)->create();
        // factory(Media::class, 900)->create();
        // factory(Movie::class, 300)->create();
        factory(Post::class, 200)->create();
        factory(Review::class, 1000)->create();
    }
}
