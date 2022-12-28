@extends('user.layout')
@section('content')


<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Barang</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal kembali</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($barang as $b)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$b->nama}}</td>
                <td>{{$b->nmBrg}}</td>
                <td>{{$b->tgl_pinjam}}</td>
                <td>{{$b->tgl_kembali}}</td>
                <td>{{$b->status}}</td>
                <td>
                  <a class="btn btn-primary" href="/pengembalian/{{$b->id}}" @if($b->status === 'Request Pinjam' || $b->status === 'Proses Pengembalian' || $b->status === 'pengembalian berhasil' || $b->status === 'pinjaman ditolak'){{"hidden"}} @endif>Pengembalian</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection