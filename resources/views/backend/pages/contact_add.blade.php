@extends('welcome')
@section('content')

<h1><b>Contact People</b></h1>


<div class="container-fluid">
  <div class="col-md-6">

  
<div class="col-sm-2"></div>
     <div class="col-sm-12"> <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First_Name</th>
                <th scope="col">Last_Name</th>
                <th scope="col">Division</th>
                <th scope="col">Subject</th>
                <th scope="col">Action</th>
              </tr>
            </thead> 
            <tbody>
              @foreach($contact as $key=>$contact)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$contact->firstname}}</td>
                <td>{{$contact->lastname}}</td>
                <td>{{$contact->country}}</td>
                <td>{{$contact->subject}}</td>
                <td><a href="{{route('contact.delete',$contact->id)}}" class="btn btn-primary">Delete</a></td>
                </tr>
                
                @endforeach
            </tbody>
          </table></div>
        <div class="col-sm-2"></div>
      </div>
</div>
@endsection