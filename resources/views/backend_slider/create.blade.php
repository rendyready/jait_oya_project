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
                        <form id="formAction" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Judul"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" rows="5" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <label class="mb-0 me-2">Status : </label>&nbsp;&nbsp;
                                <input type="radio" class="status_slider" name="status_slider" value="1">&nbsp;&nbsp;
                                <span class="mb-0">Aktif</span>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="status_slider" name="status_slider" value="0">&nbsp;&nbsp;
                                <span class="mb-0">Non Aktif</span>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="simpan" class="btn btn-success btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/lte/plugins/jquery/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#formAction').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('slider.insert') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        function_js.helpers("jq-notify", {
                            align: "right",
                            from: "top",
                            type: "success",
                            icon: "fa fa-info me-5",
                            message: 'Berhasil menambahkan data',
                        });
                        $('#formAction')[0].reset();
                    },
                    error: function() {
                        alert("Tidak dapat menyimpan data!");
                    }
                });
            });
        });
    </script>

@endsection
