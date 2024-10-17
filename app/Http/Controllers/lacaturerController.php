<?php

namespace App\Http\Controllers;

use App\Models\lacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //include this db

class lacaturerController extends Controller
{
  public function lecturData(){

    $lecturers = DB::table('lecturers')
                ->select('name','email','city_name')
                ->join('cities','lecturers.city' , '=', 'cities.id');
                

    $students = DB::table('students')           // http://localhost:8000/union
                ->union($lecturers)
                ->select('name','email','city_name')
                ->join('cities','students.city','=','cities.id')
                ->get();

                return $students;
  }

  public function whenData(){           // http://localhost:8000/when
    $students = DB::table('students')
                ->when(false,function($query){   //if condition will be false then 2nd function will be execute
                    $query->where('age','>', 15);
                },function($query){
                    $query->where('age','<', 20);
                })
                ->get();

                return $students;
  }
}
