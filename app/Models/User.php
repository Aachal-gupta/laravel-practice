<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;
      // ****** ONE TO MANY RELATION *****************
    public function get_post(){
        return $this->hasmany(Post::class);    //hasmany(model name,foreign colum/key, primary key)
    }
    protected $guarded = [];
}
