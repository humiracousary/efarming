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
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->back();
        
    }
}
