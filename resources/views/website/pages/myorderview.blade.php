@extends('website.master')
@section('content')

<h1><b>Order Details</b></h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"> <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
            
                <th scope="col">Product_Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity (kg)</th>
                <th scope="col">Sub_Total</th>
              </tr>
            </thead>
            @foreach($orderdetail as $key=>$data)
            <tr>
              <th scope="row">{{$key+1}}</th>
              
              <td>{{$data->product->name}}</td>
              <td>{{$data->product->price}} BDT</td>
              <td>{{$data->quantity}} </td>

              <td>{{$data->sub_total}} BDT</td>
              
              </tr>
              @endforeach
          </table></div>
        <div class="col-sm-2"></div>
      </div>

   
</div>

@endsection