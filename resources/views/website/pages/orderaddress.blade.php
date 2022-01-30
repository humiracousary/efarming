
@extends('website.master')

@section('content')


<h1><b>please put your details for confirming your order</b></h1>

<div class="container-fluid">
    <form action="{{route('cart.checkout')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="checkout__input">
        <label for="exampleInputPassword1">Receiver_Name</label>
        <input value={{auth()->user()->name}} type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="checkout__input">
            <label for="exampleInputPassword1">Email</label>
            <input value={{auth()->user()->email}} type="string" class="form-control" id="exampleInputPassword1" placeholder="email" name="email">
            </div>
            <div class="checkout__input">
                <label for="exampleInputPassword1">Phone Number</label>
                <input value={{auth()->user()->mobile}} type="string" class="form-control" id="exampleInputPassword1" placeholder="mobile" name="mobile">
                </div>
        <div class="checkout__input">
            <label for="exampleInputPassword1">address</label>
            <input type="string" class="form-control" id="exampleInputPassword1" placeholder="address" name="address">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection