@extends('layout')

@section('content')
<div class="row">
    <h3>HALAMAN TRANSAKSI PEMINJAMAN</h3>


    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <h6 class="card-title">Data Peminjaman</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 2%">No</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Peminjam</th>
                                        <th style="width: 8%;">Tanggal Pinjam</th>
                                        <th style="width: 8%;">Tanggal Kembali</th>
                                        <th style="width: 5%;">Jumlah Pinjam</th>
                                        <th style="width: 10%;">status</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($transaksi as $t)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $t->nmBrg }}</td>
                                        <td>{{ $t->nama }}</td>
                                        <td>{{ $t->tgl_pinjam }}</td>
                                        <td>{{ $t->tgl_kembali }}</td>
                                        <td>{{ $t->jml_barang }}</td>
                                        <td>{{ $t->status }}</td>
                                        <td>
                                            <a class="btn-sm btn-group-sm" href="/proses_terima/{{$t->id}}" @if($t->status ==='pinjaman diterima' || $t->status === 'Proses Pengembalian' || $t->status === 'pinjaman ditolak' || $t->status === 'pengembalian berhasil') {{"hidden"}}@endif>Terima</a>
                                            <a class="btn-sm btn-group-sm" href="/proses_tolak/{{$t->id}}" @if($t->status === 'pinjaman ditolak' || $t->status === 'pinjaman diterima' || $t->status === 'pengembalian berhasil') {{'hidden'}} @endif>Tolak</a><br>
                                            <div style="margin-top: 5%;">
                                            <a class="btn-sm btn-group-sm" href="/pengembalian2/{{$t->id}}" @if($t->status === 'pinjaman ditolak' || $t->status === 'pengembalian berhasil' || $t->status === 'pinjaman diterima') {{'hidden'}} @endif>Kembali</a>
                                            <a class="btn-sm btn-group-sm" href="/hapus_transaksi/{{ $t->id }}">Hapus</a>
                                            </div>                                            
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