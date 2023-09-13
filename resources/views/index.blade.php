@extends('utils.layout-landing-page')
@section('content_landing_page')
    {{-- carousel --}}
    <div class="row">
        <div class="col-md-2 bg-gray">
            <div class="container my-4 shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-warning">
                        <i class="fa-solid fa-list"></i>
                        Ketegori
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-chevron-right">
                        </i>
                        <a href="{{ route('cats') }}" style="text-decoration: none" style="font-color:black"> Cats</a>
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="" style="text-decoration: none" style="font-color:black"> sniker</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="container my-4">
                <div class="row">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/storage/picture/carousel/2023-07-01Microsite-Vans-des2018.webp') }}"
                                    style="height: 400px" class="d-block w-100" alt="...">
                                <div class="carousel-caption ">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/asset/image/2.png') }}" style="height: 400px" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption ">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/asset/image/3.png') }}" style="height: 400px" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption ">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- card --}}
            <div class="container  bg-light rounded-4 mb-4 ">
                <div class="row justify-content-center">
                    @foreach ($product as $item)
                        <div class="col-sm-3 d-flex ">
                            <div class="card shadow rounded  mt-2" style="width: 18rem;">
                                <img src="{{ asset('storage/picture/product/' . $item->picture) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->product_name }}</h5>
                                    <span class="card-text">{{ $item->desc }}</span>
                                    <p class="card-text">Stok : {{ $item->stok }}</p>
                                    <span class="card-text mt-0">{{ $item->categories->categories_name }}</span>
                                </div>
                                <hr>
                                <a href="{{ route('lihat_detail', $item->id) }}" class="btn btn-danger mb-2 mx-3">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
