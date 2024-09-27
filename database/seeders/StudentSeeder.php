<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
    //     $json = File::get(path:'database/json/students.json');
    //     $students = collect(json_decode($json)); // this function will variable $json will be convert in array
    //     $students -> each(function($student){
    //        student::create([
    //         'name'=> $student->name,
    //         'email'=> $student->email
    //        ]);
    //     });
    }
}
