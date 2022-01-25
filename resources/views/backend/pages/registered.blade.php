@extends('welcome')
@section('content')

<h1><b>contact peapule</b></h1>


<div class="container-fluid">
  <div class="col-md-6">

  
<div class="col-sm-2"></div>
     <div class="col-sm-8"> <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">first Name</th>
                <th scope="col">last name</th>
                <th scope="col">country</th>
                <th scope="col">subject</th>
                <th scope="col">action</th>
              </tr>
            </thead> 
                {{-- <tbody>
                @foreach($contact as $key=>$contact)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$contact->firstname}}</td>
                    <td>{{$contact->lastname}}</td>
                    <td>{{$contact->country}}</td>
                    <td>{{$contact->subject}}</td>
                    </tr>
                    
                    @endforeach --}}
            </tbody>
          </table></div>
        <div class="col-sm-2"></div>
      </div>
</div>
@endsection