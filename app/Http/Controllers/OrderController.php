<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $order=Order::with('user')->get();
        return view('backend.pages.order', compact('order'));
    }

    public function vieworder($id)
    {
        $order=Order::with('orderDtails')->find($id);
        return view('backend.pages.order.vieworder',compact('order'));

    }

    public function delete($id)
   {
        $order = Order::find($id);

        if ($order)
         {
          $order->delete();
          return redirect()->back();
         }    
    }
}
