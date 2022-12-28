@extends('layout')

@section('content')
<div class="row">
    <h3>HALAMAN DATA PEMINJAM</h3>


    <div class="page-content">
        {{-- <div class="box-act" style="margin-top: 8%; margin-bottom: 4%;">
            <a href="/tambah_barang" class="btn btn-lg btn-primary">Tambah Barang</a>
        </div> --}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Peminjam</h6>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 3%;">No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telp</th>
                                        <th>Email</th>
                                        <th>Kota</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1
                                    @endphp
                                    @foreach ($user as $v)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $v->kode}}</td>
                                        <td>{{ $v->nama}}</td>
                                        <td>{{ $v->alamat}}</td>
                                        <td>{{ $v->telp}}</td>
                                        <td>{{ $v->email}}</td>
                                        <td>{{ $v->kota}}</td>
                                        <td>{{ $v->jabatan}}</td>

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