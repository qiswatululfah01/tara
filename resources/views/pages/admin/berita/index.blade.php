@extends('layouts.admin')

@section('content')

<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h5 mb-0 text-gray-800">Halaman Berita</h1>
            
</div>

<div class="row 12">
  <div class="col-3">
      <div class="card" >
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Folders
            <span class="badge badge-primary badge-pill">14</span>
          </li>  
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Inbox
            <span class="badge badge-primary badge-pill">14</span>
          </li>  
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Sent
            <span class="badge badge-primary badge-pill">14</span>
          </li>  
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Drafts
            <span class="badge badge-primary badge-pill">14</span>
          </li>  
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Junk
            <span class="badge badge-primary badge-pill">14</span>
          </li>  
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Trash
            <span class="badge badge-primary badge-pill">14</span>
          </li>  
        </ul>
        <div class="card-footer">
          
        </div>
    </div>
  </div>

  <div class="card col-9 p-5">
                  <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Isi Berita</label>
                <textarea class="form-control" id="message-text" name="alamat" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" name="foto" id="foto" required>
                                <label class="custom-file-label" for="validatedCustomFile">Pilih file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
  </div>

@endsection