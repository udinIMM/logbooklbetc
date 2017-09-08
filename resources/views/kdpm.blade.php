<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KDPM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a class="kdpm" href="{{ route('login') }}"><b>KDPM</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="container">
    <br>
    <div class="row">
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">Lab. Pemrograman 1</a>
          </div>
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">Lab. Pemrograman 2</a>
          </div>
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">AJK</a>
          </div>
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">KBJ</a>
          </div>
    </div>
      <hr>
    <div class="row">
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">Algoritma Pemrograman</a>
          </div>
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">RPL</a>
          </div>
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">KCV</a>
          </div>
          <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">MI</a>
          </div>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<style type="text/css">
  a.kdpm{
    margin-left: 540px;
  }
  div.login-box{
    margin: 40px;
  }
</style>
</body>
</html>