@extends('layouts.admin')

@section('content')

<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h5 mb-0 text-gray-800">Laporan</h1>
            
</div>

<div class="row 12">
  <div class="col-12">
      <div class="card p-5" >

       <table class="table table-bordered table-responsive table-hover mt-2">
        <thead class="table-dark">
        <?php $i=1 ?>
        <tr align="center" >
            <th width="5%">NO</th>
            <th width="45%">NAMA</th>
            <th width="7%">HADIR</th>
            <th width="7%">SAKIT</th>
            <th width="7%">IJIN</th>
            <th width="7%">ALPHA</th>
            <th width="7%">NILAI</th>
            <th colspan="2" width="10%">AKSI</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$i++}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td ></td>
            <td align="right"><button class="btn btn-warning" data-toggle="modal" data-target="#viewadmin">Edit
          </button> 
          <td>
          <button class="btn btn-danger" data-toggle="modal" data-target="#viewadmin">Hapus</button></td>
          </td>
          </tr>
</div>
</div>


@endsection