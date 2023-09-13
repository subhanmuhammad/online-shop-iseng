@extends('utils.layouts.main')
@section('content')
    <!-- Content wrapper -->
    <form action="/store_data_jualan" method="POST" enctype="multipart/form-data">
        <div class="content-wrapper">
            @csrf
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4">Form Imput Data</h4>
                @error('error')
                    <small>{{ $messagte }}</small>
                @enderror
                <button class="btn btn-warning mb-2">Simpan</button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <h5 class="card-header">Default</h5>
                            <div class="card-body">
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="product_name" placeholder="John Doe"
                                        aria-describedby="defaultFormControlHelp" />
                                    <label for="defaultFormControlInput" class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="price" placeholder="Harga"
                                        aria-describedby="defaultFormControlHelp" />
                                    <label for="defaultFormControlInput" class="form-label">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option disabledSelect>Pilih Kategori</option>
                                        <option value="1">CATS</option>
                                        <option value="2">SNIKERS</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <h5 class="card-header mb-2">Deskripsi</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Stok</label>
                                    <input class="form-control form-control-sm" name="stok">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Gambar</label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="picture"
                                        type="file">
                                </div>
                                <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                                <div class="form-floating">
                                    <textarea class="form-control" rows="3" name="desc"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- / Content -->
@endsection
