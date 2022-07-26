@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">	
<h1 style="text-align:center">All Orders</h1>

    <table class="table table-bordered">
        <tr> 
            <th>Order Id</th>
            <th>Customer Id</th> 
            <th>Order Status</th>
            <th>Total Price</th>
            <th>Payment Status</th>
            <th>Payment Method</th>
            <th>Payment Due</th>
            <th>Voucher</th>
        </tr>
        @foreach($orders as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->c_id}}</td>
                <td>{{$item->order_status}}</td>
                <td>{{$item->total_price}}</td>
                <td>{{$item->payment_status}}</td>
                <td>{{$item->payment_method}}</td>
                <td>{{$item->payment_due}}</td>
                <td><a href="/sellerGiveVoucher/{{$item->id}}" class="btn btn-success">Want to give this customer voucher?</a></td>
            </tr>
        @endforeach
    </table>
@endsection