@extends('layout')

@section('content')
<h3>LAPORAN PER BARANG</h3>
<br>

<div class="page-content">
    <br>
    <br>
    <div class="chat-footer d-flex" style="">
        <form action="/cetak_barang" class="search-form flex-grow-1 me-2" style="width: 10%; margin-left:1.3%;" id="form">
            <div class="input-group" style="justify-content: center; align-items: center;">
                <div class="d-none d-md-block" style="">
                    <p style="margin-top: 20%;">Kode Barang :</p>
                </div>
                <input style="margin-left: 1%; margin-right:2%;" type="text" class="form-control" id="search"
                    name="search" placeholder="Kode Barang" value="All" required>
                <div style="margin-right: 1%;">
                    <button type="submit" class="btn btn-primary btn-icon">
                        Buat Laporan
                    </button>
                </div>
                <div style="margin-right: 20%;">
                    <button type="button" class="btn btn-primary btn-icon" id="stok" name="stok">
                        History Stock
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<p>Jika ingin print semua data masukan perintah <span style="color: darkgoldenrod;">All</span></p>


<script>  
    document.getElementById('stok'). addEventListener('click', input);

    function input(){
        let data = document.getElementById('search').value;
        
        window.location.href = url+'/'+data;     
        // window.location.href = 'http://127.0.0.1:8000/cetak_stok/' + data;     
        document.getElementById('stok').submit();
        
    }
</script>

<!-- core:js -->
<script src="../../../assets/vendors/core/core.js"></script>
<!-- endinject -->

<!-- inject:js -->
<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
<script src="../../../assets/js/template.js"></script>
<!-- endinject -->

@endsection