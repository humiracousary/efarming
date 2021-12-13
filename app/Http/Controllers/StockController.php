<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function stocklist()
    {
        $stock = stock::all();
        return view('backend.pages.stock-list',compact('stock'));
    }

    public function form(){
        return view('backend.pages.stock');
    }
    public function add(Request $request)
    {
         //dd($request->all());
        Stock::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity
        ]);
        return redirect()->back();
        
    }

}
