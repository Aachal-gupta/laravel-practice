<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;  // add this link
use Illuminate\Support\Facades\DB;  //  add this db file

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::factory(5)->create();
        // Read the JSON file
       $json = File::get(database_path('json/students.json'));

       // Decode JSON data into an array
       $users = json_decode($json, true);

       collect($users)->each(function ($user) {
            Student::create([
                'name' =>$user['name'],
                'age' =>$user['age'],
                'email' =>$user['email'],
                'address' =>$user['address'],
                'city' =>$user['city'],
                'phone' =>$user['phone'],
                'password' =>$user['password']


            ]);
        });
    }
}
