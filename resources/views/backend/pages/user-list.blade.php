@extends('welcome')
@section('content')

<h1><b>user List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('add.user')}}" class="btn btn-primary">Add user</a>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">number</th>
                    <th scope="col">address</th>
                    <th scope="col">address2</th>
                    <th scope="col">city</th>
                  </tr>
                </thead>
                @foreach($user as $key=>$data)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->num}}</td>
                  <td>{{$data->address}}</td>
                  <td>{{$data->address2}}</td>
                  <td>{{$data->city}}</td>
                  
                </tr>
                @endforeach
                </table>

                </div>
            <div class="col-sm-2"></div>
          </div>

    </div>
</div>

@endsection