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
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('lab.store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Laboratorium</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Laboratorium</label>
                  <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                {!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                {!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}
                {!! Form::close()!!}
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