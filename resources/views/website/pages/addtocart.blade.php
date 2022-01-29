@extends('website.master')

@section('content')


<div class="container my-5">
    <h1 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>

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

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div>
                        @if ($carts)
                        <p>
                            <h1>Total={{ $total }}</h1>
                        </p>
                        @else
                        <p>
                            <h1>There is no Products On The cart</h1>
                        </p>
                        @endif
                    </div>
                </td>
            </tr>

        </table>
        <div>
            <a href="{{route('cart.checkout')}}" class="btn btn-success mx-2">Checkout</a>
            <a href="{{route('cart.clear')}}" class="btn btn-danger mx-2">Clear Cart</a>
        </div>

    </div>
</div>
    @endsection
