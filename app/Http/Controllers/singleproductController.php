<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class singleproductController extends Controller
{
    public function viewsingleproduct($id)
    {
    $product=Product::find($id);
    return view('website.pages.single_product',compact('product'));
    }
}
