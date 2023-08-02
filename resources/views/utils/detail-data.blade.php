@extends('utils.layout-landing-page')
@section('content_landing_page')
    <div class="container  bg-light rounded-4 mb-4 ">
        <div class="row ">
            <div class="col-md-6">
                <img src="{{ asset('storage/picture/product/' . $product->picture) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->desc }}</p>
            </div>
        </div>
    </div>
@endsection

{{-- 
<div class="card shadow rounded  mt-2" style="width: 18rem;">

    <div class="card-body">
        
    </div>
    <hr>
    <a href="" class="btn btn-danger mb-2 mx-3">Lihat
        Detail</a>
</div> --}}
