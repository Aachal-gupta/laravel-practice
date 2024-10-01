<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// to make UserController file on terminal we can write this cmmand-> php artisan make:controller  UserController
// inheritance => in this class inherit the Controller class which is made by default
class UserController extends Controller    
{
    public function showUsers(){
        // $users = DB:: table('students')->get();                  //all data will be fetch from studnet table  in users variable
        // return $users;  

        //just comment on return and  we can debug bt this debug information
        // dd($users);          //but after that line , all line of  code will be not run
        // dump($users);           //in dd($users) place of that we can use this line for debuging but after this line all code will be run

        // $users = DB:: table('students')->find(3);
        // return $users; 

        // $users = DB:: table('students')->get();
        // return view('allusers',['data'=> $users]);


        // $users = DB:: table('students')
        //             // ->select('name','email as useremail','age')
        //             ->select('name')
        //             ->distinct()
        //             ->where('city','pune')   
        //             ->where('age','>',10)
        //             ->get();
                    // return $users ;
                    // return view('allusers',['data'=> $users]);
       

                    $users = DB:: table('students')
                                ->where('city','delhi')
                                ->orwhere('name','like','s%')
                                ->orderby('age','asc')
                                ->limit(3)
                                
                                ->get(); 
                     return view('allusers',['data'=> $users]);       
    }



    public function singleUser(string $id){
        $users = DB:: table('students')->where('id',$id)->get();
        // return $users;
        return view('user',['data'=>$users]);
    }
}

