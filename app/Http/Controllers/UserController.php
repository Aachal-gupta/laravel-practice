<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // ****** ONE TO MANY RELATION *****************


        // $users = User::get(); // Ii will show user table data
        // return $users;

        // $users = User::with('get_post')->get();  // in with function i called get_post function which is defined in model file User.php 
        // return $users;

    //     $users = User::with('get_post')->find(1);   
    //     return $users;

        // $users = User::doesntHave('get_post')->get();  // it show only those  user who does not have any post 
        // return $users;

        // $users = User::has('get_post')->with('get_post')->get();    //how many users have a post and how much
        // return $users;

        // $users = User::has('get_post','>=',3)
        //             ->with('get_post')
        //             ->get(); 
        // return $users ;

        $users = User::select(['name','email'])->withCount('get_post')->get();    //it will be count the post of each user
            return $users;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $posts = new Post([   //  //Post is  a object of Post class like we have do in OOP IN C++
        //     'title'=> 'News title',
        //     'description' => 'just testing....'
        // ]);
        // $user = User::find(2);   // it mean in post table create data and put the value of title and description and id is 2
        // $user->get_post()->save($posts); // get_post is a function .

        // *****************2ND METHOD TH CREATE /INSERT****************

        $user = User::find(5);

        $user->get_post()->create([  // we can put many data at a time by this method createMany([[data],[data]])
            'title'=> 'Post title 2',
            'description' => 'just testing.... 5'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
