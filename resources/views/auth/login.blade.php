<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>51Careers-Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  .login-box {
    position: relative;
    z-index: 100;
    width: 400px;
    padding-bottom: 80px;
  }
  .welcome {
    width: 540px;
    height: 100px;
    overflow: visible;
    margin-bottom: 60px;
  }
  .welcome-text {
    color: #666;
  }
  .login-box-msg {
    text-align: center;
  }
  .entrance-right-panel {
    width: 100%;
  }
  #entrance-pic {
    margin-right: 0;
    border-radius: 50%;
    object-fit: cover;
    height: 640px;
    width: 640px;
  }
  input[type="checkbox"] {
    -webkit-appearance: checkbox;
  }
  </style>
</head>
<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->
  <div class="container entrance">
    <div class="row">
      <div class="col-4" style="display: flex;">
        <div class="login-box centered">
          <div class="card-body login-card-body">
            <div class="welcome">
              <h1 class="welcome-text title-font">Welcome to your professional community</h1>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
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
                  <div class="input-group">
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
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

                  <label>
                    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot your password?</a>
                  </label>
                <div style="margin-top: 10px">
                  <button type="submit" class="btn btn-sm btn-block btn-outline-primary" style="border-radius: 20px;">Log in</button>
                  <hr>
                  <a class="btn btn-sm btn-block btn-outline-info" href="{{route('register') }}" style="border-radius: 20px;">Sign up now</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
      <div class="col-7">
        <div class="entrance-right-panel">
          <img id="entrance-pic" src="{{ asset('user/img/51loginsignup.jpg') }}"/>
        </div>

      </div>
    </div>
  </div>



  <footer>
    @include('user/layouts/footer')
  </footer>
  <!-- End  Footer -->

@include('user/layouts/vendorjsfiles')

</body>
</html>
