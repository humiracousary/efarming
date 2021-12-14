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

        $filename='';
        if ($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            
        ]);
        return redirect()->route('product.list');
    
    }

}