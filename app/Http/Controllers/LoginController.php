<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
    }
    public function doLogin(Request $request)
    {

        $userInfo = $request->except('_token');
        //        $credentials['email']=$request->user_email;
        //        $credentials['password']=$request->user_password;
        //        dd($credentials);
        //        $credentials=$request->only('user_email','user_password');

        // dd($userInfo);
        if (Auth::attempt($userInfo)) {
            if (auth()->user()->user_type == 'admin') {
                return redirect()->route('admin')->with('message', 'Admin Login successful.');
            } else if (auth()->user()->user_type == 'user') {
                return redirect()->route('webhome')->with('message', 'User Login successful.');
            }
        }
        return redirect()->back()->with('error', 'Invalid user credentials');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message', 'Logging out.');
    }
}
