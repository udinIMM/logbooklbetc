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
          <h2 class=""><b>DIGITAL LOGBOOK LBE</b></h2>
          <h3 class="box-title">Selamat Datang di Digital Logbook LBE</h3>
          <br>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-3">
                <a href="{{ route('log.index')}}" class="btn btn-primary btn-lg btn-block btn-huge">Logbook LBE</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('peserta.index')}}" class="btn btn-primary btn-lg btn-block btn-huge">Peserta LBE</a>
            </div>
          </div>
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