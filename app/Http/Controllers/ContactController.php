<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Client;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // inverse one to one relation

    public function show(){
        $contact = Contact::with('get_clients')->get();  //get_clients is a function defin in model contact.php
        return $contact;
    }
}
