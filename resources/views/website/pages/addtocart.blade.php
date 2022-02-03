@extends('website.master')

@section('content')


<div class="container my-5">
    <h1 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>
    <P><h4>Only cash on dalivary is available.</h4></p>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>

        <table class="table">


            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">price (per kg)</th>
                    <th scope="col">quantity (kg)</th>
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
                <td>{{$cart['price']}} BDT</td>

                {{-- <td>{{$cart['quantity']}}</td> --}}

                <td>
                    <form action="{{route('quantity.update')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$key}}" name="cart_id">
                        <input value="{{$cart['quantity']}}" type="number" id="quantity" name="quantity">
                        <input type="submit" value="Submit">
                    </form>
                </td>
                
                <td>{{(int)$cart['quantity'] * (int)$cart['price']}} BDT</td>
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
                            <h1>Total= {{ $total }} BDT</h1>
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
           @if ($carts)
            <a href="{{route('billing.address')}}" class="btn btn-success mx-2">chack out</a>
            <a href="{{route('cart.clear')}}" class="btn btn-danger mx-2">Clear Cart</a>
            @else
                        <p>
                            <h1>Please Order First</h1>
                        </p>
                        @endif

            
            
            <a href="{{route('webhome')}}" class="btn btn-success mx-2">Continue Shoping</a>
        </div>

    </div>
</div>
    @endsection
