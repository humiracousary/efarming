@extends('welcome')
@section('content')
<div id="divToPrint">
    <h1>Product Details</h1>
    <div class="container-fluid">
        
        <p>Product Name: {{$data->name}}</p><br>
        <p>Product price: {{$data->price}} BDT</p><br>
        <p>Product Quantity: {{$data->quantity}} KG</p><br>
        <p>Product Image: <img width="200px" src="{{url('uploads/'.$data->image)}}" alt="product image"></p>
    </div>
</div>
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection


<script language="javascript">
    function PrintDiv(divName) 
    {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>