@extends('layouts.app')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">

        @if(Session::get('seller'))
            <a class="btn btn-info" href="{{route('sellerEdit')}}">Seller</a>
        @endif 

            <table class="table table-bordered">
            <tr>
            <th>Image</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Sold</th>
                <th>Fix Cost</th>
                <th>Variable Cost</th>
                <th>Administrative Cost</th>
                <th>Extra Price</th>
                <th>Discount</th>
                <th>Total Price</th>
                <th>Approve</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td><img src="{{asset('images/'.$product->p_image)}}" alt="Product Picture" width="45" height="40"></td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->p_name}}</td>
                    <td>{{$product->p_category}}</td>
                    <td>{{$product->p_description}}</td>
                    <td>{{$product->p_qty}}</td>
                    <td>{{$product->p_sold}}</td>
                    <td>{{$product->fix_cost}}</td>
                    <td>{{$product->var_cost}}</td>
                    <td>{{$product->adm_cost}}</td>
                    <td>{{$product->extra_price}}</td> 
                    <td>{{$product->discount}}</td>
                    <td>{{$product->total_price}}</td>
                    <td>{{$product->p_approve}}</td>
                    <td><a href="/sellerProductEdit/{{$product->id}}/{{$product->p_name}}" class="btn btn-info">Edit</a></td>
                    <td><a href="/sellerProductDelete/{{$product->id}}/{{$product->p_name}}" class="btn btn-Danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
</section>
@endsection