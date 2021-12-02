@extends('welcome')
@section('content')

<h1><b>ADD user</b></h1>
<div>
<form action="{{route('user.add')}}" method='post'>
   

    @csrf
    <div class="form-group">
    <label for="exampleInputPassword1">user name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">phone number</label>
        <input type="integer" class="form-control" id="exampleFormControlInput1" placeholder="1234" name="num">
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" name="city">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>
  @endsection