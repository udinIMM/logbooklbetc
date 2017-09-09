@extends('layouts.layouts')

@section('additional-css')
@endsection

@section('content')
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
              <label>Pemateri</label>
              <input type="text" class="form-control input-lg" placeholder="Pemateri" name="lecturer">
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control input-lg" placeholder="Judul" name="judul">
            </div>
            <div class="form-group">
              <textarea class="form-control input-lg" id="summary-ckeditor" placeholder="Isi" name="isi"></textarea>
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
  </div>
</section>
@endsection

@section('additional-js')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
