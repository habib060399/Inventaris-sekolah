@extends('layout')

@section('content')
<div class="row">
    <h3>HALAMAN DATA BARANG</h3>


    <div class="page-content">
        <div class="box-act" style="margin-top: 8%; margin-bottom: 4%;">
            <a href="/tambah_barang" class="btn btn-lg btn-primary">Tambah Barang</a>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Barang</h6>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>satuan</th>
                                        <th>Harga Beli</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1
                                    @endphp
                                    @foreach ($barang as $b)                                 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->kode }}</td>
                                        <td>{{ $b->nmBrg}}</td>
                                        <td>{{ $b->satuan }}</td>
                                        <td>{{ $b->hrgBeli }}</td>
                                        <td>{{ $b->stock }}</td>
                                        <td>
                                            {{-- <a href="{{route('edit.barang', [$id])}}" class="btn-sm btn-group-sm" role="button">Edit</a> --}}
                                            <a href="/edit_barang/{{$b->kode}}" class="btn-sm btn-group-sm" role="button">Edit</a>
                                            {{-- <button onclick="window.location.href = url+'/'+@php $id @endphp" >Edit</button> --}}
                                            <a href="/hapus/{{$b->kode}}" class="btn-sm btn-group-sm" role="button" onclick="return confirm('Apakah anda yakin ingin mengapus data ?')">Delete</a>
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

    <!-- core:js -->
    <script src="../../../assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
    <script src="../../../assets/js/template.js"></script>
    <!-- endinject -->
</div>
@endsection