<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;    // Import the UserController



// Route::resource('user', UserController::class);  // Resource route for UserController

// Route::view('/','welcome');

Route::controller(StudentController::class)->group(function(){

Route::get('/','showUsers')->name('home');

Route::get('/user/{id}','singleUser')->name('view.user');
Route::post('/addUser', 'addUser')->name('addUser1');

Route::post('/updateUser/{id}', 'updateUsers')->name('update.user'); // it is for update
Route::get('/updatePage/{id}', 'updatePage')->name('update.page');// it is for edit ,  after click on submit it will be go into the updateUserPage function

Route::get('/deleteUser/{id}', 'deleteUser')->name('delete.user');



});
Route::view('newuser','/addUser');


