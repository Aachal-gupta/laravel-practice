<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function photo(){
        return $this->morphOne(Photo::class,'Photo'); // photo is a function in model photo class
    }
}
