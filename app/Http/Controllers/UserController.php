<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    public function adduser()
    {
        return view('backend.pages.user-add');
    }

    public function userlist()
    {
        return view('backend.pages.user-list');
    }

    public function add(Request $request){
        // dd($request->all());
        user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'num'=>$request->num,
            'address'=>$request->address,
            'address2'=>$request->address2,
            'city'=>$request->city,
        ]);
        return redirect()->back();
    }
}