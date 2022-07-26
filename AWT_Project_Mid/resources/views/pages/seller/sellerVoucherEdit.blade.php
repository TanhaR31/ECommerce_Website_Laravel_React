@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">		
		
    <form action="{{route('sellerVoucherEdit')}}" method="post">
        <!-- {{csrf_field()}} -->
        @csrf

        <div class="container">
            <div class="row ">
                <div class="form-group">
                <br>Voucher ID<input type="text" class="form-control rounded-left" name="id" value="{{$seller->id}}" placeholder="ID" readonly>
                </div>
                
                <div class="form-group">
                <input type="number" class="form-control rounded-left" name="sv_price" value="{{old('sv_price')}}" placeholder="Voucher Price" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="sv_code" value="{{$seller->sv_code}}" placeholder="Voucher Code" readonly>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Confirm Voucher</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

