@extends('welcome')
@section('content')

<h1><b>ADD PRODUCT CATEGORY</b></h1>

<div class="container-fluid">
    <form action="{{route('category.add')}}" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">category_name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">catedory discription</label>
            <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection