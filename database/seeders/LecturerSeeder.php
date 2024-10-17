<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Lecturer;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/lecturer.json');
        $lectures = collect(json_decode($json));
        $lectures -> each(function($var){
            Lecturer::create([
                'name'=>$var->name,
                'email'=>$var->email,
                'age'=>$var->age,
                'city'=>$var->city,
                'votes'=>$var->votes
                
            ]);
        });

    }
}
