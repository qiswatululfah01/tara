@extends('layouts.admin')

@section('content')

<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h5 mb-0 text-gray-800">Laporan</h1>
            
</div>

<div class="row 12">
  <div class="col-12">
      <div class="card p-5" >
      <form>
      <div class="form-group">
        <table border="0">
          <tr>
            <td width="10%"><label for="tanggal">Kelas</label></td>
            <td width="30%">
                <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                  <option selected>Pilih...</option>
                  <option value="VII A">VII A</option>
                  <option value="VII B">VII B</option>
                  <option value="VII C">VII C</option>
                  <option value="VII C">VII D</option>
                  <option value="VII C">VII E</option>
                  <option value="VII C">VII F</option>
                  <option value="VII C">VIII A</option>
                  <option value="VII C">VIII B</option>
                  <option value="VII C">VIII C</option>
                  <option value="VII C">VIII D</option>
                  <option value="VII C">VIII E</option>
                  <option value="VII C">VIII F</option>
                  <option value="VII C">IX A</option>
                  <option value="VII C">IX B</option>
                  <option value="VII C">IX C</option>
                  <option value="VII C">IX D</option>
                  <option value="VII C">IX E</option>
                  <option value="VII C">IX F</option>
                 </select>  
            </td>
            <td width="4%"></td>
            <td width="10%"><label for="tanggal">Tanggal</label></td>
            <td width="20%"><input type="date" class="form-control" id="tanggal" aria-describedby="tanggal"> </td>
            <td width="1%">-</td>
            <td width="20%"><input type="date" class="form-control" id="tanggal" aria-describedby="tanggal"></td>
            
          </tr>
          <tr>
            <td width="10%"><label for="tanggal">Golongan</label></td>
            <td width="30%">
                <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                  <option selected>Pilih...</option>
                  <option value="Pembina">Pembina</option>
                  <option value="Pembntu Pembina">Pembantu Pembina</option>
                  <option value="Dewan Galang">Dewan Galang</option>
                  <option value="Penggalang Ramu">Penggalang Ramu</option>
                  <option value="Penggalang Rakit">Penggalang Rakit</option>
                  <option value="Penggalang Terap">Penggalang Terap</option>
                </select>  
            </td>
            <td width="4%"></td>
            <td width="10%"></td>
            <td width="20%"> </td>
            <td width="1%"></td>
            <td width="20%" align="right"><button class="btn btn-info" type="submit">Cari</button></td>
            
          </tr>
          <tr>
            <td width="10%"><label for="tanggal">Keterangan</label></td>
            <td width="30%">
                <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                  <option selected>Pilih...</option>
                  <option value="Kamabigus">Hadir</option>
                  <option value="Pembina Utama">Sakit</option>
                  <option value="Pelatih Lapangan">Ijin</option>
                  <option value="Pelatih Lapangan">Alpha</option>
                  <option value="Lainnya">Lainnya</option>
                 </select>  
            </td>
            <td width="4%"></td>
            <td width="10%"></td>
            <td width="20%"> </td>
            <td width="1%"></td>
            <td width="20%" ></td>
          </tr>
        </table>
            
       </div>
       </form>

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
            <td align="right"><button class="btn btn-warning" data-toggle="modal" data-target="#viewadmin">Unduh
          </button> 
          <td>
          <button class="btn btn-danger" data-toggle="modal" data-target="#viewadmin">Cetak</button></td>
          </td>
          </tr>
</div>
</div>


@endsection