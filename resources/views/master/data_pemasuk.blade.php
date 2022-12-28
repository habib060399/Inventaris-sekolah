@extends('layout')

@section('content')
<div class="row">
    <h3>HALAMAN DATA PEMASUK</h3>


    <div class="page-content">
        <div class="box-act" style="margin-top: 8%; margin-bottom: 4%;">
            <a href="/tambah_data_pemasuk" class="btn btn-lg btn-primary">Tambah Data Pemasok</a>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Pemasok</h6>
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
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Kota</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1
                                    @endphp
                                    @foreach ($pemasuk as $p)
                                    {{-- @php
                                    $id = $p->id
                                    @endphp --}}
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->telp }}</td>
                                        <td>{{ $p->kota }}</td>
                                        <td>{{ $p->tgl_masuk }}</td>
                                        <td>
                                            <a href="/edit_pemasuk/{{$p->kode}}" class="btn-sm btn-group-sm" role="button">Edit</a>
                                            <a href="/hapus_pemasok/{{$p->id}}" class="btn-sm btn-group-sm" role="button" onclick="return confirm('Apakah anda yakin ingin mengapus data ?')">Delete</a>
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