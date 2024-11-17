<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    public $timestamps=false;

    //protected $guarded = []; // all form data will be saved in db by this method
    // or
    protected $fillable = ['name','email','age','city','votes'];
}
