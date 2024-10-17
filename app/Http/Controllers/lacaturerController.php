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
                

    $students = DB::table('students')
                ->union($lecturers)
                ->select('name','email','city_name')
                ->join('cities','students.city','=','cities.id')
                ->get();

                return $students;
  }
}
