@extends('utils.layouts.main')
@section('content')
    <!-- Content wrapper -->
    <form action="/store_data_carousel" method="POST" enctype="multipart/form-data">
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
                    <div class="col">
                        <div class="card mb-4">
                            <h5 class="card-header">Default</h5>
                            <div class="card-body">
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="carousel_name" placeholder="John Doe"
                                        aria-describedby="defaultFormControlHelp" />
                                    <label for="defaultFormControlInput" class="form-label">Harga</label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="picture"
                                        type="file">
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
