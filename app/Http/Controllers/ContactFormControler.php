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


     
       $data = request()->validate([
           'name'=>'required|string',
           'phone'=>'required|numeric',
           'email'=>'required|email',
           'mensaje'=>'required|string'

       ]);
       Mail::to('dhlavaderolavabien@gmail.com')->send(new ContactformMail($data));
       return redirect(route('home'));

   }


}
