@extends('layouts.app')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
        <br><h3>Seller Id : @if(Session::get('seller')) {{Session::get('seller')}} 
            
        @endif 
        
        </h3>

<form action="" method="">
    <!-- {{csrf_field()}} -->
    @csrf
    <div class="container">
        <div class="row ">
            <div class="form-group">
                <img src="{{asset('images/'.$seller->image)}}" alt="Seller Profile Picture" width="500" height="500">
            </div>
            
            <div class="form-group">
            <input type="text" class="form-control rounded-left" name="s_name" value="Name : {{$seller->s_name}}" placeholder="Name" readonly>
            </div>

            <div class="form-group">
            <input type="text" class="form-control rounded-left" name="s_phone" value="Phone Number : {{$seller->s_phone}}" placeholder="Phone" readonly>
            </div>

            <div class="form-group">
            <input type="email" class="form-control rounded-left" name="s_email" value="Email Address : {{$seller->s_email}}" placeholder="Email" readonly>
            </div>
            
            <div class="form-group">
            <input type="text" class="form-control rounded-left" name="s_address" value="Address : {{$seller->s_address}}" placeholder="Address" readonly>
            </div>

        </div> 
</form>
        </div>
    </div>

			</div>
		</div>
@endsection