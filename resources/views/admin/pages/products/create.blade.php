@extends('layouts.admin')

@section('title', 'Produk')

@section('css')

@endsection

@section('js')
    <script src="{{  asset('stisla/js/upload-image.js') }}"></script>
@endsection

@section('content')
    <x-content>
        <x-slot name="modul">
            @include('admin.partials.back-with-title', ['title' => 'Tambah Produk'])
        </x-slot>
        <div>
            <form action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="post"
                  class="needs-validation" novalidate onkeydown="return event.key !== 'Enter';">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-12 my-1">
                        @include('admin.pages.products.partials.image-upload', ['imageUrl' => asset('assets/images/examples/500x250.png')])
                    </div>
                    <div class="col-md-8 col-sm-12 my-1">
                        <div class="card">
                            <div class="card-header">
                                <h4>Informasi Dasar</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Informasi Dasar</div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                           required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input type="text" class="form-control" name="price"
                                           value="{{ old('price') }}" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Unit</label>
                                    <input type="text" class="form-control" name="unit"
                                           value="{{ old('unit') }}" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="mx-1">
                                <a href="{{ url()->previous() }}" class="btn border bg-white" type="button">Kembali</a>
                            </div>
                            <div class="mx-1">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-content>
@endsection
