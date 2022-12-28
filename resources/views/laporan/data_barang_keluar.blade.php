@extends('layout')

@section('content')
<h3>LAPORAN BARANG KELUAR</h3>
<br>

<div class="page-content">
    <br>
    <br>
    <div class="chat-footer d-flex" style="">
        <form action="/cetak_brg_keluar" class="search-form flex-grow-1 me-2" style="width: 10%; margin-left:1.3%;">
            <div class="input-group" style="justify-content: center; align-items: center;">
                <div class="d-none d-md-block" style="">
                    <p style="margin-top: 20%;">Kode Barang :</p>
                </div>
                <input style="margin-left: 1%; margin-right:2%;" type="text" class="form-control" id="search"
                    name="search" placeholder="Kode Barang">
                <div style="margin-right: 1%;">
                    <button type="submit" class="btn btn-primary btn-icon">
                        Buat Laporan
                    </button>
                </div>
            </div>
    </div>
    </form>
</div>
<p>Jika ingin print semua data masukan perintah <span style="color: darkgoldenrod;">All</span> </p>
</div>

<!-- core:js -->
<script src="../../../assets/vendors/core/core.js"></script>
<!-- endinject -->

<!-- inject:js -->
<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
<script src="../../../assets/js/template.js"></script>
<!-- endinject -->

@endsection