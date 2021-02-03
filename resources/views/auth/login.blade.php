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
  body {
    line-height: 1.6;
  }
  input[type="checkbox"] {
    -webkit-appearance: checkbox;
  }
  .login-box {
    background: rgba(255, 255, 255, 0.9);
    position: relative;
    z-index: 100;
    margin-left: 0;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 45px;
    padding-bottom: 50px;
    margin-top: 90px;
    margin-bottom: 70px;
  }
  .welcome {
    width: 560px;
    border-radius: 5px;
  }
  .welcome-text {
    font-size: 48px;
    font-weight: 700;
  }
  .career-consulting-icon {
    object-fit: contain;
    width: 70px;
    height: 70px;
  }
  #login-right-panel-pic {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-right: 0;
  }
  #career-consulting {
    text-align: center;
    width: 100%;
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #F9F9F9;
  }
  #career-consulting p {
    font-size: 20px;
    font-weight: 500;
    margin-top: 20px;
  }
  </style>
</head>
<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->
  <div id="login" style="margin-top: 60px;">
    <div style="position: fixed; z-index: -100; width: 100%;">
      <!-- <img id="login-right-panel-pic" src="{{ asset('user/img/51login.gif') }}"/> -->
      <video autoplay muted loop id="login-right-panel-pic">
        <source src="{{ asset('user/img/51login.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="container">
      <div class="row centered">
        <div class="col-6" style="display: flex; padding-left: 0;">
          <div class="login-box centered">
            <div class="welcome">
              <h1 class="welcome-text theme-color title-font" style="line-height: 1.3">Welcome to your professional community</h1>
              <p style="font-size: 20px; margin-top: 0; margin-bottom: 15px;">
                Take your career to the next level. <br>
                Make your dreams happen.
              </p>
            </div>
            <div class="panel-body" style="width: 360px;">
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
                <div style="margin-top: 10px;">
                  <button type="submit" class="btn btn-block btn-outline-primary" style="border-radius: 20px;">Log in</button>
                  <hr>
                  <a class="btn btn-block btn-outline-secondary" href="{{ route('register') }}" style="border-radius: 20px;">Sign up now</a>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="career-consulting" class="centered">
    <div class="container">
      <h3 class="theme-color" style="text-transform: uppercase; font-weight: bold;">How We Help</h3>
      <h1 class="title-font" style="text-transform: uppercase; margin-top: 30px; font-weight: bold; letter-spacing: 4px;">Career consulting</h1>
      <div class="row" style="margin-top: 80px;">
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_personal_development.png') }}" alt="" style="transform: scale(1.05);">
          <p>Personal Development</p>
        </div>
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_career_exploration.png') }}" alt="" style="transform: scale(0.95);">
          <p>Career Exploration</p>
        </div>
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_resume_services.png') }}" alt="" style="transform: scale(0.9);">
          <p>Resume Services</p>
        </div>
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_networking_strategy.png') }}" alt="" style="transform: scale(1.05);">
          <p>Networking Strategy</p>
        </div>
      </div>
      <div class="row" style="margin-top: 50px;">
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_career_transition.png') }}" alt="">
          <p>Career Transition</p>
        </div>
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_referral_opportunities.png') }}" alt="">
          <p>Referral Opportunities</p>
        </div>
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_interview_advice.png') }}" alt="">
          <p>Interview Advice</p>
        </div>
        <div class="col-3">
          <img class="career-consulting-icon" src="{{ asset('user/img/icon/signup_skills_training.png') }}" alt="">
          <p>Skills Training</p>
        </div>
      </div>
    </div>
  </div>






  <div id="services" class="services-area area-padding bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class=" text-center">
            <h2 style="font-family:'libre baskerville',serif; font-size:42px;">A Reputable Career Consulting Brand</h2> </br> </br>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class=" text-center" style="font-style: italic; ">
            <h2  style="font-size:64px; color:#2557A7; text-shadow:#ffffff 3px 3px 0px, rgba(0, 0, 0, 0.2) 6px 6px 0px;font-style:italic;">10,000 + </h2>
          </br>
          <h2 style="font-family:'helvetica-w01-roman',sans-serif; font-weight:400; font-size:36px; ">​Partners</h2>
        </div></div>

        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class=" text-center">
            <h2  style="font-size:64px; color:#2557A7; text-shadow:#ffffff 3px 3px 0px, rgba(0, 0, 0, 0.2) 6px 6px 0px; font-style:italic;">2,000 +</h2> </br>
            <h2 style="font-family:'helvetica-w01-roman',sans-serif; font-weight:400; font-size:36px; ">​Offers</h2>
          </div> </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <div class=" text-center">
              <h2  style="font-size:64px; color:#2557A7; text-shadow:#ffffff 3px 3px 0px, rgba(0, 0, 0, 0.2) 6px 6px 0px;font-style:italic;">99% + </h2> </br>
              <h2 style="font-family:'helvetica-w01-roman',sans-serif; font-weight:400; font-size:36px; ">Recommend</h2>
            </div>
        </div>
        </div>


      </div>
    </div><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">

        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">

                  <h2  style="font-size:60px; text-align:left;">51 Careers </h2>
                </br> </br>
                <h3 style="font-size:20px;text-align:left;  font-weight:normal">  A top career consulting firm that tailors clients' needs and helps candidates chase career dreams. </h3>

                <div style="text-align:left;">
                  <a class="ready-btn right-btn page-scroll" href="/aboutus" style="background-color:#FFCC33; color:black; border-radius:0px;" >Learn More</a>
                </div>

              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="{{ asset('user/img/slider/51adv.PNG') }}" alt="">
        </div>



      </div>
    </div>
  </div><!-- End Services Section -->
  <div class="our-team-area area-padding bg-white">
    <div class="container">
      <div class=" text-center">
        <h2  style="font-size:40px;">​Our Partners</h2>
      </div>
    </div>
    <img src="{{ asset('user/img/slider/part.png') }}" alt="" style="width:100%">
  </div>

  <footer>
    @include('user/layouts/footer')
  </footer>
  <!-- End  Footer -->

@include('user/layouts/vendorjsfiles')

</body>
</html>
