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
      <li ><a href="/home1">Home</a></li>
      <li><a href="ourservice">Service</a></li>
      <li class="active"><a href="/ouroffer">Success Stories</a></li>
      <li><a href="/job">Job Board</a></li>
      <li><a href="/post">Blog</a></li>
      <li class="drop-down">
        <a href="aboutus">Our Company</a>
        <ul>
          <li ><a href="aboutus">About Us</a></li>
          <li><a href="joinus">Join Us</a></li>
          <li><a href="contactus">Contact Us</a></li>
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

          <img src="{{ asset('user/story/assets/img/offer/offbg1.png') }}" style=" margin-top:-30px;" />

        </div>






    </div><!-- End Slider -->


 </div>

        <div class="container" >

              <div class="row" >
                <div class="col-lg-12" >
        <nav class="nav-menu ">
              <ul>
              <li> <a style="font-family:'Lora';font-size:26px;padding-right:30px;"> Success Stories  |</a></li>
                <li class="active"><a href="/ouroffer" style="font-family:'Lora';font-size:26px;padding-right:30px;">Offer</a></li>
                <li><a href="/ourstory" style="font-family:'Lora';font-size:26px;padding-right:30px;">Our Story</a></li>
                <li ><a href="/video" style="font-family:'Lora';font-size:26px;padding-right:30px;">Video</a></li>

              </ul>
            </nav><!-- .nav-menu -->
      </div>

      </div></div>

        <div style="border:1px solid black;"></div>

   <div style="border:1px solid black; margin-top:-100px;"></div>

   </br> </br>
  <main id="main">





    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">









        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/offtest111.jpg') }}"class="img-fluid" alt="" >
              <div class="portfolio-info">
                <h3><a href="{{ asset('user/story/assets/img/offer/offtest1.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 1">off 1</a></h3>
               <a href="{{ asset('user/story/assets/img/offer/offtest1.jpg') }}" style="height:100px;" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus"></i></a>
                           </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/off611.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="{{ asset('user/story/assets/img/offer/off6.jpg') }}"data-gall="portfolioGallery" class="venobox" title="Web 3">off 2</a></h3>
                <a href="{{ asset('user/story/assets/img/offer/offtest1.jpg') }}"data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/off511.jpg') }}"class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href"{{ asset('user/story/assets/img/offer/off5.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 2">off 3</a></h3>
                <a href="{{ asset('user/story/assets/img/offer/off6.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/off211.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="{{ asset('user/story/assets/img/offer/off2.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 2">>off 2</a></h3>
                <a href="{{ asset('user/story/assets/img/offer/off2.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/off311.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="{{ asset('user/story/assets/img/offer/off3.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 2">>off 2</a></h3>
                <a href="{{ asset('user/story/assets/img/offer/off3.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/off611.jpg') }}"  class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="{{ asset('user/story/assets/img/offer/off6.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 3">>off 2</a></h3>
                <a href="{{ asset('user/story/assets/img/offer/off6.jpg') }}"  data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="{{ asset('user/story/assets/img/offer/off711.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="{{ asset('user/story/assets/img/offer/off7.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 1">>off 2</a></h3>
                <a href="{{ asset('user/story/assets/img/offer/off7.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>



          </div>





      </div>
    </section><!-- End Portfolio Section -->








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