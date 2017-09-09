@extends('layouts.layouts')

@section('additional-css')
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
            <!-- <a type="button" class="btn btn-primary eaa" href="peserta/addcsv" ><span class="fa fa-upload"></span> Import CSV</a> -->
            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
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
              <td>nrp</td>
              <td>nama
              </td>
              <td>Peserta LBE</td>
              <td> </td>
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
          </table>
        </div>
        <!-- /.box-body -->
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
@endsection