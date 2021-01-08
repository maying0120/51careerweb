<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>51Careers-Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
<<<<<<< HEAD
  <!-- summernote -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <style>
  .login-box {
    width: 360px;
    margin-top: 5em 15em;
  }

  .login-box-msg {
    text-align: center;
  }

  input[type="checkbox"] {
    -webkit-appearance: checkbox;
  }
  </style>
=======
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <style>
      .login-box{
        position: relative;
        margin: auto;
        align-self: center;
      }

      input[type="checkbox"]{
        -webkit-appearance: checkbox;
      }
    </style>
>>>>>>> origin/new_develop
</head>
<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->
<<<<<<< HEAD

  <div class="login-box card centered">
=======
</br>
</br>
</br>
<div class="login-box">

  <div class="card">
>>>>>>> origin/new_develop
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
<<<<<<< HEAD
=======


>>>>>>> origin/new_develop
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="Email" class="col-md-4 control-label">Email</label>

            <div class="input-group mb-3">
              <input id="email" type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>

              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control" placeholder="password" name="password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-outline-secondary btn-sm">Log in</button>
            </div>
          </div>
<<<<<<< HEAD
        </form>
      </div>
    </div>
    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot your password?</a>
    <a class="btn btn-link" href="{{route('register') }}">Sign up now</a>
  </div>


  <footer>
    @include('user/layouts/footer')
  </footer>
  <!-- End  Footer -->

@include('user/layouts/vendorjsfiles')
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
=======
        </div>
      </div>

      <a class="btn btn-link" href="{{ route('password.request') }}">
        Forgot your password?
      </a>

      <a class="btn btn-link" href="{{route('register') }}">
        Sign up now
      </a>

    </div>
  </div>

</br>
</br>

<footer>
  @include('user/layouts/footer')
</footer>
</br>

  <!-- End  Footer -->

 @include('user/layouts/vendorjsfiles')
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
>>>>>>> origin/new_develop
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
