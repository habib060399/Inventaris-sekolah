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
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Stok</th>
            <th>Tahun Pembuatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($barang as $b)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$b->nmBrg}}</td>
            <td>{{$b->satuan}}</td>            
            <td>{{$b->stock}}</td>
            <td>{{$b->tahun_pembuatan}}</td>
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