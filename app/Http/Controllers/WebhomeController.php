<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class WebhomeController extends Controller
{
 
    public function webhome()
    {
        $products=Product::all();
        // return view('website.layout.webhome',compact('data'));


    // public function category() {
    
        $categories=Category::all();
        return view('website.layout.webhome',compact('products','categories'));
    }
}

