<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function posts(){
        return $this->hasMany(Post::class);
    }


    // //          EVENTS 1st method    // in that place we can use observer 
    // // this function automaticall trigger when user click perticular id for delete 
    // protected static function booted():void{        // it will be not return 
    //     static::deleted(function($user){             // $user contain id no which comes from UserControler file  where i delete data 
    //         $user->posts()->delete();                 // there is called posts function which is defined above ,which show relation with Post table
    //     });
    // }
}
