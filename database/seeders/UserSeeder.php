<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File;  // add this link 
use Illuminate\Support\Facades\DB;  //  add this db file 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Read the JSON file
       $json = File::get(database_path('json/user.json'));

       // Decode JSON data into an array
       $users = json_decode($json, true);

       // Insert data into the 'posts' table
       DB::table('users')->insert($users);   //users is table name in plural form 
    }
}
