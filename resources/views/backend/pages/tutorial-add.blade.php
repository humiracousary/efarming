@extends('welcome')
@section('content')

<h1><b>ADD tutorial</b></h1>

<div class="container-fluid">
    <form action="{{route('tutotial.add')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">tutorial name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">tutorial discription</label>
            <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">link of tutorial</label>
            <input name="picture" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection