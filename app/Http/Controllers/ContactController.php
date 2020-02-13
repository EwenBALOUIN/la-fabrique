<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create() 
    {
        return view('contact.create');
    }

    public function store() 
    {
        $data = request ()->validate([
            'firstname'=>'required',
            'name'=>'required',
            'email'=>'required|email|regex:^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}^',
            'message'=>'required',
            'object'=>'required'
        ]);

        Mail::to('test@test.com')->send(new ContactMail());
    
        return redirect ('contact')->with('messagesuccess','Votre message à bien été envoyé !');
   }   
}