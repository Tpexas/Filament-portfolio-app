<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\AuthorInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacts.show');
    }

    public function submit(ContactRequest $request)
    {
        $author = AuthorInfo::first();
        Mail::to($author->email)->send(new ContactMail($request->name, $request->email, $request->content));
        return to_route('contact.show');
    }
}
