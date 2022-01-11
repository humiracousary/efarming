@extends('website.master')

@section('content')

@php 
$carts = session('cart');
$total = 0;
@endphp


@foreach($carts as $cart)
<ul>
  <li>name:{{$cart['name']}}
    
  </li>
  <li>price:{{$cart['price']}}</li>
</ul>

@php 
$total = $total+$cart['price'];
@endphp

@endforeach

<ul>
  <li>ttal:{{$total}}</li>
</ul>
    @endsection