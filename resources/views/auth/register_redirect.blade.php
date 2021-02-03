<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>51Careers-Redirect</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header id="header" class="fixed-top" style="opacity: 0.4">
    @include('user/layouts/header')
  </header>

  <div class="container" style="transform: scale(1.5); padding-top: 80px; margin: auto;">
    <div class="card" style="width:400px;  margin: auto;">
      <div class="card-header title-font" style="font-weight: bold;">
        <i>Welcome to 51 Careers, {{ Auth::User()->name }}!</i>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>You're being redirected in <span id="counter">7</span>s to fill out your profile,<br></p>
          <p>Or you can <a href="/home">skip</a> to our homepage.</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
      location.href = '/profile/profile';
    }
    if (parseInt(i.innerHTML)!=0) {
      i.innerHTML = parseInt(i.innerHTML)-1;
    }
  }
  setInterval(function(){ countdown(); },1000);
  </script>

  <footer style="opacity: 0.4">
    @include('user/layouts/footer')
  </footer>
@include('user/layouts/vendorjsfiles')
</body>
</html>
