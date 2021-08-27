<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   Storage::deleteDirectory("post");
        Storage::makeDirectory('post');
       $this->call(UserSeeder::class);
       //Post::factory(15)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class); 
    }
}
