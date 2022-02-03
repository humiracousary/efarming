@extends('welcome')
@section('content')

<h1><b>Event List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('add.event')}}" class="btn btn-primary">Add Event</a>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-12"> <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Event_Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Place</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach($event as $key=>$data)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->details}}</td>
                  <td>{{$data->place}}</td>
                  <td>{{$data->date}}</td>
                  <td>{{$data->time}}</td>
                  <td> 
                     <a href="" class="btn btn-primary">edit</a>
                     {{-- <a href="" class="btn btn-primary">view</a> --}}
                     <a href="{{route('event.delete',$data->id)}}" class="btn btn-primary">Delete</a>
               </td>
                </tr>
                
                @endforeach
                 
              </table></div>
            <div class="col-sm-2"></div>
          </div>

    </div>
</div>

@endsection