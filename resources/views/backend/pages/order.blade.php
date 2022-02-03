@extends('welcome')
@section('content')

<h1><b>order</b></h1>

<div>
  <form action="{{route('filter.order')}}" method="post">
    @csrf
      <div class="input-group rounded mt-3 mb-2">
          <input type="date" class="form-control rounded" name="from_date" placeholder="Search" aria-label="Search"
                 aria-describedby="search-addon" />
          <input type="date" class="form-control rounded" name="to_date" placeholder="Search" aria-label="Search"
                 aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
  <button type="submit">submit</button>
</span>
      </div>
  </form>
</div>

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User_Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone_Number</th>
            <th scope="col">Address</th>
            <th scope="col">Total_Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        @foreach($order as $key=>$data)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->user->name}}</td>
          <td>{{$data->user->email}}</td>
          <td>{{$data->user->mobile}}</td>
          <td>{{$data->address}}</td>
          <td>{{$data->total_price}}</td>
          <td>{{$data->status}}</td>
          <td>
          <a href="{{route('order.view',$data->id)}}" class="btn btn-info">view</a>
                 <a href="{{route('order.delete',$data->id)}}" class="btn btn-danger">Delete</a> 
                
                <form action="{{route('order.update',$data->id)}}" method="post">
                    @csrf

                    <select class="form-control" name="status" style="width: 136px;">

                        <option value="processed">Processed</option>
                        <option value="cancelled">Cancelled</option>
                        <option value="delivered">Delivered</option>

                    </select>
                    <button class="btn btn-primary">Update</button>
                </form>
            </td></tr>
          @endforeach
      </table></div>
    <div class="col-sm-2"></div>
  </div>

</div>

@endsection