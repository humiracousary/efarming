@extends('website.master')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

    <table class="table">


      <thead>
        <tr>
          <th scope="col">#</th>
          {{-- <th scope="col">Image</th> --}}
          <th scope="col">Name</th>
          <th scope="col">price</th>
          <th scope="col">quantity</th>
          <th scope="col">SubTotal</th>
        </tr>
      </thead>
      @if ($carts)
      @foreach($carts as $key=>$cart)

      <tr>
        <td>{{$key+1}}</td>
        {{-- <td>
          <img width="100px" src="{{url('uploads/product/'.$cart['image'])}}" alt="">
        </td> --}}
        <td>{{$cart['name']}}</td>
        <td>{{$cart['price']}}</td>
        <td>{{$cart['quantity']}}</td>
        <td>{{(int)$cart['quantity'] * (int)$cart['price']}}</td>
      </tr>

      @php
      $total=(int)$total+((int)$cart['quantity'] * (int)$cart['price']);
      @endphp
      @endforeach
      @endif

    </table>

    <div style="float:right">
    @if ($carts)
    <p>Total={{ $total }}</p>
    @else
    <p>There is no Products On The cart</p>
    @endif
    </div>

  </div>

  @endsection