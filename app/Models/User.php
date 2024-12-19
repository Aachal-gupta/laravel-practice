<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;

class User extends Model
{
    use HasFactory;

    public function posts(){
        return $this->hasMany(Post::class);
    }

    //********* GLOBAL SCOPE ******** */

    protected static function booted():void{        //it is applicable all query
    static::addGlobalScope('user',function(Builder $builder){   //there is no need to write call active() in controllerfile
        $builder->where('status',1);
    });
    }

   


//********* LOCAL SCOPE ******** */
//    public function scopeActive($query){
//         return $query->where('status',1);   // there is need to call active() in controllerfile
//    }

   public function scopeCity($query,$cityName){
    return $query->whereIn('city',$cityName);
    }

    public function scopeSort($query){
        return $query->orderBy('name','asc');
        }
}
