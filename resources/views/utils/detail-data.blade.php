@extends('utils.layout-landing-page')
@section('content_landing_page')
    <div class="container  bg-light rounded-4 mb-4 ">
        <div class="card mt-4">
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/picture/product/' . $product->picture) }}" class="card-img-top"
                            width="100" height=""alt="...">
                    </div>
                    <div class="col-md-6">
                        <h1 class="card-title">{{ $product->product_name }}</h1>
                        <a class="text-dark museo-500" style="font-size:23px;">
                            {{ $product->desc }}
                        </a>
                        {{-- <p class="card-text text-bold">{{ $product->desc }}</p> --}}
                        <div class="row align-items-center museo-900 col-10" style="white-space:nowrap;">
                            <div class="col-8 detail-price">
                                <h1>Rp. {{ number_format($product->price) }} </h1>
                            </div>
                            <div class="col-4 discount-price">
                                <span class="badge text-bg-warning">15% off</span>
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center museo-900 col-10" style="white-space:nowrap;">
                            <div class="col-6 detail-price">
                                <h5>
                                    <span class="badge text-bg-primary">
                                        <i class="fa-solid fa-truck-moving"></i>
                                        Free Ongkir
                                    </span>
                                </h5>
                            </div>
                            <div class="col-3">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>5.0</span>
                            </div>
                        </div>

                        <br>
                        <span>Pilih Ukuran</span>
                        <div class="row align-items-center museo-900 col-10" style="white-space:nowrap;">
                            <div class="col-8 detail-price">
                                <button type="button" class="btn btn-outline-dark">39</button>
                                <button type="button" class="btn btn-outline-dark">40</button>
                                <button type="button" class="btn btn-outline-dark">41</button>
                                <button type="button" class="btn btn-outline-dark">42</button>
                                <button type="button" class="btn btn-outline-dark">43</button>
                                <button type="button" class="btn btn-outline-dark">44</button>
                            </div>
                        </div>
                        <br>
                        <form action="/tambah_keranjang/ {{ $product->id }}" method="post">
                            @csrf
                            <div class="align-items-center col-1" style="white-space:nowrap;">
                                <a>Pilih Jumlah</a><br />
                                <input type="text" name="jumlah_pesanan" class="form-control" required>
                            </div>
                            <br>
                            <div class="row" style="white-space:nowrap;">
                                <div class="col-6">
                                    <button class="btn btn-success mb-2 mx-3">
                                        <i class="fa-solid fa-basket-shopping"></i>
                                        Tambah Ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
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
