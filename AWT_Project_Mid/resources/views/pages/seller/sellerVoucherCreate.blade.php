@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">		
		
    <form action="{{route('sellerVoucherCreate')}}" method="post">
        <!-- {{csrf_field()}} -->
        @csrf
        @if(session()->has('exist'))
            <div class="alert alert-danger">
                {{ session()->get('exist') }}
            </div>
        @endif

        <div class="container">
            <div class="row ">
                <div class="form-group">
                <br>Voucher ID<input type="text" class="form-control rounded-left" name="id" value="{{$data}}" placeholder="ID" readonly>
                </div>
                
                <div class="form-group">
                <input type="number" class="form-control rounded-left" name="sv_price" value="{{old('sv_price')}}" placeholder="Voucher Price" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="sv_code" value="{{old('sv_code')}}" placeholder="Voucher Code" required>
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

