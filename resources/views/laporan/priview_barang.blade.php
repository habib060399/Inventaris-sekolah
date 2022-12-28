<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <style>
        @media print {
            .noprint {
                display: none;
            }
        }
    </style>
    <div class="section services">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <h3>DATA BARANG</h3>
                    <div class="page-content">
                        <div class="noprint" style="margin-bottom: 1%;">
                            <button class="noprint" onclick="window.print();">print</button>
                            <a href="/laporan_barang" class="noprint btn btn-md btn-primary">kembali</a>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card-body"> --}}
                                    <div class="table-responsive">
                                        <table id="" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 3%;">No</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>satuan</th>
                                                    <th>Harga Beli</th>
                                                    <th style="width: 7%; ">Stock</th>
                                                    <th>Keterangan</th>
                                                    <th>Status</th>
                                                    <th>Merek</th>
                                                    <th>Tahun Pembuatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no = 1
                                                @endphp
                                                @foreach ($barang as $b)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $b->kode }}</td>
                                                    <td>{{ $b->nmBrg}}</td>
                                                    <td>{{ $b->satuan }}</td>
                                                    <td>{{ $b->hrgBeli }}</td>
                                                    <td>{{ $b->stock }}</td>
                                                    <td>{{ $b->ket }}</td>
                                                    <td>{{ $b->status }}</td>
                                                    <td>{{ $b->merk }}</td>
                                                    <td>{{ $b->tahun_pembuatan }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{--
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


{{-- @endsection --}}