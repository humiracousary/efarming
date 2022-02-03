@extends('welcome')
@section('content')

<h1><b>Add Product Category</b></h1>

<div class="container-fluid">
    <form action="{{route('category.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">category_Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Catedory_Discription</label>
            <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product_Picture</label>
            <input name="image" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection