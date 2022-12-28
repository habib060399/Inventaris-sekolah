@extends('layout')

@section('content')
<div class="row">
    <h3>HALAMAN TRANSAKSI PEMBELIAN</h3>


    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Pembelian</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 2%">No</th>
                                        <th>No Nota</th>
                                        <th>Tanggal</th>
                                        <th>Nama Barang</th>
                                        <th>Kode Pemasok</th>
                                        <th>Kode Barang</th>
                                        <th>Potongan Harga</th>
                                        <th>Harga Beli</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($nota as $n)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $n->noNota }}</td>
                                        <td>{{ $n->tgl }}</td>
                                        <td>{{ $n->nmBrg }}</td>
                                        <td>{{ $n->kdpemasok }}</td>
                                        <td>{{ $n->kdbarang }}</td>
                                        <td>{{ $n->potongan }}</td>
                                        <td>{{ $n->jml }}</td>
                                        <td>{{ $n->ket }}</td>
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