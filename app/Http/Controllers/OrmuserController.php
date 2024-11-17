<?php

namespace App\Http\Controllers;

use App\Models\Ormuser;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class OrmuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lecturer::all();  //Lecturer is a model name which include on top of the file 
        // return $users; or
        // foreach($users as $user)
        // echo $user->name ."  ".$user->email ."<br><br>";
        return view("orm/home",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orm/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return request;  insert form data by  below method 1

        // $userdata = new Lecturer;

        // $userdata->name = $request->username;
        // $userdata->email = $request->useremail;
        // $userdata->age = $request->userage;
        // $userdata->city = $request->usercity;
        // $userdata->votes = $request->uservotes;
        // $userdata->save();

        // BY METHOD 2 FOR MORE/BULKY DATA INSERT

        Lecturer::create([         // in Lecturere model file we have to write some code because of the save all form data
            'name'=>$request->username,  //we can put multiple data in this method in array form 
            'email'=>$request->useremail,
            'age'=>$request->userage,
            'city'=>$request->usercity,
            'votes'=>$request->uservotes,
        ]);

        return redirect()->route('home.index')
                        ->with('status','New Data Added Successfully. ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $ormuser)
    {
        $v_data=Lecturer::find($ormuser);
        // return $v_data;
        return view('orm/view',compact('v_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ormuser $ormuser)
    {
        return view('orm/update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ormuser $ormuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ormuser $ormuser)
    {
        //
    }
}
