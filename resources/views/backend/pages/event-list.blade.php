@extends('welcome')
@section('content')

<h1><b>event List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('add.event')}}" class="btn btn-primary">Add event</a>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">event name</th>
                    <th scope="col">description</th>
                    <th scope="col">date</th>
                    <th scope="col">time</th>
                  </tr>
                </thead>
                @foreach($event as $key=>$data)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->details}}</td>
                  <td>{{$data->date}}</td>
                  <td>{{$data->time}}</td>
                </tr>
                @endforeach
                 
              </table></div>
            <div class="col-sm-2"></div>
          </div>

    </div>
</div>

@endsection