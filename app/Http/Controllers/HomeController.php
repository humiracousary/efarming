<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $count['product']=Product::all()->count();
        $count['order']=Order::all()->count();
            // $count['customer']=User::all()->count();
        return view('backend.layout.home',compact('count'));
    }
}
