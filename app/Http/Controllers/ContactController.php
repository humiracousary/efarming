<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function trycontact()
    {
        return view('website.pages.contact');
    }
    public function contact(){
        $contact = Contact::all();
        return view('backend.pages.contact_add',compact('contact'));
    }
}
