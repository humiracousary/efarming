<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MylocationController extends Controller
{
    public function mylocation()
    {
        return view('website.pages.mylocation');
    }

    public function about()
    {
        return view('website.pages.about');
    }
}
