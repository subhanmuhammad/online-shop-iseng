@extends('utils.layout-landing-page')
@section('content_landing_page')
    <div class="container  bg-light rounded-4 mb-4 ">
        <div class="row justify-content-center">
            @foreach ($produk as $item)
                <div class="col-sm-3 d-flex ">
                    <div class="card shadow rounded  mt-2" style="width: 18rem;">
                        <img src="{{ asset('storage/picture/product/' . $item->picture) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->product_name }}</h5>
                            <p class="card-text">{{ $item->desc }}</p>
                            <p class="card-text">{{ $item->categories->categories_name }}</p>
                        </div>
                        <hr>
                        <a href="{{ route('lihat_detail', $item->id) }}" class="btn btn-danger mb-2 mx-3">Lihat
                            Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
