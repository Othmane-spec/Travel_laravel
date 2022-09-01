<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send()
    {
        request()->validate(['email' => 'required|email']);
        request()->validate(['name' => 'required']);
        request()->validate(['message' => 'required']);

        Mail::to(request('email', 'name', 'message'))->send(new Contact());

        return redirect()->back();
    }
}
