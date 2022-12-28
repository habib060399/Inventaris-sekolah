@extends('layout')

@section('content')


<!-- partial -->
<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Inputs</h6>
                <form action="/proses_edit_pemasok" method="post">
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
                        <input type="text" class="form-control" id="kd" name="kd" value="{{$pemasuk->kode}}" readonly>
                    </div>
                    <div class="">
                        <label for="exampleInputText1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$pemasuk->nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$pemasuk->alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="telp" name="telp" value="{{$pemasuk->telp}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="{{$pemasuk->kota}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" value="{{$pemasuk->tgl_masuk}}" readonly>
                    </div>
            </div>
     
            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>
@endsection