@extends('welcome')
@section('content')

<h1><b>Product List</b></h1>


<div class="container-fluid">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">
    <a href="{{route('create.product')}}" class="btn btn-primary">Add Product</a>

  </div>


    
    <form action="{{route('product.search')}}" method="GET">
      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><input type="text" class="from-control" name="search" placeceholeder="search here....">
         <button class="dtn btn-primary" type="submit">Search</button>
         </div>
       </div>
    </form>


        <div class="col-sm-2"></div>
        <div class="col-sm-8"> <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">category</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->categoryName?->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                
                <td>
                  <img width="100px" src="{{url('uploads/'.$product->image)}}" alt="product image">
                </td>
                <td> 
                     <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">edit</a>
                     <a href="{{route('product.view',$product->id)}}" class="btn btn-primary">view</a>
                      <a href="{{route('product.delete',$product->id)}}" class="btn btn-primary">delete</a>
                </td>
              </tr>
              @endforeach

              
            </tbody>
          </table></div>
        <div class="col-sm-2"></div>
      </div>

   
</div>

@endsection