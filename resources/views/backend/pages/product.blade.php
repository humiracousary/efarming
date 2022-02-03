@extends('welcome')
@section('content')

<h1><b>Add Product</b></h1>

<div class="container-fluid">
    <form action="{{route('product.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
        <label for="exampleInputPassword1">Product_Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Category_Name</label>
            <select name="category" class="form-control" id="exampleInputPassword1" >
                <option>select one</option>
            
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>    
                @endforeach
            </select>
            </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Product_Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="price" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product_Quantity</label>
            <input type="integer" class="form-control" id="exampleInputPassword1" placeholder="how much" name="quantity">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Product_Picture</label>
            <input name="image" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection