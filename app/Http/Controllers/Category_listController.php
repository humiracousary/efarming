<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class Category_listController extends Controller
{
    public function category_list()
    {
        $category=category::all();
        return view('backend.pages.category_list',compact('category'));
    }

    public function form(){
        return view('backend.pages.category-create');
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
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$filename,

        ]);
        return redirect()->back();
        
    }

public function category($id)
{
    $products = Product::where('category',$id)->get();
    return view('website.pages.category',compact('products')); 

    // $categories = category::where('category',$id)->get();
    // return view('website.pages.category',compact('categories'));
}

public function categorydelete($id)
{
     $data = Category::find($id);

     if ($data)
      {
       $data->delete();
       return redirect()->back();
      }    
 }

}
