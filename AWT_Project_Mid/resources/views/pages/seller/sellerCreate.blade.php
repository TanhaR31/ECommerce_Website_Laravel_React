@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">		
		
    <form action="{{route('sellerCreate')}}" method="post"  enctype="multipart/form-data">
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
                <br>Seller ID<input type="text" class="form-control rounded-left" name="id" value="{{$data}}" placeholder="ID" readonly>
                </div>
                
                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="s_name" value="{{old('s_name')}}" placeholder="Name" required>
                </div>
                @error('s_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="s_phone" value="{{old('s_phone')}}" placeholder="Phone" required>
                </div>
                @error('s_phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <input type="email" class="form-control rounded-left" name="s_email" value="{{old('s_email')}}" placeholder="Email">
                </div>
                @error('s_email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group d-flex">
                    <input type="password" class="form-control rounded-left" name="s_password" placeholder="Password" required>
                </div>
                @error('s_password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group d-flex">
                    <input type="password" class="form-control rounded-left" name="s_password_confirm" placeholder="Confirm Password" required>
                </div>
                @error('s_password_confirm')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="s_address" value="{{old('s_address')}}" placeholder="Address" required>
                </div>
                @error('s_address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <input type="file" class="form-control" name="image" value="{{old('image')}}">
                </div>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Confirm Registration</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

