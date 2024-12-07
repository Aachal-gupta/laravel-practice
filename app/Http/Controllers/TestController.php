<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test = Test::orderBy('meta_data->roll_no')->get();
        // return $test; // Laravel will automatically convert it to JSON

        // $test = Test::get();
        // return $test->pluck('meta_data'); // Extracts only the 'meta_data' column for all rows

        // $test = Test::get();
        // return $test->toArray(); // Converts the collection to an array

        // $test = Test::find(5);
        // return $test->meta_data['address']['state']; 

        $test = Test::where('meta_data->name', 'LIKE','p%a')->get();
        return $test ; 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $test = new Test;  // it is the obj of Test class 
        $test->meta_data =[
            'name'=> 'Pavitra verma',
            'email'=>'pavitra3@gmail.com',
            'phone'=>'555567891',
            'roll_no'=>'30',
            'address'=>[
                'state'=>'Uttar Pradesh',
                'district'=>'Lakhnow',
                'pin_code' => '411040'
            ]
        ];
        $test->save();

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
