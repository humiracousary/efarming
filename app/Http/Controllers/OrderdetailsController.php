<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    public function orderdetails()
    {
        return view('backend.pages.order-details');
    }

}