@extends('welcome')
@section('content')

<h1><b>Add Tutorial</b></h1>

<div class="container-fluid">
    <form action="{{route('tutotial.add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">Tutorial_Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tutorial_Discription</label>
            <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="string" class="form-control" id="exampleInputPassword1" placeholder="link" name="link">
            </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input name="image" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection