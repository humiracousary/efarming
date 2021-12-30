@extends('welcome')
@section('content')

<h1><b>UPDATE PRODUCT</b></h1>

<div class="container-fluid">
    <form action="{{route('product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <div class="form-group">
        <label for="exampleInputPassword1">product_name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">product_price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="price" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">product_quantity</label>
            <input type="integer" class="form-control" id="exampleInputPassword1" placeholder="how much" name="quantity">
        </div>
        <!--<div class="mb-3">
            <label for="" class="form-label">Product Picture</label>
            <input name="image" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>-->



        
        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>

@endsection