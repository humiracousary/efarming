<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AddtocartController extends Controller
{
    public function addtocart($id)
    {

        $data = Product::find($id);

        $cart = session()->has('cart') ? session()->get('cart') : [];

        if (array_key_exists($data->id, $cart)) {

            $cart[$data->id]['quantity']++;
            $cart[$data->id]['total_price'] = $cart[$data->id]['quantity'] * $cart[$data->id]['price'];
        } else {
            $cart[$data->id] = [
                'name' => $data->name,
                'product_id' => $data->id,
                'price' => $data->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        //return redirect()->back();
        return redirect()->back()->with('message', 'Product Added to Cart.');
    }

    public function viewcart()
    {
        $carts = session('cart');
        $total = 0;
        return view('website.pages.addtocart',compact('carts','total'));
    }



    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back();
    }

    
    public function checkout()
    {
        // insert order data into order table- user_id, total
        $carts= session()->get('cart');
//dd($carts);
        if($carts)
        {
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'total_price'=>array_sum(array_column($carts,'price')),
            ]);

            // insert details into order details table
            foreach ($carts as $cart)
            {
                OrderDetail::create([
                    'order_id'=> $order->id,
                    'product_id'=>$cart['product_id'],
                    'unit_price'=>$cart['price'],
                    'quantity'=>$cart['quantity'],
                    'sub_total'=>$cart['quantity'] * $cart['price'] ,
                ]);
            }
            session()->forget('cart');
            return redirect()->back()->with('message','Order Placed Successfully.');
        }
        return redirect()->back()->with('message','No Data found in cart.');


    }
}
