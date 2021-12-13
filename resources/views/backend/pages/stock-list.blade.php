@extends('welcome')
@section('content')

<h1><b>Stock List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('stock.form')}}" class="btn btn-primary">Create stock</a>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> <table class="table">
                <thead>

                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">details</th> 
                  </tr>
                </thead>
                @foreach($stock as $key=>$data)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->quantity}}</td>
                </tr>
                @endforeach

               
                </tbody>
              </table>
                  </div>

            <div class="col-sm-2"></div>
          </div>

    </div>
</div>

@endsection