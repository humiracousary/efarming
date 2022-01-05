<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebhomeController extends Controller
{
 
    public function webhome()
    {
        $data=Product::all();
        return view('website.layout.webhome',compact('data'));
    }
}

