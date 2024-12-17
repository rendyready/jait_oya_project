@extends('backend_layouts.app')
@section('title', 'Data Slider')
@section('content')

    <div class="container">
        <a href="/slider/create" class="btn btn-info btn-sm mb-4"><i class="fas fa-solid fa-plus"></i> Tambah Data</a>
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
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal" id="edit_slider" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center text-dark" id="slider_title">Edit Slider</h5>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="block-content">
                        <input type="hidden" class="form-control form-control-sm" id="id_slider" name="id_slider">

                        <label>Title Slider</label>
                        <input type="text" class="form-control form-control-sm" id="modal_title" name="modal_keterangan">

                        <label class="mt-2">Deskripsi Slider</label>
                        <textarea class="form-control form-control-sm" id="modal_deskripsi" name="slider_deskripsi"></textarea>

                        <div class="d-flex align-items-center mt-2">
                            <label class="mb-0 me-2">Status : </label>&nbsp;&nbsp;
                            <input type="radio" class="status_slider" name="status_slider" value="1">&nbsp;&nbsp;
                            <span class="mb-0">Aktif</span>&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="status_slider" name="status_slider" value="0">&nbsp;&nbsp;
                            <span class="mb-0">Non Aktif</span>
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
    <!-- END Select2 in a modal -->

    <!-- modal hapus -->
    <div class="modal" id="delete_slider" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center text-dark" id="slider_title">Konfirmasi Hapus Slider</h5>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body text-center">
                    <div class="block-content">
                        <input type="hidden" class="form-control form-control-sm" id="id_slider_delete" name="id_slider">
                        <p>Apakah Anda yakin ingin menghapus slider ini?</p>
                        {{-- <p><strong id="slider_title"></strong></p> --}}
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
                    url: '{{ route('slider.show') }}',
                    "type": "GET",
                }
            });

            $("#show_table").on('click', '#button_edit', function() {
                var id = $(this).attr('value');
                $.ajax({
                    url: '{{ route('slider.show_detail', ':id') }}'.replace(':id', id),
                    type: "GET",
                    dataType: 'json',
                    destroy: true,
                    success: function(data) {
                        var slider = data[0];
                        $('#id_slider').val(slider.id);
                        $('#modal_title').val(slider.slider_title);
                        $('#modal_deskripsi').val(slider.slider_description);

                        var status = slider.slider_status;
                        if (status == 1) {
                            $('input[name="status_slider"][value="1"]').prop('checked', true);
                        } else if (status == 0) {
                            $('input[name="status_slider"][value="0"]').prop('checked', true);
                        }

                        console.log(status);

                    },
                });
                $("#edit_slider").modal('show');
            });

            $("#show_table").on('click', '#button_delete', function() {
                var id = $(this).attr('value');
                console.log(id);

                $('#id_slider_delete').val(id);
                $("#delete_slider").modal('show');
            });

            $("#simpan_modal_edit").on('click', function(e) {
                e.preventDefault();
                var id = $('#id_slider').val();
                var title = $('#modal_title').val();
                var deskripsi = $('#modal_deskripsi').val();
                var status = $('.status_slider').val();

                var data = {
                    id: id,
                    title: title,
                    deskripsi: deskripsi,
                    status: status,
                    _token: '{{ csrf_token() }}', // CSRF Token
                };

                //simpan edit
                $.ajax({
                    url: "{{ route('slider.edit') }}",
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
                $("#edit_slider").modal('hide');
            });

            $("#yes_delete").on('click', function() {
                var id = $('#id_slider_delete').val();
                var data = {
                    _token: '{{ csrf_token() }}', // CSRF Token
                };

                $.ajax({
                    url: '{{ route('slider.delete', ':id') }}'.replace(':id',
                        id),
                    data: data,
                    type: "POST",
                    success: function(response) {
                        $("#delete_slider").modal('hide');
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

        });
    </script>
@endsection
