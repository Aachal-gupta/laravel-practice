<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded= [];
    public $timestamps=false;

    public function photo(){
        return $this->morphOne(Photo::class,'photo'); // photo is a function in model photo class
    }
}
