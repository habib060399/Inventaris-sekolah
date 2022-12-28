@extends('layout')

@section('content')
<div class="row">
    <h3>HALAMAN TRANSAKSI BARANG KELUAR</h3>
    <br>
    <br>

    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Barang Keluar</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 2%;">No</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Peminjam</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang_keluar as $d)                                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->nmBrg }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->tgl_pinjam }}</td>
                                        <td>{{ $d->tgl_kembali }}</td>
                                        <td>{{ $d->jml_barang}}</td>
                                        <td>{{ $d->keterangan }}</td>                                        
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