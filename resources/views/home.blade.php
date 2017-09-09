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
          <h2 class="title" style="margin-left: 15px;"><b>DIGITAL LOGBOOK LBE</b></h2>
          <h3 class="box-title" style="margin-left: 15px;">Selamat Datang di Digital Logbook LBE</h3>
          <br>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="margin-left: 15px;">
          <div class="row">
            <div class="col-md-3">
                <a href="{{ route('log.index')}}" class="btn btn-primary btn-lg btn-block btn-huge">Logbook LBE</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('peserta.index')}}" class="btn btn-primary btn-lg btn-block btn-huge">Peserta LBE</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('lab.index')}}" class="btn btn-primary btn-lg btn-block btn-huge">Laboratorium</a>
            </div>
          </div>
          <br>
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