<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// to make UserController file on terminal we can write this cmmand-> php artisan make:controller  UserController
// inheritance => in this class inherit the Controller class which is made by default
class UserController extends Controller    
{
    public function showData(){         //we can make multiple method in single class
        return "<h2>this data comes from controller to view folder with the help of route</h2>";
    }

    public function viewData(string $id){         
        // return view('test',['id'=>$id]);
        // or
        return view('test',compact('id'));    // localhost:8000/test/aachal 
    }

    public function showBlog(){         //we can make multiple method in single class
        return view('blog');
    }

    public function showHome(){         //we can make multiple method in single class
        return view('welcome');
    }

}
