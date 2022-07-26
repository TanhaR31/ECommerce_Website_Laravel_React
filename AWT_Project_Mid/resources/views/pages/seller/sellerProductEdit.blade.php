@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">		
		
    <form action="{{route('sellerProductEdit')}}" method="post"  enctype="multipart/form-data">
        <!-- {{csrf_field()}} -->
        @csrf
        <div class="container">
            <div class="row ">
                <div class="form-group">
                <img src="{{asset('images/'.$product->p_image)}}" alt="Seller Profile Picture" width="500" height="500">
                </div>

                <div class="form-group">
                <br>Product ID<input type="text" class="form-control rounded-left" name="id" value="{{$product->id}}" placeholder="ID" readonly>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="p_name" value="Product Name : {{$product->p_name}}" placeholder="Product Name" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="p_category_old" value="Previous Product Category : {{$product->p_category}}" placeholder="Product Category" readonly>
                </div>

                <div class="form-group">
                <select class="form-control" name="ct_id" value={{$product->p_category}}>>
                    <option>Select Category</option>
                    @foreach ($ctg as $ct)
                        <option value="{{ $ct->id }}"> 
                            {{ $ct->p_category }} 
                        </option>
                    @endforeach    
                </select>
                </div>

                <div class="form-group">
                <input type="text" class="form-control rounded-left" name="p_description" value="Description : {{$product->p_description}}" placeholder="Description">
                </div>

                <div class="form-group">
                Quantity <input type="number" class="form-control rounded-left" name="p_qty" value="{{$product->p_qty}}" placeholder="Quantity" required>
                </div>

                <div class="form-group">
                Fixed Cost<input type="number" class="form-control rounded-left" name="fix_cost" value="{{$product->fix_cost}}" placeholder="Fixed Cost" readonly>
                </div>
                
                <div class="form-group">
                Variable Cost<input type="number" class="form-control rounded-left" name="var_cost" value="{{$product->var_cost}}" placeholder="Variable Cost" required>
                </div>

                <div class="form-group">
                Extra Price<input type="number" class="form-control rounded-left" name="extra_price" value="{{$product->extra_price}}" placeholder="Extra Price" required>
                </div>

                <div class="form-group">
                Discount<input type="number" class="form-control rounded-left" name="discount" value="{{$product->discount}}" placeholder="Discount" required>
                </div>

                <div class="form-group">
                <input type="file" class="form-control" name="p_image" value="{{old('p_image')}}">
                </div>
                @error('p_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Edit Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

