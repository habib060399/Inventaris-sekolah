@extends('layout')

@section('content')


<!-- partial -->
<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Inputs</h6>
                <form action="/update_barang" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kd" name="kd" value="{{$barang->kdbarang}}" placeholder="Kode" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nmbrg" name="nmbrg" value="{{$barang->nmBrg}}" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Nama Pemasok</label>
                        <select name="pemasok" id="pemasok" class="form-control">
                            <option value="{{$barang->kdpemasok}}">{{$barang->nama}}</option>
                            @foreach($pemasok as $p)
                            <option value="{{$p->kode}}">{{$p->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" value="{{$barang->satuan}}" name="satuan" placeholder="Satuan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Harga Beli</label>
                        <input type="text" class="form-control" id="hrgbeli" value="{{$barang->hrgBeli}}" name="hrgbeli" placeholder="Harga Beli">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Potongan Harga</label>
                        <input type="text" class="form-control" id="potongan" value="{{$barang->potongan}}" name="potongan" placeholder="Potongan Harga">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" value="{{$barang->stock}}" name="stock" placeholder="Stock">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" value="{{$barang->ket}}" name="ket" placeholder="Keterangan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" value="{{$barang->status}}" name="status" placeholder="Status">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="merek" value="{{$barang->merk}}" name="merek" placeholder="Merek">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Tahun Pembuatan</label>
                        <input type="text" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan"
                            placeholder="Tahun pembuatan" value="{{$barang->tahun_pembuatan}}">
                    </div>
                    <input type="number" name="id" value="{{$barang->id}}" hidden>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>
@endsection