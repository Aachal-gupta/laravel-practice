<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;    // Import the UserController




Route::controller(StudentController::class)->group(function(){

Route::get('/','showUsers')->name('home');

Route::get('/user/{id}','singleUser')->name('view.user');
Route::post('/addUser', 'addUser')->name('addUser1');

Route::post('/updateUser/{id}', 'updateUsers')->name('update.user'); // it is for update
Route::get('/updatePage/{id}', 'updatePage')->name('update.page');// it is for edit ,  after click on submit it will be go into the updateUserPage function

Route::get('/deleteUser/{id}', 'deleteUser')->name('delete.user');



});
Route::view('newuser','/addUser');

// ---------------------------------------------------------------------------------------------------------------

Route::get('/authenticate',function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerSave',[UsersController::class,'register'])->name('registerSave');

Route::view('login','login')->name('login');
Route::get('loginMatch',[UsersController::class,'login'])->name('loginMatch');
// when we have to access the page then use get  and when we have to post the data then we have to use post
Route::get('dashboard',[UsersController::class,'dashboardPage'])->name('dashboard');
Route::get('logout',[UsersController::class, 'logout'])->name('logout');



