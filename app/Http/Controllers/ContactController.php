<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\feedback;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function trycontact()
    {
        return view('website.pages.contact');
    }
    public function contact()
    {
        $contact = Contact::all();
        return view('backend.pages.contact_add', compact('contact'));
    }

    public function addcontact(Request $request)
    {
        // dd($request->all());

        contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'subject' => $request->subject,
        ]);
        return redirect()->route('try.contact');
    }

    public function contactdelete($id)
    {
        $data = contact::find($id);

        if ($data) {
            $data->delete();
            return redirect()->back();
        }

        return redirect()->route('try.contact');
    }
}
