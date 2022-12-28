@extends('layout')

@section('content')


<!-- partial -->
<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Inputs</h6>
                <form action="/proses_data_pemasuk" method="post">
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

                    <div class="">
                        <label for="exampleInputText1" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kd" name="kd" placeholder="Kode">
                    </div>
                    <div class="">
                        <label for="exampleInputText1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="No Telepon">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="kota">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Tanggal Masuk</label>
                        <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="Keterangan"
                            value="{{ date('Y-m-d') }}">
                    </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>
@endsection