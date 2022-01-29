@extends('website.master')

@section('content')


<div class="container-fluid">

    
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">event name</th>
                    <th scope="col">description</th>
                    <th scope="col">place</th>
                    <th scope="col">date</th>
                    <th scope="col">time</th>
                    <th scope="col">action</th>

                  </tr>
                </thead>
                @foreach($event as $key=>$data)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$data->name}}</td>
                  <td>{{$data->details}}</td>
                  <td>{{$data->place}}</td>
                  <td>{{$data->date}}</td>
                  <td>{{$data->time}}</td>
                  <td> 
                    {{-- <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">edit</a>
                    <a href="{{route('product.view',$product->id)}}" class="btn btn-primary">view</a> --}}
                     <li><a href="{{route('do.registration')}}" class="btn btn-primary">Ragistration</a></li>
               </td>
                </tr>
                
                @endforeach
                 
              </table></div>
            <div class="col-sm-2"></div>
          </div>

    </div>
</div>
                
                
    
 @endsection