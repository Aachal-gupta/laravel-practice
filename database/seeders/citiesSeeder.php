<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\cities;


class citiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/cities.json');
        $cities = collect(json_decode($json));

        $cities -> each(function($cities){
            cities::create([
             'id'=> $cities->id,
             'city_name'=> $cities->city_name
            
            ]);
        });
    }
}

