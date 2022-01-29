@extends('website.master')
@section('content')

<h1><b>order details</b></h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"> <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
            
                <th scope="col">product_name</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
                <th scope="col">sub_total</th>



                
              </tr>
            </thead>
            @foreach($orderdetail as $key=>$data)
            <tr>
              <th scope="row">{{$key+1}}</th>
              
              <td>{{$data->product->name}}</td>
              <td>{{$data->product->price}}</td>
              <td>{{$data->quantity}}</td>

              <td>{{$data->sub_total}}</td>
              
              </tr>
              @endforeach
          </table></div>
        <div class="col-sm-2"></div>
      </div>

   
</div>

@endsection