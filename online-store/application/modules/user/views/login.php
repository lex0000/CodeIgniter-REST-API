<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo configs('site_name');?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="<?php echo base_url('public/template/');?>css/layouts.css">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url('public/assets/');?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('public/assets/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('public/assets/');?>plugins/iCheck/icheck.min.js"></script>

  <!-- angular script -->
  <script src="<?php echo base_url('public/assets/');?>angular/angular.min.js"></script>
  <script src="<?php echo base_url('public/assets/');?>plugins/checklist-model.js"></script>


  <!-- angular app -->
  <script src="<?php echo base_url('public/assets/');?>app.js"></script>



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page"  ng-app="LedApp" ng-controller="Ctrl">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:;"><b><?php echo configs('site_logo');?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg mgt">เข้าสู่ระบบ</p>

    <form focus class="mgt" name="form"  ng-submit="form.$valid && submit();" novalidate>
      <div class="form-group has-feedback" ng-class="{'has-error':form.username.$invalid && (form.username.$dirty || form.$submitted) }">
        <input type="email" class="form-control" autocomplete="off"
        name="username"
        placeholder="Email"
        ng-model="vm.username"
        ng-required="true"
        ng-minlength="4"
        ng-maxlength="60"
        ng-pattern="/^[a-z A-Z0-9_]+$/"
        >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" autocomplete="off"> 
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">&nbsp; จำฉันไว้ในระบบ
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">เข้าสู่ระบบ</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- หรือ -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> บัญชีผู้ใช้ Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> บัญชีผู้ใช้ Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#" class="">ลืมรหัสผ่าน</a><br>
    <a href="register.html" class="text-center">สมัครสมาชิค</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>


<script>

     var app = angular.module('LedApp', ["checklist-model"]);

      app.controller('Ctrl', function ($scope, $http, Upload) {


      });


</script>