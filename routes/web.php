<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    //put the path of file which is set on controller
use App\Http\Controllers\StudentController;   //put the path of file which is set on controller
use App\Http\Controllers\lacaturerController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\OrmuserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;


// Route::get('/', function () {    //this is home page
//     return view('welcome');
// });

// Route::get('/contact',[UserController::class,'showData'])->name('contact');
// Route::get('/test/{id}',[UserController::class,'viewData'])->name('testing');
                             
// Route::get('/blog',[UserController::class,'showBlog'])->name('bloging');
// Route::get('/',[UserController::class,'showHome'])->name('home');

// above like we need to write this type of code multiple time so in that place we can use this group function to easy to 
//to write clean and short  same code 


                             


Route::get('/',[UserController::class,'showUsers'])->name('home');
Route::get('/user/{id}',[UserController::class, 'singleUser'])->name('view.user');

Route::post('/add', [UserController::class, 'addUser'])->name('add.user');
Route::view('newuser','/addUser');

Route::post('/update/{id}',[UserController::class, 'updateUser'] )->name('update.user'); //this is used at the time of submit /update btn click so use post 
Route::get('/updatepage/{id}',[UserController::class, 'updatePage'] )->name('update.page');

Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
Route::get('/delete', [UserController::class, 'deleteAllData']);

Route::get('/students',[StudentController::class,'showStudent']);
Route::get('/union',[lacaturerController::class, 'lecturData']);

Route::get('/when',[lacaturerController::class, 'whenData']);
Route::get('/chunk',[lacaturerController::class, 'chunkData']);
Route::get('/sql',[lacaturerController::class, 'queryData']);
Route::get('/raw',[lacaturerController::class, 'rawData']);



//in the place of myfile we can take any name which is shown in URL
Route::resource('myfile',MyController::class);   //http://localhost:8000/myfile/
// OR  
// Route::resource('myfile',MyController::class)->only([
//     'create','update','edit'    // i want only this function execute not other function in my resource mycontroller file 
// ]);

// Route::resource('myfile',MyController::class)->except([
//     'destroy','show'    // i want only this function DO NOT EXECUTE  in my resource mycontroller file 
// ]);

// Route::resource('myfile',MyController::class)->names([
//     'create' => 'myfile.build',
//     'update' => 'myfile.add'     //from this way we can change the name of that methods route name
// ]);


Route::resource('/home',OrmuserController::class);

//for one to one relationship
Route::resource('/client',ClientController::class);

//inverse one to one relation
Route::get('/contact',[ContactController::class,'show']);