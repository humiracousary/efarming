@extends('website.master')

@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Total Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        @foreach($order as $key=>$data)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->user->name}}</td>
          <td>{{$data->user->email}}</td>
          <td>{{$data->user->mobile}}</td>
          <td>{{$data->total_price}} BDT</td>
          <td>{{$data->status}}</td>
          <td> <a href="{{route('my.oder.view',$data->id)}}" class="btn btn-success mx-2">View</a> </td>
          </tr>
          @endforeach
      </table></div>
    <div class="col-sm-2"></div>
  </div>

</div>

@endsection