@extends('welcome')
@section('content')

<h1><b>tutorial List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('add.tutorial')}}" class="btn btn-primary">Add Tutorial</a>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">link</th>
                    <th scope="col">image</th>
                  </tr>
                </thead>
                @foreach($tutorial as $key=>$data)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->details}}</td>
                  <td>{{$data->link}}</td>
                  <td>
                    <img width="100px" src="{{url('uploads/'.$data->image)}}" alt="product image">
                  </td>
                    
                  </tr>
                  @endforeach
              </table></div>
            <div class="col-sm-2"></div>
          </div>

    </div>
</div>

@endsection