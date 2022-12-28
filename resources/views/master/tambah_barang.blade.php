@extends('layout')

@section('content')


<!-- partial -->
<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Inputs</h6>
                <form action="/proses_tambah_barang" method="post">
                    @csrf

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kd" name="kd" placeholder="Kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nmbrg" name="nmbrg" placeholder="Nama Barang"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Nama Pemasok</label>
                        <select name="pemasok" id="pemasok" class="form-control">
                            @foreach($pemasuk as $p)
                            <option value="{{ $p->kode }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Harga Beli</label>
                        <input type="text" class="form-control" id="hrgbeli" name="hrgbeli" placeholder="Harga Beli"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Potongan Harga</label>
                        <input type="text" class="form-control" id="potongan" name="potongan" placeholder="Harga Beli"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Merek</label>
                        <input type="text" class="form-control" id="merek" name="merek" placeholder="Merek">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Tahun Pembuatan</label>
                        <input type="text" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan"
                            placeholder="Tahun pembuatan" value="{{date('Y')}}">
                    </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>
@endsection