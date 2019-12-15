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

       //Cambiar validacion a JS
       $data = request()->validate([
           'nombre'=>'required',
           'telefono'=>'required',
           'email' =>'required|email',
           'mensaje' =>'required'

       ]);
       Mail::to('dhlavaderolavabien@gmail.com')->send(new ContactformMail($data));

   }
}
