@extends('welcome')
@section('content')

<h1><b>ADD stocks</b></h1>

<div class="container-fluid">
    <form action="{{route('stock.add')}}" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputPassword1">product_name</label>
        <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="name" >
        </div>
        <div class="form-group">
            <label for="quantity">product_quantity</label>
            <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="quantity" >
            </div>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection