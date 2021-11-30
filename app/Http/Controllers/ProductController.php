<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createproduct()
    {
        return view('backend.pages.product');
    }

    public function productList(){
        $product = Product::all();
        return view('backend.pages.product_list',compact('product'));
    }

    public function add(Request $request){
        // dd($request->all());
        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->how_much,
        ]);
        return redirect()->back();
}
}