<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class WebhomeController extends Controller
{
 
    public function webhome()
    {
        $products=Product::all();
        $categories=Category::all();
        $tutorials=Tutorial::all();
        return view('website.layout.webhome',compact('products','categories','tutorials'));
    }

    
}

