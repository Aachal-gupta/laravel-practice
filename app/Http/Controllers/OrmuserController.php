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
        // $data = Lecturer::all();  //Lecturer is a model name which include on top of the file 
        // // return $users; or
        // // foreach($users as $user)
        // // echo $user->name ."  ".$user->email ."<br><br>";
        // return view("orm/home",compact('data'));

        // or for pagination

        $data = Lecturer::simplepaginate(3);
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

        // vallidation

        $request->validate([
            'username' => 'required|regex:/^[a-zA-Z\s]+$/',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|numeric',
            'uservotes' => 'required|string',
        ]);

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
    public function edit(string $ormuser)
    {
        $edit_data=Lecturer::find($ormuser);
        // return $edit_data;
        return view('orm/update',compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // vallidation

        $request->validate([
            'username'=> 'required | string',   //alpha is not work here 
            'useremail'=> 'required | email',
            'userage'=>'required | numeric',
            'usercity'=>'required | numeric',
            'uservotes'=>'required | numeric',
        ]);
    //    $update_data = Lecturer::find($id);

    //    $update_data->name = $request->username;
    //    $update_data->email = $request->useremail;
    //    $update_data->age = $request->userage;
    //    $update_data->city = $request->usercity;
    //    $update_data->votes = $request->uservotes;
    //    $update_data->save();

    //    return redirect()->route('home.index')
    //                     ->with('status','User data updated Successfully. ');


        // 2ND METHOD MASS UPDATED

            $u_data = Lecturer::where('id',$id)
                              ->update([
                                'name'=>$request->username,  //we can put multiple data in this method in array form 
                                'email'=>$request->useremail,
                                'age'=>$request->userage,
                                'city'=>$request->usercity,
                                'votes'=>$request->uservotes,
                            ]);


            return redirect()->route('home.index')
                             ->with('status','User data updated Successfully. ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Lecturer::find($id);
        $user->delete();

        return redirect()->route('home.index')
                         ->with('status','User data  deleted Successfully. ');


        // OR
        //WE CAN DELETE MANY DATA BY ID destroy(2,3)
        // Lecturer::destroy($id);

        // return redirect()->route('home.index')
                        //  ->with('status','User data  deleted Successfully. ');


            // OR
            // WE CAN DELETE ALL DATA OF TABLE
            // Lecturer::truncate();
    }
}
