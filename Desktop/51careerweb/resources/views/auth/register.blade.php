<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
<head>
  <meta charset="UTF-8">
  <title>51Career - Signup</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">


<!-- Firebase function initializing and specs loading -->
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-auth.js"></script>
  <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-firestore.js"></script>
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyCygj9RMPMb11wjuQ5hU8y_LMC7UFGu4LU",
      authDomain: "phoneauthtest-3d4a9.firebaseapp.com",
      databaseURL: "https://phoneauthtest-3d4a9.firebaseio.com",
      projectId: "phoneauthtest-3d4a9",
      storageBucket: "phoneauthtest-3d4a9.appspot.com",
      messagingSenderId: "646284444558",
      appId: "1:646284444558:web:6061bb4909f57d71775adf",
      measurementId: "G-QQ96T0JBW1"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
  </script>
<!-- Finish Firebase import -->

</head>

<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->

</br>
</br>
</br>
</br>


<!-- Phone number verification module -->
<!-- Show before phone is verified -->
  <div id="phone-not-verified">
    <div id="container">
      <div id="main">
        <div>
          <div id="firebaseui-spa">
            <div id="firebaseui-container"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Phone verification complete -->


</br>
</br>


<!-- Show when phone verified -->
<div id="phone-verified">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">


                  <div id="registration-box">
                      <form  class="form-horizontal" method="POST" action="{{ route('register') }}" text-align="center">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

                              <label for="phone">Phone Number</label>

                              <div class="col-md-6">
                                  <input id="phone" type="phone" class="form-control" name="phone" readonly="readonly" required>

                                  @if ($errors->has('phone'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('phone') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Name</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      注册
                                  </button>

                                    <a href={{route('login') }} class="btn btn-primary">
                                        返回登陆
                                    </a>



                              </div>
                          </div>
                      </form>
                  </div>

      </div>
  </div>
  </div>
</div>

  <footer>
   @include('user/layouts/footer')
  </footer><!-- End  Footer -->
  @include('user/layouts/vendorjsfiles')

<script src="user/js/signup.js"></script>
</body>
</html>
<style>

  #container {
    max-width: 600px;
    margin: 50px auto;
    text-align: center;
  }

  .container-fluid{
    max-width: 33%;
    max-width: 500px;
    margin: 50px auto;
  }

  #registration-box {
    margin: 25px auto;
  }

</style>
