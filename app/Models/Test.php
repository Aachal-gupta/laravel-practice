<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $casts = [
        'meta_data'=>'json'   // it act like this json formate  and if we do not write this then data is act as a string 
    ];
}
