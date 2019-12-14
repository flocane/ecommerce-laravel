<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormControler extends Controller
{
   public function create(){
        return view('contact.create');
   }
}
