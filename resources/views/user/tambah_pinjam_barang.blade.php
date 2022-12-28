@extends('user.layout')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Peminjaman Barang</h4>
      <form action="/proses_pinjam" method="post">
        @csrf
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="mb-2">
          <label for="ageSelect" class="form-label">Barang Yang Mau Dipinjam</label>
          <select class="form-select" name="nmBrg" id="barang">
            <option selected disabled>Pilihan Barang</option>
            @foreach ($barang as $b)
            <option value="{{ $b->nmBrg }}" data-stok="{{ $b->stock }}" data-kode="{{$b->kode}}">{{$b->nmBrg}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Total Barang </label>
          <input id="total_barang" class="form-control" name="total_barang" readonly>
          <input id="kode_barang" class="form-control" name="kode_barang" readonly hidden>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">jumlah barang yang dipinjam </label>
          <input id="jml_pinjam" class="form-control" name="jml_pinjam" type="number">
        </div>
        <div class="mb-3">
          <label for="ageSelect" class="form-label">Tanggal Pinjam</label>
          <div class="input-group date datepicker" id="datePickerExample">
            <input type="text" class="form-control" name="tgl_pinjam">
            <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
          </div>
        </div>
        <div class="mb-3">
          <label for="ageSelect" class="form-label">Tanggal Kembali</label>
          <div class="input-group date datepicker" id="datePickerExample2">
            <input type="text" class="form-control" name="tgl_kembali">
            <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Keterangan</label>
          <input id="keteramgan" class="form-control" name="keterangan" type="text">
        </div>

        <button class="btn btn-primary" type="submit" value="Submit">tambah</button>
      </form>
    </div>
  </div>
</div>

<script>
  $('#barang').on('change', function(){
  // ambil data dari elemen option yang dipilih
  const value = $('#barang option:selected').data('stok');
  const kode = $('#barang option:selected').data('kode');
  console.log(value);  
  console.log(kode);  
  
  // kalkulasi total harga
  // const totalDiscount = (price * discount/100)
  // const total = price - totalDiscount;
  
  // tampilkan data ke element
  $('[name=total_barang]').val(value);
  $('[name=kode_barang]').val(kode);

});

</script>

@endsection