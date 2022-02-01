<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Event;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $count['product']=Product::all()->count();
        $count['order']=Order::all()->count();
        $count['category']=Category::all()->count();
        $count['event']=Event::all()->count();
        $count['tutorial']=Tutorial::all()->count();
        return view('backend.layout.home',compact('count'));
    }
}
