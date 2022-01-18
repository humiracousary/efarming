<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
                'price' => $data->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function viewcart()
    {
        $carts = session('cart');
        $total = 0;
        return view('website.pages.addtocart',compact('carts','total'));
    }



    public function delete()
    {
        session()->forget('cart');
        return redirect()->back();
    }
}
