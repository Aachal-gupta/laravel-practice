<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $timestamps=false;
    //insert data
    protected $guarded = [];

    //for one to one relationship 

    public function contact(){
        return $this->hasOne(Contact::class,'clients_id');  // there is  client file attached with contact file with one to one relation 
    } // clients_id is a foreign key of contact table in data base

    

}
