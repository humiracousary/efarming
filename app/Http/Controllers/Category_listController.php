<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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
}
