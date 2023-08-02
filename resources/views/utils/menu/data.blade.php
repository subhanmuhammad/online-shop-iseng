@extends('utils.layout-landing-page')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <!-- Basic Bootstrap Table -->
                        <a class="btn btn-outline-primary mb-2 " href="{{ route('tambah_data_carousel') }}"
                            style="align-items: flex-end"><i class="fa-thin fa-plus"></i>Tambah
                            Data Carosel</a>
                        <div class="card">
                            <h5 class="card-header">Table Carousel</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($carousel as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/picture/carousel/' . $item->picture) }}"
                                                        width="100" alt="">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <form action="/lihat/" class="d-inline">
                                                        <div class=" btn-group">
                                                            <a href="" class=" btn btn-warning btn-sm ">
                                                                <i class="fa-regular fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </form>
                                                    <div class=" btn-group">
                                                        <a href="" class=" btn btn-primary btn-sm">
                                                            <i class="fa-regular fas fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                    <form class="d-inline" action="{{ route('delete_data', $item->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah anda ingin menghapus data.?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa-regular fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <!-- Basic Bootstrap Table -->
                        <a class="btn btn-outline-success mb-2 " href="{{ route('tambah_data_jualan') }}"
                            style="align-items: flex-end"><i class="fa-thin fa-plus"></i>Tambah
                            Data Jualan</a>
                        <div class="card">
                            <h5 class="card-header">Table Jualan</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($product as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/picture/product/' . $item->picture) }}"
                                                        width="100" height="50" alt="">
                                                </td>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->desc }}</td>
                                                <td>
                                                    <form action="/lihat/" class="d-inline">
                                                        <div class=" btn-group">
                                                            <a href="" class=" btn btn-warning btn-sm ">
                                                                <i class="fa-regular fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </form>
                                                    <div class=" btn-group">
                                                        <a href="" class=" btn btn-primary btn-sm">
                                                            <i class="fa-regular fas fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                    <form class="d-inline" action="{{ route('delete_data', $item->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah anda ingin menghapus data.?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa-regular fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
