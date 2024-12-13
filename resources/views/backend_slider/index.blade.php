@extends('backend_layouts.app')

@section('title', 'Data Slider')
@section('content')
    <div class="container">
        <a href="/slider/create" class="btn btn-info btn-sm mb-4"><i class="fas fa-solid fa-plus"></i> Tambah Data</a>
        <div class="table-responsive">
            <table id="tampil_rekap"
                class="table table-sm table-bordered table-striped table-vcenter nowrap table-hover js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                </tbody>
            </table>
        </div>
    </div>
@endsection
