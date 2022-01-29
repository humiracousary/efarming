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
        $order=Order::with('OrderDtails')->find($id);
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

    public function orderUpdate(Request $request,$id)
    {
        $order = Order::find($id);
        $order->update([
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('message','Order Status Updated');
    }

    public function orderPending()
    {
        $pending = Order::where('status','pending')->get();
        // dd($pending);
        return view('admin.order.order-pending',compact('pending'));
        
    }

    public function orderDelivered()
    {
        $delivered = Order::where('status','delivered')->get();
        // dd($delivered);
        return view('admin.order.order-delivered',compact('delivered'));
    }
    public function orderCancelled()
    {
        $cancelled = Order::where('status','cancelled')->get();
        // dd($cancelled);
        return view('admin.order.order-cancelled',compact('cancelled'));
        
    }
}
