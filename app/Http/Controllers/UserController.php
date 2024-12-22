<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('file-upload',compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        // dd($file);
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|max:3000|dimensions:min_width:500,
                    min_height:400'  //there is validate extention, size will be 3MB,width=100px,height=100px
        ]);


        // $path = $request->photo->store('image','local');   // data will store in Storage/App/image/filename-16 character or hash character

        // $path = $request->file('photo')->store('image','public');   // data will store in Storage/App/Public/image/filename-16 character
        // return $path;


        $filename = date('Y-m-d_H-i-s').'_'. $file->getClientOriginalName();  //when user put image then date+time will also save
        //               or
        // $filename = time().'_'. $file->getClientOriginalName();  //when user put image then that time will also save
                    //or
        // $filename = $file->getClientOriginalName();  // we can use  getClientOriginalExtension() for extension OR extension() , getSize()
        $path = $request->photo->StoreAs('image',$filename,'public');   // data will store local or public
        // return $path ;

        User::create([  // insert in database
            'file_name'=>$path
        ]);

        return redirect()->route('user.index')->with('status','User Image Uploaded Successfully.');
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
        $user = user::find($id);
        return view('file-update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = user::find($id);
        if($request->hasFile('photo')){

            $image_path = public_path('storage/') . $user->file_name;
            if(file_exists($image_path)){
                @unlink($image_path);  // if data is exist in given folder then it will be delete
            }

            $path = $request->photo->store('image','public');

            $user->file_name = $path ;
            $user->save();
            return redirect()->route('user.index')->with('status','User Image Updated Successfully.');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();  //data deleted from database

        $image_path = public_path('storage/') . $user->file_name;
        if(file_exists($image_path)){
            @unlink($image_path);  // if data is exist in given folder then it will be delete
        }
        return redirect()->route('user.index')->with('status','User Image deleted Successfully.');
    }
}
