@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">		
		
    <form action="{{route('sellerProductCreate')}}" method="post"  enctype="multipart/form-data">
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
                <br>Product ID<input type="text" class="form-control rounded-left" name="id" value="{{$data}}" placeholder="ID" readonly>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="p_name" value="{{old('p_name')}}" placeholder="Product Name" required>
                </div>
                @error('p_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <select class="form-control" name="ct_id">
                    <option>Select Category</option>
                    @foreach ($ctg as $ct)
                        <option value="{{ $ct->id }}"> 
                            {{ $ct->p_category }} 
                        </option>
                    @endforeach    
                </select>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="p_description" value="{{old('p_description')}}" placeholder="Description">
                </div>
                @error('p_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group d-flex">
                    <input type="number" class="form-control rounded-left" name="p_qty" value="{{old('p_qty')}}" placeholder="Quantity" required>
                </div>
                @error('p_qty')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group d-flex">
                    <input type="number" class="form-control rounded-left" name="fix_cost" value="{{old('fix_cost')}}" placeholder="Fixed Cost" required>
                </div>
                @error('fix_cost')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <div class="form-group">
                <input type="number" class="form-control rounded-left" name="var_cost" value="{{old('var_cost')}}" placeholder="Variable Cost" required>
                </div>
                @error('var_cost')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <input type="number" class="form-control rounded-left" name="extra_price" value="{{old('extra_price')}}" placeholder="Extra Price" required>
                </div>
                @error('extra_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <input type="number" class="form-control rounded-left" name="discount" value="{{old('discount')}}" placeholder="Discount" required>
                </div>
                @error('discount')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                <input type="file" class="form-control" name="p_image" value="{{old('p_image')}}">
                </div>
                @error('p_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Confirm Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

