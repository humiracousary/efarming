@extends('welcome')
@section('content')

<h1><b>ADD event</b></h1>

<div class="container-fluid">
    <form action="{{route('event.add')}}" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">event name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">event discription</label>
            <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">event place</label>
            <input name="place" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">event date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="name" name="date">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">time</label>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="name" name="time">
                </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection