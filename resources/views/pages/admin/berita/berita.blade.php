@extends('admin.app')

@section('style')
<!-- icheck bootstrap -->
<link rel="stylesheet" href="admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('container')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Berita</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Dokumen Penjaminan Mutu</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Dokumen Akreditasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Dosen</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->

        
        <section class="col-lg-3 connectedSortable">

            <a href="/makepost" class="btn btn-primary btn-block mb-3">Make a Post</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fas fa-inbox"></i> Inbox
                      <span class="badge bg-primary float-right">12</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-envelope"></i> Sent
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-file-alt"></i> Drafts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fas fa-filter"></i> Junk
                      <span class="badge bg-warning float-right">65</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-trash-alt"></i> Trash
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          <!-- Calendar -->
          <div class="card bg-gradient-purple">
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                  </div>
                </div>
                <button type="button" class="btn btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- Map card -->
          <div class="card bg-gradient-primary" style="visibility: hidden">
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <div id="sparkline-1"></div>
                  <div class="text-white">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-2"></div>
                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="text-white">Sales</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->

          
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <section class="col-lg-9 connectedSortable">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Post</h3>
    
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm">
                        <i class="far fa-trash-alt"></i>
                      </button>
                      <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-reply"></i>
                      </button>
                      <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-share"></i>
                      </button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-sync-alt"></i>
                    </button>
                    
                  </div>
                  <div class="table-responsive mailbox-messages px-2">
                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Post Title</th>
                                <th class="mailbox-attachment"></th>
                                <th>Upload</th>
                            </tr>
                        </thead>
                      <tbody>
                      @foreach ($berita as $berita)
                      <tr>
                        <td>
                          <div class="icheck-primary">
                            <input type="checkbox" value="" id="check{{ $berita->id }}">
                            <label for="check{{ $berita->id }}"></label>
                          </div>
                        </td>
                        <td><a href="post-berita/{{ $berita->id }}" class="text-decoration-none text-danger">{{ $berita->user_id }}</a></td>
                        <td><a href="post-berita/{{ $berita->id }}" class="text-decoration-none text-dark"><b>{{ $berita->ke }}</b> - {{ $berita->subject }}</a>
                        </td>
                        <td class="mailbox-attachment">
                          <a href="" data-toggle="modal" data-target="#exampleModalhapus{{$berita->id}}" class="badge badge-danger"><i class="fas fa-trash mr-1"></i>Hapus</a> 
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalhapus{{$berita->id}}" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Hapus Berita</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="" enctype='multipart/form-data'>
                                    @csrf
                                    @method('delete')
                                   
                                    <div class="card-body">
                                      
                                      <div class="form-group">
                                        <h1>Apakah Anda mau menghapus data ini?</h1>
                                        <label for="file">Kategori {{$berita->ke}}</label><br>
                                        <label for="prodi">Judul {{$berita->subject}} </label>
                                      </div>
                                      
                                        
                                    </div>
                                    <!-- /.card-body -->
                                
                                    
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-primary">Delete</button>
                                    </div>  
                                  </form>
                                </div>
                               
                              </div>
                            </div>
                          </div></td>
                        <td class="mailbox-date">{{ $berita->created_at->diffForHumans() }}</td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <!-- /.table -->
                  </div>
                  <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                      <i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm">
                        <i class="far fa-trash-alt"></i>
                      </button>
                      <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-reply"></i>
                      </button>
                      <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-share"></i>
                      </button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-sync-alt"></i>
                    </button>
                  </div>
                </div>
              </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection

@section('script')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin-lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Page specific script -->
<script>
    $(function () {
      //Enable check and uncheck all functionality
      $('.checkbox-toggle').click(function () {
        var clicks = $(this).data('clicks')
        if (clicks) {
          //Uncheck all checkboxes
          $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
          $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
        } else {
          //Check all checkboxes
          $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
          $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
        }
        $(this).data('clicks', !clicks)
      })
  
      //Handle starring for font awesome
      $('.mailbox-star').click(function (e) {
        e.preventDefault()
        //detect type
        var $this = $(this).find('a > i')
        var fa    = $this.hasClass('fa')
  
        //Switch states
        if (fa) {
          $this.toggleClass('fa-star')
          $this.toggleClass('fa-star-o')
        }
      })
    })
  </script>
@endsection