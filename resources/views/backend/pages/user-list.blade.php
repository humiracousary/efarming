@extends('welcome')
@section('content')

<h1><b>user List</b></h1>

<div class="container-fluid">

    <div class="row">
     
        <div class="col-md-6">
            <a href="{{route('add.user')}}" class="btn btn-primary">Add user</a>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                 
              </table></div>
            <div class="col-sm-2"></div>
          </div>

    </div>
</div>

@endsection