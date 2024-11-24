<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\file;  //// Import File facade
use App\Models\Client; // Import your Client model

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/client.json'); // Read the JSON file
        $clients = collect(json_decode($json)); // Decode JSON into a collection

        $clients->each(function ($client) {  
            Client::create([        // client here is model name
                'name' => $client->name,
                'age' => $client->age,
                'gender' => $client->gender,
            ]);
        });
    }
    
}
