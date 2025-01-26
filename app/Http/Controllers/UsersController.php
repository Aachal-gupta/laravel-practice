<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;  //  add this db file

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UsersController
{



    public function register(Request $req){

        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){  // this fucntion will be check given email and password match or not from database users table
            return redirect()->route('dashboard');
        }
    }

    public function dashboardPage(){
        if(Auth::check()){      // this fucntion will be check user login or not ?
            return view('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();   // by this function logout take place
        return view('login');
    }
}
?>
