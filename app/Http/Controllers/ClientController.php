<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Contact; // for one to one relationship i include this model file

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $clients = Client::with('contact')->get();  // contact is a function name which is defined in model file of client.php
        // return $clients;

        $client = Client::where('gender','male')
                        ->withWhereHas('contact',function($query){ //we can use whereHas,withWhereHas
                            $query->where('city','New York');
                        })->get();
            return $client;  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // from one to one relation we can insert/creat data in both table simultaneously this is the advantage of 1 to 1 relation

        // $client = Client::create([    //http://localhost:8000/client/create
        //     'name' => 'Aachal Gupta',
        //     'age' => 18,
        //     'gender'=>'Female'
        // ]);

        // $client->contact()->create([
        //     'email'=>'xyz@gmail.com',
        //     'phone'=>123321145,
        //     'address'=>'Akurdi',
        //     'city'=>'Pune'
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
