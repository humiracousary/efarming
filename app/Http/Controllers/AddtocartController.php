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
            // $cartData[$id]['sub_total'] = $cartData[$id]['quantity'] * $cartData[$id]['price'];
        } else {
            $cart[$data->id] = [
                'name' => $data->name,
                'product_id' => $data->id,
                'price' => $data->price,
                'quantity' => 1,
                'sub_total' => $data->price * 1

            ];
        }

        session()->put('cart', $cart);
        //return redirect()->back();
        return redirect()->back()->with('message', 'Product Added to Cart.');
    }


    //add to cart er quantity update er kaaaj

    public function quantity_update(Request $request)
    {
  
    $id = $request->input('cart_id');
    $cart = session()->get('cart');
    // dd($cart);

    $product = Product::find($id);

    // dd($product);
    if ($product->quantity < $request->quantity) {
        return redirect()->back();
    }
    else {
        $cart[$id]['quantity'] = $request->quantity;
        $cart[$id]['total_price']=$cart[$id]['price']*$request->quantity;
        session()->put('cart',$cart);
        // dd($cart);

        return redirect()->back();
    }

    

    
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

    
    public function checkout(Request $request)
    {
        // dd($request->all());
        // insert order data into order table- user_id, total
        $carts= session()->get('cart');
        // dd($carts);
        // product decrising from the product table

        foreach ($carts as $key => $value) {
            $product_id = $value['product_id'];
            $quantity = $value['quantity'];
            $product = Product::find($product_id);
            $newQuantity = $product->quantity - $quantity;
            $product->update([
                'quantity'=>$newQuantity
            ]);
        }
        if($carts)
        {
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'address'=>$request->address,
                'total_price'=>array_sum(array_column($carts,'total_price')),
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
            return redirect()->back()->with('success','Order Placed Successfully.');
        }
        return redirect()->back()->with('success','No Data found in cart.');


    }

    //billingaddress
    public function billingaddress()
    {
        return view('website.pages.orderaddress');
    }

    // my_order
    public function myorder()
    {
        $order=Order::with('orderDtails')->where('user_id',auth()->user()->id)->get();
        //dd($order);
        return view('website.pages.myorder',compact('order'));
    }

    public function myorderview($order_id)
    {
        // dd($order_id);
        $orderdetail=OrderDetail::where('order_id',$order_id)->get();
        // dd($orderdetail);
        return view('website.pages.myorderview',compact('orderdetail'));
    }
}
