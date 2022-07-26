@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">

    <h1>Order Details</h1>
    <h4>Order Id: {{$order->id}}</h4>
    <h4>Customer Id: {{$order->sellerOrderBelongsToSellerCustomer->id}}</h4>
    <h4>Customer Phone: {{$order->sellerOrderBelongsToSellerCustomer->c_phone}}</h4>
    <h4>Customer Address: {{$order->sellerOrderBelongsToSellerCustomer->c_address}}</h4>
    <h4>Order Placed: {{$order->created_at}}</h4>
    <h4>Seller Id: {{$order->sellerOrderBelongsToSeller->id}}</h4>
    <h5 style="text-align:center">Order Details Table</h5>
    <table class="table table-bordered">
        <tr>
            <td>Product Id</td>
            <td>Product Name</td>
            <td>Product Image</td>
            <td>Unit Price</td>
            <td>Qty</td>
        </tr>
        @foreach($order->sellerOrderHasManySellerOrderDetails as $od)
            <tr>
               <td>{{$od->sellerOrderDetailBelongsToSellerProduct->id}}</td>
                <td>{{$od->sellerOrderDetailBelongsToSellerProduct->p_name}}</td>
                <td><img width="100px" height="100px" src="{{asset('images/'.$od->sellerOrderDetailBelongsToSellerProduct->p_image)}}"></td>
                <td>{{$od->unit_price}}</td>
                <td>{{$od->qty}}</td>
            </tr>
            <tr><td></tr>
        @endforeach
        <tr><td><td><td><td>Total Price: {{$order->total_price}}</td></td></td></td></tr>
    </table>
@endsection