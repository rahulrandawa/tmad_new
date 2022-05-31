<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Top Mobile Apps Development</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- y --}}
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body{
      /* background-image: url("https://chiranjeevani.com/assets/images/slider1.jpg"); */
      background: linear-gradient(150deg, #281483 15%, #8f6ed5 70%, #d782d9 94%);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    .card{
      background: #fff;
    border-radius: 12px;
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
    color: #555251;
    height: 100%;
    margin: 25px auto;
    padding: 25px;
    text-align: center;
    transition: .6s;
    width: 100%;
    }
    .loginBtn {
    background: #8061c9;
    color: #fff !important;
    padding: 5px 25px;
    border-radius: 0;
    font-size: 17px;
    margin: auto;
    display: block;
    border-radius: 5px;
}
.loginBtn:hover{
  box-shadow: 0 4px 8px 0 rgb(0 0 0 / 40%);
}
.signin{
  font-size: 1.5rem;
  font-weight: bold;
  color: #8061c9;
}

.login-card-body, .register-card-body {

    border-top: 0;
    color: #666;
    padding: 20px;
}
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo">
        <img src="{{ asset('public/assets/img/logo.png') }}" alt="logo" class="img-fluid" style="width: 150px; opacity: .8">
        <!-- <p><b>Admin</b> Login</p> -->
      </div>
      <p class="login-box-msg"><span class="signin">Sign in</span> </p>

      <form action="{{ route('loginData') }}" method="post" id="login-form">
          @csrf
        <div class="form-group input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        @if ($errors->has('email'))
            <span class="text-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <div class="form-group   input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
             <i class="fa fa-lock" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        @if ($errors->has('password'))
            <span class="text-danger">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif


          <!-- /.col -->
          <div class="col-12">
            <div class="right d-block mx-auto">
            <button type="submit" class="btn loginBtn ">Sign In</button>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>



<script src="{{ asset('public/plugins/jquery-validation/jquery.validate.min.js') }}"></>
<script src="{{ asset('public/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('public/dist/js/validation.js') }}"></script>
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 5000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
</body>
</html>
