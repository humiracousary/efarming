@extends('welcome')
@section('content')

<h1><b>ADD PRODUCT</b></h1>

<div class="container-fluid">
    <form action="{{route('product.add')}}" method="POST">
        @csrf
        
        <div class="form-group">
        <label for="exampleInputPassword1">product_name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">product_price</label>
            <input type="price" class="form-control" id="exampleInputPassword1" placeholder="price" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">product_quantity</label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="how much" name="how much">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Picture</label>
            <input name="picture" placeholder="Enter Product Price" type="file" class="form-control" id="">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection