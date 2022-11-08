<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(ContactRequest $request)
    {
         Mail::to('user@gmail.com')->send(new ContactMail($request->name, $request->email, $request->message));
             return redirect()->back();
        }
}
