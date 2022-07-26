@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">		
		
    <form action="{{route('sellerGiveVoucher')}}" method="post">
        <!-- {{csrf_field()}} -->
        @csrf
        @if(session()->has('exist'))
            <div class="alert alert-danger">
                {{ session()->get('exist') }}
            </div>
        @endif

        <div class="container">
            <div class="row ">
            @if(session()->has('date'))
                <div class="alert alert-danger">
                    {{ session()->get('date') }}
                </div>
            @endif

                <input type="hidden" class="form-control rounded-left" name="o_id" value="{{$oid->id}}">
                <div class="form-group">
                <label for="c_id">Customer ID</label>
                <input type="text" class="form-control rounded-left" name="c_id" value="{{$oid->c_id}}" placeholder="ID" readonly>
                </div>

                <div class="form-group">
                <label for="c_id">Select Voucher</label>
                <select class="form-control" name="vc" required>
                    <option></option>
                    @foreach ($vc as $v)
                        <option value="{{ $v->id }}"> 
                            {{ $v->sv_code }} -> ${{$v->sv_price}} 
                        </option>
                    @endforeach    
                </select>
                </div>

                <label for="starts">Starts</label>
                <div class="form-group">
                <input type="date" class="form-control rounded-left" name="starts" value="{{old('starts')}}" placeholder="Starts" required>
                </div>

                <label for="starts">Expires</label>
                <div class="form-group">
                <input type="date" class="form-control rounded-left" name="expires" value="{{old('expires')}}" placeholder="Expires" required>
                </div>
                @error('expires')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Give Voucher?</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

