<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{

    public function storeSession(){  // 1st session will store  or get
        session([   'name' => 'Aachal',
                     "classkey"=> "gupta"
            ]);
        // session()->put("classkey","gupta");
            session()->flash('status','session save successfully .'); // from this way we can pass session value in other pages
            // session()->increment('count', $incrementBy = 2);     // how tell how many times you have store session

        return redirect('index2');
    }


    public function index2(){

        $value = session('name');

        return view('addUser',compact('value'));
        // $value = session()->all();  // then read session
        // echo '<pre>';
        // print_r($value);
        // echo '</pre>';

        // $value = session()->get('name');

        // or

        // $value = session('name','default value);
        // echo $value;
    }



    public function deleteSession(){    //we can delete session value
        session()->forget(['name','classkey']);
        session()->flush();  //it will remove all session
       return  redirect('index2');
    }
}
