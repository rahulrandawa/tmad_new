<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Top Mobile Apps Development</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
  <!-- JQVMap -->
  <!-- {{-- <link rel="stylesheet" href="{{ asset('public/plugins/jqvmap/jqvmap.min.css') }}"> --}} -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="{{ asset('public/plugins/daterangepicker/daterangepicker.css') }}"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="{{ asset('public/plugins/summernote/summernote-bs4.min.css') }}"> -->

  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ asset('public/plugins/codemirror/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('public/plugins/codemirror/theme/monokai.css') }}">
  <!-- SimpleMDE -->
  <!-- <link rel="stylesheet" href="{{ asset('public/plugins/simplemde/simplemde.min.css') }}"> -->



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript">
    const SITE_URL = "{{ URL::to('/') }}";
</script>
<style>
  .profile_img_logo{
    background: #f3eeee;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid gray;
    position:relative;
  }
  .profile-div{
    text-align:center;
    margin-top: 2px;
    right: 1%;
    position: absolute;
    background: #ffff;
    padding-top: 10px;
    width:150px;
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 8%);
    border-radius: 3px;
    display:none;
  }
  .profile-div a{
    color:#333;
  }
  .profile-div a i{
    color:gray;
  }
  .profile-div .logout{
    border-top:1px solid gray;
    padding-top:8px;
  }
</style>
<style>
  .btn-warning {
    color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
    box-shadow: none;
}
.btn-warning:hover{
  color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
}
.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgb(191 190 190 / 8%);
}
.btn-success1{
  background: #ebebeb;
    border: none;
    color: grey;
}
.btn-danger1{
  background: #ff4444;
    border: none;

    color:#fff;
}
.btn-danger1:hover, .btn-info1:hover{
  color:#fff;
}
.btn-info1{
  border: none;
    background: #7c7c7c;
    color:#fff;
}
.error{
color: red;
text-align: left;
}
</style>
<style type="text/css">
  .add-button {
    background: linear-gradient(180deg, rgba(253, 142, 13, 1) 0%, rgba(255, 199, 119, 1) 100%); color:#fff
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="Admin Logo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <!-- <a href="{{ route('logout') }}" class="btn btn-info" >
    <span class="glyphicon glyphicon-log-out"></span> Log out
    </a> -->

    <div class="profile_img_logo" id="toggle-slow">
      @if(empty(Auth::guard('admin')->user()))
     <img  src="{{ url('public/storage/images/admin4.png') }}" width="35px" style="border-radius:50%; object-fit: cover; padding:1px;" class="img-fluid d-block m-auto" alt="img"  />
     @else
     <img  src="{{ url('public/storage/'.Auth::guard('admin')->user()->profile) }}" width="35px" style="border-radius:50%; object-fit: cover; padding:1px;" class="img-fluid d-block m-auto" alt="img"  />
    @endif


    </div>
    <div class="profile-div" id="profile-box">

        <p><a href="{{ route('adminProfile') }}"> <i class="fa fa-user mr-2" aria-hidden="true"></i>Profile</a></p>
        <p class="logout"><a href="{{ route('logout') }}"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout</a></p>

    </div>

    </li>
      <!-- {{--  <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>  --}} -->
    </ul>
  </nav>
  <!-- /.navbar -->
