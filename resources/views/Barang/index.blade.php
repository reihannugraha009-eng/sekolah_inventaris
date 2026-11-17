@extends('layouts.admin')

@section('title', 'halaman Barang')

@push('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Daftar Barang</h1>
        <p class="mb-4">Berikut daftar barang</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Barang</h6>
                <a href="{{ route('Barang.create') }}">
                    <i class="fa fa-plus"></i> Tambah Data Barang
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Kondisi</th>
                                <th>Lokasi</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $index => $barang)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->nama_barang }}</td>

                                    <td>
                                        @if ($barang->kategori == 'Elektronik')
                                            <span class="badge badge-success">Elektronik</span>
                                        @elseif ($barang->kategori == 'Furniture')
                                            <span class="badge badge-warning">Furniture</span>
                                        @else
                                            <span class="badge badge-danger">Alat Tulis</span>
                                        @endif
                                    </td>

                                    <td>{{ $barang->jumlah }}</td>

                                    <td>
                                        @if ($barang->kondisi == 'Baik')
                                            <span class="badge badge-success">Baik</span>
                                        @elseif ($barang->kondisi == 'Rusak Ringgan')
                                            <span class="badge badge-warning">Rusak Ringgan</span>
                                        @else
                                            <span class="badge badge-danger">Amoh</span>
                                        @endif
                                    </td>

                                    <td>{{ $barang->lokasi }}</td>
                                    <td>{{ $barang->tanggal_masuk ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
@endsection