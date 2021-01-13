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
      <li class="active"><a href="ourstory">Success Stories</a></li>
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


 <section class="portfolio" >
      <div class="container" >

        <div class="row" >
          <div class="col-lg-12" >

            <ul id="portfolio-flters" style="text-align:left; margin-top:-40px; margin-left:-30px; ">
  <li ><h2 style="font-family:'Lora'; font-size:20px; font-weight:bold; ">OUR STORIES </h2></li>

                <li ><a1 href="#"  onclick="show1()"><h2 style="font-family:'Lora'; font-size:20px; ">Offers</h2> </a1></li>
                 <li ><a1 href="#"  onclick="show2()"> <h2 style="font-family:'Lora'; font-size:20px; ">Stories</h2></a1></li>
                  <li ><a1 href="#" onclick="show3()"> <h2 style="font-family:'Lora'; font-size:20px;">Videos</h2></a1></li>

            </ul>

          </div>

  </div>
</section>

 </div>


   <div style="border:1px solid black; margin-top:-100px;"></div>
  <main id="main">





    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">


       {{--  <div class="row">
           <div class="col-lg-12">
            <ul id="portfolio-flters">


                <li ><a href="#"  onclick="show1()"><h2>Offers</h2> </a></li>
                 <li ><a href="#"  onclick="show2()"> <h2>Stories</h2></a></li>
                  <li ><a href="#" onclick="show3()"> <h2>Videos</h2></a></li>



            </ul>

          </div>
        </div>--}}









        <div style="display:block" id="div1">

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

      {{--    <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3">>off 2</a></h3>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 1">>off 2</a></h3>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div> --}}

        </div>

          </div>


<div style="display:none" id="div2">
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">

                <img src="{{ asset('user/story/assets/img/offer/example1.png') }}" class="img-fluid" alt="">
              {{-- <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>--}}
              </div>
              <div class="member-info">
                <h4>person A </h4>
                <span>** Offer</span>
                <p>This is the test A Reputable Career Consulting Brand.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('user/story/assets/img/offer/example1.png') }}" class="img-fluid" alt="">
              {{--   <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>person A </h4>
                <span>** Offer</span>
                <p>This is the test A Reputable Career Consulting Brand.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('user/story/assets/img/offer/example1.png') }}" class="img-fluid" alt="">
            {{--   <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>--}}
              </div>
              <div class="member-info">
                <h4>person A </h4>
                <span>** Offer</span>
                <p>This is the test A Reputable Career Consulting Brand.</p>

            </div>
          </div> </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('user/story/assets/img/offer/example1.png') }}" class="img-fluid" alt="">
             {{-- <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>--}}
              </div>
              <div class="member-info">


              <h4>person A </h4>
                             <span>** Offer</span>
                             <p>This is the test A Reputable Career Consulting Brand.</p>

                        </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('user/story/assets/img/offer/example1.png') }}" class="img-fluid" alt="">
              {{-- <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>--}}
              </div>
              <div class="member-info">


               <h4>person A </h4>
                              <span>** Offer</span>
                              <p>This is the test A Reputable Career Consulting Brand.</p>

                       </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('user/story/assets/img/offer/example1.png') }}"class="img-fluid" alt="">
             {{--   <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>--}}
              </div>
              <div class="member-info">

        <h4>person A </h4>
                       <span>** Offer</span>
                       <p>This is the test A Reputable Career Consulting Brand.</p>

                     </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

</div>


{{--
<div style="display:none" id="div3">

  <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('user/story/assets/img/service-details-3.jpg') }}" alt="...">

              </div>

                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>

              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('user/story/assets/img/service-details-3.jpg') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('user/story/assets/img/service-details-3.jpg') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('user/story/assets/img/service-details-3.jpg') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Care</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->




</div>--}}


<div style="display:none" id="div3">




    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
             <img src="{{ asset('user/story/assets/img/service-details-3.jpg') }}" class="img-fluid" alt="">
            <a href="https://youtu.be/C4g4p-fyXfQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Introduce</a></h4>
              <p class="description">Our company </p>
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
                                           <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                           <h4 class="title"><a href="">Introduce</a></h4>
                                           <p class="description">Our company </p>
                                         </div>



                                       </div>
            <div class="col-lg-6 video-box">
               <img src="{{ asset('user/story/assets/img/service-details-3.jpg') }}" class="img-fluid" alt="">
              <a href="https://youtu.be/C4g4p-fyXfQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>


          </div>

        </div>
      </section><!-- End Why Us Section -->




</div>




      </div>
    </section><!-- End Portfolio Section -->








  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    @include('user/layouts/footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>




  <script>
  function show1(){
  document.getElementById("div1").style.display="block";
  document.getElementById("div2").style.display="none";
  document.getElementById("div3").style.display="none";
  };
  function show2()
  {
  document.getElementById("div2").style.display="block";
  document.getElementById("div1").style.display="none";
  document.getElementById("div3").style.display="none";
  }

    function show3()
    {
    document.getElementById("div3").style.display="block";
    document.getElementById("div1").style.display="none";
    document.getElementById("div2").style.display="none";
    }


  </script>


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