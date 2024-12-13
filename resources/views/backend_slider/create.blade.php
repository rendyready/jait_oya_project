@extends('backend_layouts.app')

@section('title', 'Data Slider')
@section('content')
    <div class="container">
        <a href="/slider" class="d-inline-block mb-3 text-decoration-none">
            <i class="fas fa-arrow-left me-2"></i>
            <span style="font-weight: bold; font-size: 1.1rem; color: #007bff;">Kembali</span>
        </a>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Tambah Data</h5>
                    </div>
                    <div class="card-body">
                        <form id="formAction">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Judul">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" rows="5"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
