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

  public function chunkData(){
    $students = DB::table('students')->orderBy('id')
                ->chunk(3,function($students){
                    foreach($students as $student){
                        echo  $student->name . "<br><br>";
                    }
                });

  }

  public function queryData(){
    // $students = DB::select('select * from students');
    // return $students;

    //  $students = DB::select('select name, age from students where age > ? and name like ?',[15,"a%"]);
    //  return $students;

    //  $students = DB::select('select name, age from students where id = :id',['id'=>4]);
    //   return $students;

      // $students = DB::insert('insert into students (name,email,age,city,votes) values (?,?,?,?,?)',
      //                       ["ram kumar",'ram@gmail.com', 34, 3,450]);
      //                       return $students;


      // $students = DB::update('update students set email = "test2@gmail.com" where id = ?',[1]);
      // return $students;

      // $students = DB::delete("delete from students where id = ?",[7]);
      // return $students;

      // $students = DB::statement("drop table student");
      // return $students;


  }
}
