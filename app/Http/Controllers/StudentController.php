<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  //write this path without this code will not run

class StudentController extends Controller
{
    public function showStudent(){
            $students = DB::table('students')
                        ->join('cities','students.city', '=', 'cities.id')
                        ->select('students.*','cities.city_name')
                        ->where('students.age','>','12')
                        ->get();

            // return $students;  

            return view('/demo',compact('students'));
    }


    
}
