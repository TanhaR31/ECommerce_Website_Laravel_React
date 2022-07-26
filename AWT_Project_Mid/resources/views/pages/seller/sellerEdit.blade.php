@extends('layouts.app')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">

<form action="{{route('sellerEdit')}}" method="post" enctype="multipart/form-data">
    <!-- {{csrf_field()}} -->
    @csrf
    <div class="container">
        <div class="row ">
            <div class="form-group">
                <img src="{{asset('images/'.$seller->image)}}" alt="Seller Profile Picture" width="500" height="500">
            </div>
            <div class="form-group">
            <br><input type="text" class="form-control rounded-left" name="id" value="{{$seller->id}}" placeholder="ID" readonly>
            </div>
            
            <div class="form-group">
            <input type="text" class="form-control rounded-left" name="s_name" value="{{$seller->s_name}}" placeholder="Name" required>
            </div>
            @error('s_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
            <input type="text" class="form-control rounded-left" name="s_phone" value="{{$seller->s_phone}}" placeholder="Phone" required>
            </div>
            @error('s_phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
            <input type="email" class="form-control rounded-left" name="s_email" value="{{$seller->s_email}}" placeholder="Email">
            </div>
            @error('s_email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group">
            <input type="text" class="form-control rounded-left" name="s_address" value="{{$seller->s_address}}" placeholder="Address" required>
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
                <button type="submit" class="btn btn-success rounded submit p-3 px-5">Done Editing?</button>
            </div>
        </form>
        </div>
    </div>

			</div>
		</div>
@endsection

