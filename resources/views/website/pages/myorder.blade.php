@extends('website.master')

@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">user name</th>
            <th scope="col">email</th>
            <th scope="col">phone number</th>
            <th scope="col">total price</th>
            <th scope="col">status</th>
            <th scope="col">action</th>
            
          </tr>
        </thead>
        @foreach($order as $key=>$data)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->user->name}}</td>
          <td>{{$data->user->email}}</td>
          <td>{{$data->user->mobile}}</td>
          <td>{{$data->total_price}}</td>
          <td>{{$data->status}}</td>
          <td> <a href="{{route('my.oder.view',$data->id)}}" class="btn btn-success mx-2">view</a> </td>
          </tr>
          @endforeach
      </table></div>
    <div class="col-sm-2"></div>
  </div>

</div>

@endsection