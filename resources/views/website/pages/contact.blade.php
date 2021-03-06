@extends('website.master')

@section('content')
    
<!DOCTYPE html>
<html>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    {
      box-sizing: border-box;
    }
    
    /* Style inputs */
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    
    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    
    /* Create two columns that float next to eachother */
    .column {
      float: left;
      width: 50%;
      margin-top: 6px;
      padding: 20px;
    }
    
    }
    </style>
<body>
<div class="container">
  <div style="text-align:center">
    <br>
    <h1>Contact Us</h1>
    <p><h3>If you need any kind of query or help please contact with us.Thank you.</h3></p>
  </div>
  <div class="row">
    
    <div class="column">
      <form action="{{route('contact.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">City</label>
        <select id="country" name="country">
          <option value="Dhaka">Dhaka</option>
          <option value="Khulna">Khulna</option>
          <option value="Rajshahi">Rajshsahi</option>
          <option value="Rajshahi">Mymenshing</option>
          <option value="Rajshahi">Sylet</option>
          <option value="Rajshahi">Rangpur</option>
          <option value="Rajshahi">Chittagang</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>

@endsection