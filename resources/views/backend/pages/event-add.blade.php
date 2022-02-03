@extends('welcome')
@section('content')

<h1><b>ADD Event</b></h1>

<div class="container-fluid">
    <form action="{{route('event.add')}}" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">Event_Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Event_Discription</label>
            <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Event_Place</label>
            <input name="place" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Event_Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="name" name="date">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Time</label>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="name" name="time">
                </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection