<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>51 careers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link href="{{ asset('user/img/51careerlogo1.png') }}" rel="icon">
  <link href="{{ asset('user/story/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/animate.css/animate.min.css') }}"  rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/icofont/icofont.min.css') }}"  rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/venobox/venobox.css') }}"  rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/story/assets/vendor/aos/aos.css') }}"  rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user/story/assets/css/style.css') }}"  rel="stylesheet">


</head>



<style>
a1:link {
color:#2557A7;
text-decoration:none;
}
a1:visited {
color:#2557A7;
text-decoration:none;
}
a1:hover {
color:#68A4C4;
text-decoration:none;
}
a1:active {
color:#2557A7;
text-decoration:none;
}
</style>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
<div class="container d-flex">
  <div class="mr-auto">
    <img src="{{ asset('user/img/51careerlogo1.png') }}" alt="" style="max-height: 50px; transform: translateY(-6px);"/>
  </div>
  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li ><a href="/home">Home</a></li>
      <li><a href="ourservice">Service</a></li>
      <li class="active"><a href="/ouroffer">Success Stories</a></li>
      <li><a href="/job">Job Board</a></li>
      <li><a href="/post">Blog</a></li>
      <li class="drop-down">
        <a href="aboutus">Our Company</a>
        <ul>
          <li ><a href="/aboutus">About Us</a></li>
          <li><a href="/joinus">Join Us</a></li>
          <li><a href="/contactus">Contact Us</a></li>
        </ul>
      </li>
      @if (Auth::guard('web')->check())
      <li style="margin-left: 10px; padding-left: 10px;">
        <a href="{{ route('profile', ['tab' => 'notification']) }}">
          <i class="fa fa-bell"></i>
          @if (count(auth()->user()->unreadNotifications) > 0)
          <span class="badge badge-pill badge-info">
            &nbsp;{{ count(auth()->user()->unreadNotifications) }}&nbsp;
          </span>
          @endif
        </a>
      </li>
      @endif
      <li class="drop-down">
        <a href="#" class="logo">
          <img src="{{ asset('user/img/51careerlogo1.png') }}"/>
        </a>
        <ul>
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Sign up</a></li>
            @elseif (Auth::guard('web')->check())
            <li><a href="">My Reviews</a></li>
            <li><a href="">My Subscription</a></li>
            <li><a href="{{ route('profile', ['tab' => 'profile']) }}">My Profile</a></li>
            <li>
              <a href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
              <form id="logout-form" action="{{ route('user.logout') }}" method="POST">
                {{ csrf_field() }}
              </form>
            </li>
            @endif
          </li>
        </ul>
      </li>
    </ul>
  </nav><!-- .nav-menu -->
</div>
<script>
  function markNotificationsAsRead() {
    $.get('/unreadNotificationsMarkAsRead');
  };
</script>



  </header><!-- End Header -->





   <!-- ======= Slider Section ======= -->
    <div>

          <img src="{{ asset('user/story/assets/img/offer/offbg1.png') }}" style=" margin-top:-30px; width:100%;" />

        </div>






    </div><!-- End Slider -->


 </div>

        <div class="container" >

              <div class="row" >
                <div class="col-lg-12" >
        <nav class="nav-menu ">
              <ul>
              <li> <a style="font-family:'Lora';font-size:18px;padding-right:1px;"> SUCCESS STORIES  |</a></li>
                <li ><a href="/ouroffer" style="font-family:'Lora';font-size:18px;padding-right:15px;">Offer</a></li>
                <li ><a href="/ourstory" style="font-family:'Lora';font-size:18px;padding-right:15px;">Candidate stories</a></li>
                <li ><a href="/video" style="font-family:'Lora';font-size:18px;padding-right:15px;">Video</a></li>
                <li class="active"><a href="/clientstory" style="font-family:Roboto,Helvetica,Arial,sans-serif;  font-weight:400; font-size:18px; padding-right:15px;">Employer stories</a></li>


              </ul>
            </nav><!-- .nav-menu -->
      </div>

      </div></div>

        <div style="border:1px solid black;"></div>

   <div style="border:1px solid black; margin-top:-100px;"></div>

   </br> </br>







  <main id="main">


  <section class="team">
        <div class="container">

          <div class="row">
                <div class="col-lg-12 col-md-12 text-center">

    <h2 style="font-family:'Lora',serif;  font-weight:700; font-size:50px; ">Discover what our clients say.</h2>
</div>
</br></br>
            <div class="col-lg-6 col-md-6">

    <img src="{{ asset('user/story/assets/img/offer/business.jpg') }}"class="img-fluid" alt="" style="margin-top:30px;">

</div>


      <div class="col-lg-6 col-md-6" style="margin-top:30px;">
      <div style="float:left;">
 <img src="{{ asset('user/story/assets/img/offer/yinhao1.png') }}" style="height:20px; margin-top:-15px;"></div>
    <p style="font-size:18px;" >We love 51 Careers! We have a long relationship with 51 Careers. We have first a very good relationship because it’s really been a win-win. 51 Careers invests in first understanding what our needs are and then trying to deliver on those needs. Of course, let us make all final decisions. We’ve been very happy with the results</p>
    <p style="font-weight:bold; font-size:18px;">  J.M  ·  Investment Banking  · New York, NY</p>

  <div style="float:left;">
 <img src="{{ asset('user/story/assets/img/offer/yinhao1.png') }}" style="height:20px;margin-top:9px;"></div>
       <p style="margin-top:30px; font-size:18px;"> I have a lot of services that I rely on and work with. 51 Career’s been great. They worked with me right from the beginning and helped with me overcome any kind of objectives I may have had. They are just amazing to work with. So I will continue using them and I have no problem referring 51 Careers.  </p>
        <p style="font-weight:bold; font-size:18px;">  R.B  ·  Financial Services ·  New York, NY</p>
</div>
</div>



</div></div>
</section>


<main>
 <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
             <img src="{{ asset('user/story/assets/img/51bicon.png') }}" class="img-fluid" alt="">
            <a href="https://youtu.be/C4g4p-fyXfQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">

              <h4  style="font-family:Roboto,Helvetica,Arial,sans-serif;  font-weight:400; font-size:24px; color:black; font-color:black; ">Employer insights in the financial service industry and our service experience</a></h4>

              <p  style="font-size:16px; padding-top:10px;"> Learn more about the employer, financial service industry, employer satisfaction and advice for young professionals.  </p>
            </div>



          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


      <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

          <div class="row">

            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                                      <div class="icon-box">
                                           {{--    <div class="icon"><i class="bx bx-fingerprint"></i></div>--}}
                                           <h4  style="font-family:Roboto,Helvetica,Arial,sans-serif;  font-weight:400; font-size:24px; color:black; font-color:black; ">Employer insights in the investment banking industry and our service experience </a></h4>
                                          <p  style="font-size:16px; padding-top:10px;"> Learn more about the employer, investment banking industry, employer satisfaction and advice for young professionals. </p>
                                         </div>



                                       </div>
            <div class="col-lg-6 video-box">
               <img src="{{ asset('user/story/assets/img/51bicon.png') }}" class="img-fluid" alt="">
              <a href="https://youtu.be/C4g4p-fyXfQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>


          </div>

        </div>
      </section><!-- End Why Us Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          @include('user/layouts/footer')
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>




        <!-- Vendor JS Files -->
        <script src="{{ asset('user/story/assets/vendor/jquery/jquery.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/jquery.easing/jquery.easing.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/php-email-form/validate.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/venobox/venobox.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/waypoints/jquery.waypoints.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/counterup/counterup.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/owl.carousel/owl.carousel.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" ></script>
        <script src="{{ asset('user/story/assets/vendor/aos/aos.js') }}" ></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('user/story/assets/js/main.js') }}" ></script>

      </body>

      </html>

