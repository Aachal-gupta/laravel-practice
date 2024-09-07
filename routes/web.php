<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    //this is home page
    return view('welcome');
});
                                    // on server in terminal by this cmd php artisan serve
Route::get('/demo', function () {    //put on url http://localhost:8000/demo
    return view('about');
});

// it is default parameter
// Route::get('/pest/{id?}', function (string $id="not defined"){     //  take on url http://localhost:8000/pest/22
//     if($id){
//         return "<h2>In url ID = ". $id ."</h2>";
//     }else{
//         return "<h1>In url id is not taken .</h1>";
//     }
// });

// Route constraint
// http://localhost:8000/pest/aachal
Route::get('pest/{id}', function(string $id){
    if($id){
        return "<h1> the ID = ". $id ."</h1>";
    }
    else{
        return "<h2> NOT FOUND ID</h2>";
    }
})->whereAlpha('id');
