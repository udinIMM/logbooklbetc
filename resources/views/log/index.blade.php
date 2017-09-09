@extends('layouts.layouts')

@section('additional-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Logbook LBE</h3>
          <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('log.create') }}" ><span class="fa fa-plus"></span> Tambah Logbook LBE</a>            
          </div>
        </div>
        <!-- /.box-header -->
        @if($log->count())
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            @foreach($log as $m)
            <tr>
              <th>Tanggal</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Pemateri</th>
              <th>Status</th>
              <th>Menu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{ $m->tanggal }}</td>
              <td>{{ $m->judul }}</td>
              <td>{{ $m->isi }}</td>
              <td>{{ $m->pemateri }}</td>
              <td>{{ $m->status }}</td>
              <td align="center" width="30px">
                <a href="#" class="btn btn-warning btn-sm" role="button">
                <i class="fa fa-pencil-square"></i> Edit</a>
              </td>
              <td align="center" width="30px">
                {!! Form::open(array('route' => array('log.destroy', $m->id),
                                     'method' => 'delete',
                                     'style' => 'display:inline')) !!}
                <button class='btn btn-sm btn-danger delete-btn' type='submit'>
                <i class='fa fa-times-circle'></i> Delete </button>
                {!! Form::close() !!}
              </td>

              <!-- <td>X</td> -->
            </tr>
            </tbody>


            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
        @else
        <div class="alert alert-warning">
         <i class="fa fa-exclamation-triangle"></i> Data Logbook tidak Ada
        </div>
        @endif
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