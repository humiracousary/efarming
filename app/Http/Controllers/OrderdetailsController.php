<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    public function orderdetails()
    {
        $orderdetail=OrderDetail::with('order','product')->get();
        return view('backend.pages.order-details', compact('orderdetail'));
    }

}