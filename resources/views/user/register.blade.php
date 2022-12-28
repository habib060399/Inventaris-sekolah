@extends('layout')

@section('content')


<!-- partial -->

<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Register Data</h4>
            <form action="/register" method="post">
                @csrf
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
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
                <div class="">
                    <label for="exampleInputText1" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">E-Mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Telp</label>
                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Level</label>
                    <select class="form-control" name="level" id="level">
                        <option value="" selected disabled>Pilih Level</option>
                        <option value="1">Admin</option>
                        <option value="2">Kepala Sekolah</option>
                        <option value="3">User</option>
                    </select>
                    {{-- <input type="number" class="form-control" id="level" name="level" placeholder="Level"> --}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Tanggal Masuk</label>
                    <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="Keterangan"
                        value="{{ date('Y-m-d') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="upass" name="upass" placeholder="Password">
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Tambah Data</button>
                    <a class="btn btn-danger" href="/register">Batal</a>
                </div>
            </form>
        </div>


    </div>
</div>

@endsection