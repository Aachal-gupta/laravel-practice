<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;    // Import the UserController
use App\Http\Middleware\ValidUser;
use App\Models\Test;

Route::controller(StudentController::class)->group(function(){

// Route::get('/','showUsers')->name('home');  // below same code is written

Route::get('/user/{id}','singleUser')->name('view.user');
Route::post('/addUser', 'addUser')->name('addUser1');

Route::post('/updateUser/{id}', 'updateUsers')->name('update.user'); // it is for update
Route::get('/updatePage/{id}', 'updatePage')->name('update.page');// it is for edit ,  after click on submit it will be go into the updateUserPage function

Route::get('/deleteUser/{id}', 'deleteUser')->name('delete.user');



});
Route::view('newuser','/addUser');

// ---------------------------------------------------------------------------------------------------------------

// Authentication

// Route::get('/authenticate',function () {
//     return view('welcome');
// });

// Route::view('register','register')->name('register');
// Route::post('registerSave',[UsersController::class,'register'])->name('registerSave');

// Route::view('login','login')->name('login');
// Route::get('loginMatch',[UsersController::class,'login'])->name('loginMatch');
// // when we have to access the page then use get  and when we have to post the data then we have to use post
// Route::get('dashboard',[UsersController::class,'dashboardPage'])->name('dashboard');
// Route::get('logout',[UsersController::class, 'logout'])->name('logout');


//******************************Route Middleware*************************//

Route::get('/authenticate',function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerSave',[UsersController::class,'register'])->name('registerSave');

Route::view('login','login')->name('login');
Route::get('loginMatch',[UsersController::class,'login'])->name('loginMatch');

// when we have to access the page then use get  and when we have to post the data then we have to use post
Route::get('dashboard',[UsersController::class,'dashboardPage'])->name('dashboard')->middleware(ValidUser::class);
Route::get('/',[StudentController::class, 'showUsers'])->name('home')->middleware(ValidUser::class);


//// OR WE CAN WRITE LIKE THIS ALSO IN SHORT  ABOVE TWO CODE in group
// Route::middleware([ValidUser::class])->group(function(){
//     Route::get('dashboard',[UsersController::class,'dashboardPage'])->name('dashboard');
//     Route::get('/',[StudentController::class, 'showUsers'])->name('home');

// });

//OR WE CAN PASS THE VALUR ADMIN THEN ONLY ADMIN CAN WATCH THAT PAGE
// Route::middleware([ValidUser::class . ':student'])->group(function(){
//     Route::get('dashboard',[UsersController::class,'dashboardPage'])->name('dashboard');
//     Route::get('/',[StudentController::class, 'showUsers'])->name('home');


// this is laravel ka khud ka middleware hai auth, we can use also that one. it will auto check user is login ot not ? but this auth will not check user is admin or not ?

    // Route::get('dashboard',[UsersController::class,'dashboardPage'])->name('dashboard')->middleware(['auth', ValidUser::class . ':student']);
    // Route::get('/',[StudentController::class, 'showUsers'])->name('home')->middleware(['auth', ValidUser::class . ':student']);

// });  //for that we need to make a colum for role and in that we have to put admin or student then they can access



Route::get('logout',[UsersController::class, 'logout'])->name('logout');


// --------------------------------------------------------------------------------------------------------
// `          -----------------------------------  session ----------------------------

Route::get('/index2', [TestController::class, 'index2']);

Route::get('/store-session', [TestController::class, 'storeSession']);

Route::get('/delete-session', [TestController::class, 'deleteSession']);
