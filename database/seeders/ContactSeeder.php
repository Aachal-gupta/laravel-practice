<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;  //// Import File facade
use App\Models\Contact; // Import your Contact model


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $json = File::get('database/json/contact.json');
        $contact = collect(json_decode($json)); // this function will variable $json will be convert in array
        $contact -> each(function($cont){
           Contact::create([
            'email'=> $cont->email,
            'phone'=> $cont->phone,
            'address' => $cont->address,
            'city' => $cont->city,
            'clients_id' => $cont->clients_id,
            

           ]);
        });
    
    }
}
