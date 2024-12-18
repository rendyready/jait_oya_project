@extends('backend_layouts.app')
@section('title', 'Data Produk')
@section('content')

    <div class="container">
        <a id="add_produk" class="btn btn-info btn-sm mb-4"><i class="fas fa-solid fa-plus"></i> Tambah Data</a>
        <div class="table-responsive">
            <table id="show_table"
                class="table table-sm table-bordered table-striped table-vcenter nowrap table-hover js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Banner</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal Insert -->
    <div class="modal" id="add_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formAction" enctype="multipart/form-data">

                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-center text-dark" id="produk_title">Tambah Produk</h5>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                            aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="block-content">
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
                                <input type="radio" class="status_produk" name="status_produk" value="1">&nbsp;&nbsp;
                                <span class="mb-0">Aktif</span>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="status_produk" name="status_produk" value="0">&nbsp;&nbsp;
                                <span class="mb-0">Non Aktif</span>
                            </div>
                            <div class="form-group mt-3">
                                <input type="checkbox" id="is_product_info" name="produk_info" value="1">
                                <label for="is_product_info" class="ms-2">Jadikan Banner?</label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="simpan" class="btn btn-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center text-dark" id="produk_title">Edit Produk</h5>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="block-content">
                        <input type="hidden" class="form-control form-control-sm" id="id_produk" name="id_produk">

                        <label>Title Produk</label>
                        <input type="text" class="form-control form-control-sm" id="modal_title"
                            name="modal_keterangan">

                        <label class="mt-2">Deskripsi Produk</label>
                        <textarea class="form-control form-control-sm" id="modal_deskripsi" name="produk_deskripsi"></textarea>

                        <div class="d-flex align-items-center mt-2">
                            <label class="mb-0 me-2">Status : </label>&nbsp;&nbsp;
                            <input type="radio" class="status_produk" name="status_produk" value="1">&nbsp;&nbsp;
                            <span class="mb-0">Aktif</span>&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="status_produk" name="status_produk" value="0">&nbsp;&nbsp;
                            <span class="mb-0">Non Aktif</span>
                        </div>
                        <div class="form-group mt-3">
                            <input type="checkbox" id="is_product_info" name="produk_info" value="1">
                            <label for="is_product_info" class="ms-2">Jadikan Banner?</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" id="simpan_modal_edit">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal hapus -->
    <div class="modal" id="delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center text-dark" id="produk_title">Konfirmasi Hapus Produk</h5>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body text-center">
                    <div class="block-content">
                        <input type="hidden" class="form-control form-control-sm" id="id_produk_delete"
                            name="id_produk">
                        <p>Apakah Anda yakin ingin menghapus produk ini?</p>
                        {{-- <p><strong id="produk_title"></strong></p> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-danger" id="yes_delete">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/lte/plugins/jquery/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#show_table').DataTable({
                "destroy": true,
                "orderCellsTop": true,
                "processing": true,
                "autoWidth": true,
                "buttons": [],
                "lengthMenu": [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                "pageLength": 25,
                "columnDefs": [{
                    "className": "text-center", // Tambahkan kelas untuk kolom tertentu
                    "targets": '_all' // Kolom 0 dan 3 akan ditengah
                }],
                "ajax": {
                    url: '{{ route('produk.show') }}',
                    "type": "GET",
                }
            });

            $("#show_table").on('click', '#button_edit', function() {
                var id = $(this).attr('value');
                $.ajax({
                    url: '{{ route('produk.show_detail', ':id') }}'.replace(':id', id),
                    type: "GET",
                    dataType: 'json',
                    destroy: true,
                    success: function(data) {
                        var produk = data[0];
                        $('#id_produk').val(produk.id);
                        $('#modal_title').val(produk.produk_title);
                        $('#modal_deskripsi').val(produk.produk_description);

                        var status = produk.produk_status;
                        if (status == 1) {
                            $('input[name="status_produk"][value="1"]').prop('checked', true);
                        } else if (status == 0) {
                            $('input[name="status_produk"][value="0"]').prop('checked', true);
                        }

                        var banner = produk.produk_information;
                        $('input[name="produk_info"]').prop('checked', false); // Reset
                        if (banner == 1) {
                            $('input[name="produk_info"]').prop('checked', true);
                        }

                        console.log(status);

                    },
                });
                $("#edit_modal").modal('show');
            });

            $("#show_table").on('click', '#button_delete', function() {
                var id = $(this).attr('value');
                console.log(id);

                $('#id_produk_delete').val(id);
                $("#delete_modal").modal('show');
            });

            $("#simpan_modal_edit").on('click', function(e) {
                e.preventDefault();
                var id = $('#id_produk').val();
                var title = $('#modal_title').val();
                var deskripsi = $('#modal_deskripsi').val();
                var status = $('.status_produk').val();
                var banner = $('#produk_info').val();

                var data = {
                    id: id,
                    title: title,
                    deskripsi: deskripsi,
                    status: status,
                    banner: banner,
                    _token: '{{ csrf_token() }}', // CSRF Token
                };

                //simpan edit
                $.ajax({
                    url: "{{ route('produk.edit') }}",
                    type: "POST",
                    data: data,
                    success: function(data) {
                        // console.log(data);
                        function_js.helpers("jq-notify", {
                            align: "right",
                            from: "top",
                            type: "success",
                            icon: "fa fa-info me-5",
                            message: 'Berhasil edit data',
                        });
                        table.ajax.reload();
                    }
                });
                $("#edit_modal").modal('hide');
            });

            $("#yes_delete").on('click', function() {
                var id = $('#id_produk_delete').val();
                var data = {
                    _token: '{{ csrf_token() }}', // CSRF Token
                };

                $.ajax({
                    url: '{{ route('produk.delete', ':id') }}'.replace(':id',
                        id),
                    data: data,
                    type: "POST",
                    success: function(response) {
                        $("#delete_produk").modal('hide');
                        function_js.helpers("jq-notify", {
                            align: "right",
                            from: "top",
                            type: "success",
                            icon: "fa fa-info me-5",
                            message: 'Data Berhasil dihapus',
                        });
                        table.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error: " + error);
                    }
                });
            });

            $("#add_produk").on('click', function() {
                $("#add_modal").modal('show');
            });

            $('#formAction').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('produk.insert') }}",
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
                        $("#add_modal").modal('hide');
                        table.ajax.reload();
                    },
                    error: function() {
                        alert("Tidak dapat menyimpan data!");
                    }
                });
            });

        });
    </script>
@endsection
