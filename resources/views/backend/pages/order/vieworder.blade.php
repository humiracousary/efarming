@extends('welcome')


@section('content')

<div id="divToPrint">

<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                  
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Invoice</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed:</span><span class="ml-1">{{$order->user->name}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Phone Number:</span><span class="ml-1">{{$order->user->mobile}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Address:</span><span class="ml-1">{{$order->address}}</span></div>
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
                                    <td>{{$data->unit_price}} BDT</td>
                                    <td>{{$data->quantity}}</td>
                                    <td>{{$data->sub_total}} BDT</td>
                                </tr>
                                @endforeach
                                <tr><td></td><td></td><td>Total:</td><td>{{$order->total_price}} BDT</td></tr>
                                <tr><td></td><td></td><td>Dativary Charge:</td><td>60.00 BDT</td></tr>
                            </tbody>
                      
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
</div>
<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection



<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>

