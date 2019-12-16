<?php

namespace App\Http\Controllers;

use App\Mail\ContactformMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormControler extends Controller
{
   public function create(){
        return view('contact.create');
   }
   public function store(){


    // $data = request()['name','phone','email','message'];

       //Cambiar validacion a JS
       $data = request()->validate([
           'name'=>'required',
           'phone'=>'required',
           'email'=>'required',
           'mensaje'=>'required'

       ]);
       Mail::to('dhlavaderolavabien@gmail.com')->send(new ContactformMail($data));

   }


}
