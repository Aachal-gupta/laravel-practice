<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// to make UserController file on terminal we can write this cmmand-> php artisan make:controller  UserController
// inheritance => in this class inherit the Controller class which is made by default
class UserController extends Controller    
{
     //*********************************
    // READ/FETCH USER DETAIL FROM DB
    // *********************************
    
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
                                // ->where('city','delhi')
                                // ->orwhere('name','like','s%')
                                // ->orderby('age','asc')
                                // ->limit(3)
                                ->orderby('age')
                                // ->simplePaginate(4);    // we can take order by id also
                                ->paginate(4); 
                     return view('allusers',['data'=> $users]);       
    }



    public function singleUser(string $id){
        $users = DB:: table('students')->where('id',$id)->get();
        // return $users;
        return view('user',['data'=>$users]);
    }

    //********************
    // ADD USER BY FORM
    // ********************

    public function addUser(Request $req){
        $add_user = DB::table('students')
                    ->insert(        //inert,insertOrIgnore,upsert
                        [
                            'name'=> $req->username,
                            'email' => $req->useremail,
                            'age' => $req->userage,
                            'city' => $req->usercity,
                            'votes' => $req->uservotes,      
                        ]  
                    );
                    
            // dd($add_user);

            if($add_user){
                return redirect()->route('home')->with('success', 'Data saved successfully!');
                // echo "<h1>data added successfully</h1>";
            }else{
                echo "Data not added .";
            }
    }

    // ********************
    // UPDATE USER BY FORM
    // ********************

    public function updatePage(string $id){

        // $user = DB::table('students')->where('id',$id)->get();   //we can use find function in that place 
        $user = DB::table('students')->find($id);   
        return view('updateUser',['data'=>$user]);
    }

    public function updateUser(Request $req, $id){
        $user = DB::table('students')
                ->where('id',$id)
                ->update([
                    'name' => $req->username,
                    'email' => $req->useremail,
                    'age' =>$req->userage,
                    'city' => $req->usercity,
                    'votes' => $req->uservotes
                ]);
                
             if($user){
                echo "<h1>data added successfully</h1>";
            }else{
                echo "Data not added .";
            }
    }

    // ********************
    // DELETE USER BY FORM
    // ********************

    public function deleteUser(string $id){
        $delete_user = DB::table('students')
                        ->where('id', $id)
                        ->delete();

            if($delete_user){
                return redirect()->route('home');
            }
    }

    
    // public function deleteAllData(){
    //     $user = DB::table('students')
    //             ->delete();    //all data will be remove of where clause is not put same as a truncate
                    // ->truncate();        //and it will be reset id column , after that id start from 1
    // }
}

