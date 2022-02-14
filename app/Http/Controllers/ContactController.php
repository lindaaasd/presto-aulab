<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact.contact-form');
    }

    public function submit(Request $request){

        $name= $request->input('name');
        $email= $request->input('email');
        $message= $request->input('message');

        $contact = compact("name", "message" );
        $adminContact = compact ("name", "email", "message");

        Mail::to($email)->send(new ContactMail($contact));
        Mail::to("admin@presto.com")->send(new AdminMail($adminContact));

        return redirect(route("contact-form"))->with("message", "Grazie per averci contatatto");
    }
}
