@extends('welcome')
@section('content')
<div id="divToPrint">
    <h1>Product Details</h1>
    <div class="container-fluid">
        
        <p>Product Name: {{$data->name}}</p>
        <p>Product Name: {{$data->price}}</p>
        <p>Product Quantity: {{$data->quentity}}</p>
        <p>Product Image:<img width="100px" src="{{url('/upload/'.$data->image)}}" alt="product image"></p>
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