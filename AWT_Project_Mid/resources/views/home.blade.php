@extends('layouts.app')
@section('content')
<section class="ftco-section">
    <div class="row justify-content-center">
        <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">

                @foreach($products as $product)

                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Id : {{$product->id}}</p>
                        <div
                        class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                        style="width: 35px; height: 35px;"
                        >
                        <p class="text-white mb-0 small">{{$product->p_qty}}</p>
                        </div>
                    </div>
                    <img
                        src="{{asset('images/'.$product->p_image)}}"
                        class="card-img-top"
                        alt=""
                        width="500" height="500"
                    />
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <p class="small"><a href="#!" class="text-muted">{{$product->p_category}}</a></p>
                        <p class="small text-danger"><s>${{$product->total_price + $product->discount}}</s></p>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">{{$product->p_name}}</h5>
                        <h5 class="text-dark mb-0">${{$product->total_price}}</h5>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">Description : <span class="fw-bold">{{$product->p_description}}</span></p>
                        <div class="ms-auto text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">Sold : <span class="fw-bold">{{$product->p_sold}}</span></p>
                        </div>
                        <!-- <div class="d-flex justify-content-between mb-2">
                        
                        </div> -->
                    </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div> 
</section>
@endsection