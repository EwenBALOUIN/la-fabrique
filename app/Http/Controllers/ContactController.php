<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\SucessMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $this->validate(request (), [
            'firstname'=>'required',
            'name'=>'required',
            'email'=>'required|email|regex:^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}^',
            'message'=>'required',
            'object'=>'required'
        ]);

        $data = array(
            'firstname' => $request->firstname,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'object' => $request->object
        );
        return $this->verification($data);
    }

    public function verification(array $data){
        try{
           Mail::to('campus@academy.fr')->send(new ContactMail($data));
        }
        catch(Exception $e){
           return redirect ('/#contact-container')->with('messagefailed','Votre message n\' a pas été envoyé !');
        }
        Mail::to($data['email'])->send(new SucessMail($data));
        return redirect ('/#contact-container')->with('messagesuccess','Votre message a bien été envoyé !');
    }
}
