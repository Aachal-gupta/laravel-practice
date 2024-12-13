<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File;  // add this link 
use Illuminate\Support\Facades\DB;  //  add this db file 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Read the JSON file
       $json = File::get(database_path('json/post.json'));

       // Decode JSON data into an array
       $posts = json_decode($json, true);

       // Insert data into the 'posts' table
       DB::table('posts')->insert($posts);
    }
}
