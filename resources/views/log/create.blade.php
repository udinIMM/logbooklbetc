@extends('layouts.layouts')

@section('additional-css')
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    General Form Elements
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">General Elements</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('log.store') }}">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label>Lecturer</label>
              <input type="text" class="form-control input-lg" placeholder="Enter Lecturer's Name" name="lecturer">
            </div>
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control input-lg" placeholder="Enter Title" name="judul">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="summary-ckeditor" name="isi"></textarea>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection

@section('additional-js')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
