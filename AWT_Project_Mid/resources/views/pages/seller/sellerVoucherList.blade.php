@extends('layouts.app')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
            <table class="table table-bordered">
            <tr>
                <th>Voucher Id</th>
                <th>Amount</th>
                <th>Code</th>
                <th>Edit</th>
            </tr>
            @foreach($sellers as $seller)
            <tr>
                <td>{{$seller->id}}</td>
                <td>{{$seller->sv_price}}</td>
                <td>{{$seller->sv_code}}</td>
                <td><a href="/sellerVoucherEdit/{{$seller->id}}" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach           
            </table>		
		</div>
    </div>
</section>
@endsection