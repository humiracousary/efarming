@extends('welcome')
@section('content')

<h1><b>Product List</b></h1>


<div class="container-fluid">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">
    <a href="{{route('create.product')}}" class="btn btn-primary">Add Product</a>

  </div>


    
    <div class="row">

     <div class="col-md-4"></div>
     <div class="col-md-4"></div>
     <div class="col-md-4"><input type="text" class="from-control" name="search" placeceholeder="search here....">
      <button class="dtn btn-primary" type="submit">Search</button>
      </div>
    </div>


        <div class="col-sm-2"></div>
        <div class="col-sm-8"> <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($product as $key=>$data)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->quantity}}</td>
                <td>
                  <img width="100px" src="{{url('/upload/'.$data->image)}}" alt="product image">
                </td>
                <td> 
                     <a href="{{route('product.edit',$data->id)}}" class="btn btn-primary">edit</a>
                     <a href="{{route('product.view',$data->id)}}" class="btn btn-primary">view</a>
                      <a href="{{route('product.delete',$data->id)}}" class="btn btn-primary">delete</a>
                </td>
              </tr>
              @endforeach

              
            </tbody>
          </table></div>
        <div class="col-sm-2"></div>
      </div>

   
</div>

@endsection