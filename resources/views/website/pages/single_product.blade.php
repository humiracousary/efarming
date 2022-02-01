@extends('website.master')

@section('content')


<div id="divToPrint">
    <h1>Product Details</h1>
    <div class="container-fluid">
        
        <p>Product Name: {{$product->name}}</p><br>
        <p>Product price: {{$product->price}} BDT</p><br>
        <p>Product Quantity: {{$product->quantity}} KG</p><br>
        <p>Product Image: <img width="200px" src="{{url('uploads/'.$product->image)}}" alt="product image"></p>
    </div>
</div>


@endsection