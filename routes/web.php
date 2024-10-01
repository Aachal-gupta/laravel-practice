<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    //put the path of file which is set on controller
// use App\Http\Controllers\TestingController;    //put the path of file which is set on controller


// Route::get('/', function () {    //this is home page
//     return view('welcome');
// });

// Route::get('/contact',[UserController::class,'showData'])->name('contact');
// Route::get('/test/{id}',[UserController::class,'viewData'])->name('testing');
                             
// Route::get('/blog',[UserController::class,'showBlog'])->name('bloging');
// Route::get('/',[UserController::class,'showHome'])->name('home');

// above like we need to write this type of code multiple time so in that place we can use this group function to easy to 
//to write clean and short  same code 


                             


Route::get('/',[UserController::class,'showUsers']);
Route::get('/user/{id}',[UserController::class, 'singleUser'])->name('view.user');