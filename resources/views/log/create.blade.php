@extends('layouts.layouts')

@section('additional-css')
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
@endsection

@section('content')
<!-- <section class="content-header">
  <h1>
    Data Tables
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section> -->

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Peserta LBE</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal</label><br />
                  {!! Form::date('name', \Carbon\Carbon::now()); !!}
                </div>
                <div class="form-group">
                  <label for="exampleInputTitle1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">Isi Materi</label>
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Isi Materi">
                </div>
                <div class="form-group">
                  <label for="exampleInputTutor1">Pemateri</label>
                  <input type="text" class="form-control" id="exampleInputTutor1" placeholder="Pemateri">
                </div>
                <div class="form-group">
                  <label for="exampleInputTutor1">NRP</label>
                  <input type="text" class="form-control" id="exampleInputTutor1" placeholder="$usr->nrp" readonly>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
                <!-- <div class="dropdown">
                  Pilih peran dibawah ini:<br/>
                  <select name="role">
                      <option value="peserta" selected="selected">Peserta LBE</option>
                      <option value="admin">Admin Lab.</option>
                      <option value="kdpm">KDPM</option>
                  </select>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('additional-js')
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection