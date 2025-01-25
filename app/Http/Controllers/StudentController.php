<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;  //  add this db file

use Illuminate\Http\Request;

class StudentController
{
    public function showUsers(){
        $users = DB::table('students')->orderBy('id')->get();

        // return $user;
        return view('Home', ['data' => $users]);
    }

    public function singleUser(string $id){
        $users = DB::table('students')->where('id',$id)->get();
        // return $users;
        return view('viewuser', ['data' => $users]);
    }

    public function addUser(Request $req){
        $users = DB::table('students')
                        ->insertOrIgnore([
                            'name'=> $req->username,
                            'email' => $req->useremail,
                            'age'=> $req->userage,
                            'city'=> $req->usercity,
                            'phone'=> $req->userphone,
                            'password'=> $req->userpassword,
                            'address'=> $req->useraddress,
                            'created_at'=>now(),
                            'updated_at'=>now()
                        ]);
        // return $users;
        if($users)
        {
            return redirect()->route('home');
        }
        else
        {
            echo "<h1> Data is Not Added. </h1>";
        }
        // return view('user', ['data' => $users]);
    }


    public function updatePage(string $id){   // it will be for edit
        // $user = DB::table('students')->where('id',$id)->get();
        $user = DB::table('students')->find($id);
        // return $user;
        return view('updateUser', ["data"=>$user]);
    }


    public function updateUsers(Request $req, $id ){  //it will be for update
        // return $req;
            $user = DB::table('students')
                     ->where('id',$id)
                    ->update([
                            'name'=> $req->username,
                            'email' => $req->useremail,
                            'age'=> $req->userage,
                            'city'=> $req->usercity,
                            'phone'=> $req->userphone,
                            'password'=> $req->userpassword,
                            'address'=> $req->useraddress,
                            // 'created_at'=>now(),
                            // 'updated_at'=>now()
            ]);
            if($user){
                return redirect()->route('home');
            }
            else
            {
                echo "<h1> Data is Not Added. </h1>";
            }
    }



    public function deleteUser(string $id){
        $user = DB::table('students')->where('id',$id)->delete();
        if($user)
        {
            echo "<h1> Data is deleted. </h1>";
            return redirect()->route('home');

        }
    }

}
