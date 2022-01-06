@extends('website.master')

@section('content')


<div class="col-lg-3 col-md-6 special-grid best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">
                <p class="sale">Sale</p>
            </div>
            <img style="height: 200px" src="{{url('/upload/',$product->image)}}" class="img-fluid" alt="Image">
            <div class="mask-icon">
                
                <a class="cart" href="#">Add to Cart</a>
            </div>
        </div>
        <div class="why-text">
            <h4>{{$product->name}}</h4>
            <h5> {{$product->price}}</h5>
        </div>
    </div>
</div> 

@endsection