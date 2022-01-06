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
        if(request()->Search){
            $key=request()->Search;
            $data = Product::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->get();
            return view('admin.product.product',compact('products','key'));
        }
       
        $data = Product::with('category')->get();
        return view('admin.product.product',compact('products','key'));
    }

}