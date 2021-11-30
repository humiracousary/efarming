@extends('welcome')
@section('content')

<h1><b>Category List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('category.form')}}" class="btn btn-primary">Create Category</a>
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

                @foreach($category as $key=>$data)
                <tbody>
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->details}}</td>
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