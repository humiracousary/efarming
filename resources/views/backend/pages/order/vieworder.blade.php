@extends('welcome')


@section('content')

{{-- <input style="float: right !important;" class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');"
    value="Print">
<div id="divToPrint">



    <h4 style="text-align:center">View Details</h4>

    <p><b>name: {{$order->user->name}}</b></p>
    
    <p><b>Email: {{$order->user->email}}</b></p>
    <p><b>phone: {{($order->user->modile)}}</b></p>
    {{-- <p><b>Status:{{($Orderdetails->status)}}</b></p> --}}
    {{-- <p><b>Total: {{($order->total_price)}}</b></p>



</div> --}}



{{-- <script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script> --}} 

<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                  
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Invoice</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed:</span><span class="ml-1">{{$order->user->name}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span class="ml-1">{{$order->created_at}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">#0{{$order->id}}</span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0">HK Farm</h4><span>hk@gmail.com</span>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderDtails as $data )
                                <tr>
                                    <td>{{$data->product->name}}</td>
                                    <td>{{$data->unit_price}}</td>
                                    <td>{{$data->quantity}}</td>
                                    <td>{{$data->sub_total}}</td>
                                </tr>
                                @endforeach
                                <tr><td></td><td></td><td></td><td>Total{{$order->total_price}}</td></tr>
                            </tbody>
                      
                        </table>
                        
                    </div>
                </div>
                <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button">Pay Now</button></div>
            </div>
        </div>
    </div>
</div>

@endsection