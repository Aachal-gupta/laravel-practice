<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    //this is home page
    return view('welcome');
});

// Route::get('/user',function(){
//     return view('user',['user'=>'Aachal Gupta']);
// });
 
// Route::get('/user',function(){
//     $name = '';
//     return view('user',['user'=>$name, 'city'=>'delhi']);
// });

// Route::get('/user',function(){
//     $name = 'Aachal Gupta';
//     return view('user',['user'=>$name, 'city'=>'delhi']);
// });

// Route::get('/user',function(){
//     $name='aachal';
//     return view('user',[
//         'user'=>$name,
//         'city'=>'<script>alert("Hello Aachal"); </script>'
//     ]);
// });

//  Route::get('/user',function(){
//      $name='aachal';
//     return view('user')
//     ->with('user',$name)
//     ->with('city','delhi');
// });

// Route::get('/user',function(){
//     $name='Abhay';
//     return view('user')->withUser($name)->withCity('delhi');
// });

//**********with multidimentional array  how data pass from route to view***********

function getUsers(){
    return  [
        1 => ['name'=>'A1', 'phone'=>'1234', 'city'=>'PUNE'],
        2 => ['name'=>'B1', 'phone'=>'4567', 'city'=>'MUMBAI'],
        3 => ['name'=>'C1', 'phone'=>'5678', 'city'=>'NASHIK'],
        4 => ['name'=>'D1', 'phone'=>'7890', 'city'=>'KOLKATTA'],
    ];
}
Route::get('/test',function(){
   $names=getUsers();
    return view('test',['user'=>$names]);
});

Route::get('/user/{id}', function ($id) { 
      $users = getUsers();
      abort_if(!isset($users[$id]),404);
      $user = $users[$id];
    return view('user',['id' => $user]);
})->name('view.user');