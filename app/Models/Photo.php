<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $guarded= [];
    public $timestamps=false;

    public function photo(){
        // return $this->morphTo(__FUNCTION__,'photo_type','photo_type');
        return $this->morphTo();
    }
}
