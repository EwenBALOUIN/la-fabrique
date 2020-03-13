<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\SucessMail;
use App\Contact;
use Error;
use Exception;
/**
 * @var App\Contact
 */

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
        Contact::create($data);
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

    public function index(){
        $contacts = Contact::get();
        return view('admin.email_list', compact('contacts'));
    }

    public function reply(int $id){
        $contact = Contact::where('contact_id', $id)->firstOrFail();
        return view('admin.email', compact('contact'));
    }

    public function delete(int $id){
        Contact::where('contact_id', '=', $id)->firstOrFail()->delete();
        return $this->index();
    }

    public function response(Request $request, int $id)
    {
        $contact = Contact::where('contact_id', $id)->firstOrFail();
        dd($contact);
        $this->validate(request (), [
            'response'=>'required'
        ]);
        $data = array(
            'response' => $request->response
        );
        Contact::update($data);
        return $this->verification($data);
    }
}
