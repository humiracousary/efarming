<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createproduct()
    {
        $categories = Category::all();
        return view('backend.pages.product',compact('categories'));
    }

    public function productList(){
       

        $products = Product::with('categoryName')->get();
        
        // dd($products);
        return view('backend.pages.product_list',compact('products'));
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
            'category_id'=>$request->category,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            
        ]);
        return redirect()->route('product.list');
    
    }


    public function viewproduct($id)
    {
        $data=Product::find($id);
        return view('backend.pages.product.product_view',compact('data'));

    }

    public function editProduct($id){
        $data = Product::find($id);
        //$categories = Category::all();
        //$companies = Company::all();
        return view('backend.pages.product.product_update', compact('data'));
        

    
    }
    public function productupdate(Request $request,$id){
        $data = Product::find($id);
        if ($data) {
            $data->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity
            

            ]);
            return redirect()->route('product.list')->with('success','Product Updated Successfully.');
        }
       
     
    }



   public function productdelete($id)
   {
        $data = Product::find($id);

        if ($data)
         {
          $data->delete();
          return redirect()->back();
         }    
    }



    public function productSearch(){
        // dd(request()->all());
        $key=null;
        // dd(request()->search);
        if(request()->search){
            $key=request()->search;
            $product = Product::where('name','LIKE','%'.$key.'%')
                ->get();
                   
            return view('backend.pages.product_list',compact('product','key'));
        }
        $product = Product::all();
       
        return view('backend.pages.product_list',compact('product'));
    }

}