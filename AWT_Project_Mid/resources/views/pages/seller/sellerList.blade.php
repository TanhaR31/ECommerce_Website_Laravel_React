@extends('layouts.app')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
            <table class="table table-bordered">
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            @foreach($sellers as $seller)
            <tr>
                <td><img src="{{asset('images/'.$seller->image)}}" alt="Seller Profile Picture" width="45" height="40"></td>
                <td>{{$seller->id}}</td>
                <td>{{$seller->s_name}}</td>
                <td>{{$seller->s_phone}}</td>
                <td>{{$seller->s_email}}</td>
                <td>{{$seller->s_address}}</td>
                <!-- <td><a href="/sellerEdit/{{$seller->id}}/{{$seller->s_name}}">Edit</a></td> -->
            </tr>
            @endforeach           
            </table>		
		</div>
    </div>
</section>
@endsection