@php
$level = request()->session()->get('level');         
@endphp
<!-- NAVBAR SECTION -->
<div class="navbar-main">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="navbar-brand" >
        <a href="index.html">
          <img src="/images/logosekolah.png" alt="" height="60" width="60" />
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <div>
          <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" href="/admin">HOME</a>
            {{--
          </li> --}}
          {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            HOME
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.html">Home 1</a>
            <a class="dropdown-item" href="index-2.html">Home 2</a>
            <a class="dropdown-item" href="index-3.html">Home 3</a>
            <a class="dropdown-item" href="index-4.html">Home 4 - Onepage</a>
          </div> --}}
          </li>
        </div>
        <div @if($level === '2') {{'hidden'}} @else {{" "}} @endif>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              MASTER
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/data_barang">Data Barang</a>
              <a class="dropdown-item" href="/data_pemasuk">Data Pemasok</a>
              <a class="dropdown-item" href="/view_register">Data Peminjam</a>
            </div>
          </li>
        </div>
          <div @if($level === '2') {{'hidden'}} @else {{" "}} @endif>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              TRANSAKSI
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/transaksi_pembelian">Data Pembelian</a>
              <a class="dropdown-item" href="/transaksi_barang_keluar">Data Barang Keluar</a>
            </div>
          </li>
        </div>            
          <div @if($level === '2') {{'hidden'}} @else {{" "}} @endif>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              STOK
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/histori">Data History Transaksi</a>
            </div>
          </li>
        </div>
        <div >
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              LAPORAN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/laporan_barang">Laporan Data Barang</a>
              <a class="dropdown-item" href="/laporan_pembelian">Laporan Data Pembelian</a>
              <a class="dropdown-item" href="/laporan_brg_keluar">Laporan Data Barang Keluar</a>
            </div>
          </li>
        </div>
        <div @if($level === '2') {{'hidden'}} @else {{" "}} @endif>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              ADMIN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/register">Register</a>
            </div>
          </li>
        </div>
        <div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              SISTEM
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
        </div>
        
        </ul>
      </div>
    </nav> <!-- -->

  </div>
</div>

</div>