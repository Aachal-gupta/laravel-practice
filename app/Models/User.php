<?php

namespace App\Models;

// use Attribute;
use Illuminate\Support\Number;
// use Illuminate\Support\Number;  // for the salary data convert doller
use Illuminate\Database\Eloquent\Casts\Attribute;  // for get and set use simultaneously
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    public $timestamps = false ;
    protected $guarded = [];

    //************* MUTATOR *********** */
    //for email
    public function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);  // $this mean users table
    }

    // //for user_name
    // public function setUserNameAttribute($value){
    //     $this->attributes['user_name'] = strtolower($value);
    // }

    //for password
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }


    //************** ACCESSOR ********* */

    //for dob
    public function getDobAttribute($value){
        return date('D M Y',strtotime($value));
    }

    // //for 1st letter capital user_name when you will get or fetch
    // public function getUserNameAttribute($value){
    //      return ucwords($value);
    // }

    // in both username accessor and mutator plac we can take this code , from this code both fuction will work
    protected function UserName(): Attribute{
        return Attribute::make(
            get: fn(string $value) =>ucwords($value),
            set: fn(string $value) =>strtolower($value)

        );
    }

    public function getSalaryAttribute($value){
        // return  Number::currency($value, in: 'EUR');
        // return  Number::currency($value);   //it show $ sign
                // return  Number::currency($value, in: 'INR');
                // return Number::format($value);
                return Number::spell($value);



   }

}
