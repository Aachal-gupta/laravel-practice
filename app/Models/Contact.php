<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;
    public $timestamps=false;
     //insert data
     protected $guarded = [];

    //invserse one to one relation  foreign to the primary key
    public function get_clients(){
        return $this->belongsTo(Client::class,'clients_id');
    }
}
