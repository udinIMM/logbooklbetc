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
          <h3 class="box-title">List Peserta LBE</h3>
          <div class="pull-right">
            <a type="button" class="btn btn-primary" href="{{ route('peserta.create') }}" ><span class="fa fa-plus"></span> Tambah Peserta LBE</a>
            <a type="button" class="btn btn-primary eaa" href="{{ url('/peserta/addcsv') }}" ><span class="fa fa-upload"></span> Import CSV</a>
            
          </div>
        </div>
        <!-- /.box-header -->
        @if($users->count())
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            @foreach($users as $m)
            <tr>
              <th>NRP</th>
              <th>Nama</th>
              <th>Peran</th>
              <th>Menu</th>
              <!-- <th>Engine version</th>
              <th>CSS grade</th> -->
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{ $m->nrp }}</td>
              <td>{{ $m->nama }}
              </td>
              <td>{{ $m->role }}</td>
              <td align="center" width="30px">
                <a href="/peserta/{{$m->nrp}}/edit" class="btn btn-warning btn-sm" role="button">
                <i class="fa fa-pencil-square"></i> Edit</a>
              </td>
              <!-- <td>X</td> -->
            </tr>
            </tbody>
            <!-- <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot> -->
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
        @else
        <div class="alert alert-warning">
         <i class="fa fa-exclamation-triangle"></i> Data Peserta tidak Ada
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