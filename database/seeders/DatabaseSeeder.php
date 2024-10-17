<?php

namespace Database\Seeders;
use App\Models\student;    //add this file path 
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {    
        //   student::factory(5)->create();   // it add 5 data in db-student-table

        $this->call([           //there is call the all file name which is in seeder file
            StudentSeeder::class
        ]);

        $this->call([           //there is call the all file name which is in seeder file
            citiesSeeder::class
        ]);

        $this->call([
            lecturerSeeder::class
        ]);
    }
}
