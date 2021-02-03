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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">



<div class="container d-flex">
  <div class="mr-auto">
    <img src="{{ asset('user/img/51careerlogo1.png') }}" alt="" style="max-height: 50px; transform: translateY(-6px);"/>
  </div>
  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li><a href="/home">Home</a></li>
      <li class="active"><a href="ourservice">Service</a></li>
      <li><a href="ourstory">Success Stories</a></li>
      <li><a href="/job">Job Board</a></li>
      <li><a href="/post">Blog</a></li>
      <li class="drop-down">
        <a href="aboutus">Our Company</a>
        <ul>
          <li><a href="aboutus">About Us</a></li>
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

          <img src="{{ asset('user/img/service/blueservice.jpg') }}" style=" margin-top:-130px; height:600px; width:100%;" />
           <div class="text-center">

    <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">OUR  &nbsp; SERVICE</h2>

                                           </div>

        </div>
</br></br></br>

  <main id="main">




</br></br></br>
    <!-- ======= About Section ======= -->
      <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="well-left">
                      <div style="border: 0.5px solid gray;width:100px;height:0; margin-left:45%;"></div>
                      </br>
                           <div class="text-center">

                                   <h2 style="font-family:'Lora'; font-weight:bold; font-size:40px; ">OUR PROGRAMS</h2>

                                 </div>
                      </div>
                    </div>


          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->


<section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box1 icon-box-pink">


              <img src="{{ asset('user/img/service/ser1.png') }}" style=" height:40%;width:100%;"/>
              </br> </br>

              <h4 class="title" >1-on-1 Career Coaching</h4>
                <hr />
               <div style="text-align:left;">
              <h8 style="text-align:left;font-weight:bold;">Target Audience:</h8>

            <ul style="font-size:16px; padding-left:20px;">
                <li >Job Seekers who need topic-based career coaching</li>

            </ul>


             <h8 style="text-align:left;font-weight:bold;">​Service：</h8>

                        <ul style="font-size:16px; padding-left:20px;">
                            <li >Personalized 1-on-1 coaching session</li>
                            <li >One session is 60 minutes</li>
                        </ul>
</br></br></br></br>
                <h8 style="text-align:left;font-weight:bold;">​​Membership：</h8>

             </div>

            </div>
          </div>





    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
               <div class="icon-box1 icon-box-pink">


                 <img src="{{ asset('user/img/service/ser2.png') }}" style=" height:39%;width:100%;"/>
                 </br> </br>

                 <h4 class="title">​Guaranteed Internship Interview</h4>
                   <hr />
                  <div style="text-align:left;">
                 <h8 style="text-align:left;font-weight:bold;">Target Audience:</h8>

               <ul style="font-size:16px; padding-left:20px;">
                   <li >Junior, senior college students</li>
                     <li >Graduate students </li>
               </ul>


                <h8 style="text-align:left;font-weight:bold;">​Service：</h8>

                           <ul style="font-size:16px; padding-left:20px;">
                               <li >Personalized 1-on-1 coaching sessions ( 5 hours in total )</li>
                               <li >Job Referral</li>
                                <li >Guaranteed internship interview at large companies</li>
                           </ul>
</br>
                   <h8 style="text-align:left;font-weight:bold;">​​Membership：3 months​ </h8>

                </div>

               </div>
             </div>

     <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="icon-box1 icon-box-pink">


                       <img src="{{ asset('user/img/service/ser3.png') }}" style=" height:39%;width:100%;"/>
                       </br> </br>

                       <h4 class="title">Guaranteed Internship Offer</h4>
                         <hr />
                        <div style="text-align:left;">
                       <h8 style="text-align:left;font-weight:bold;">Target Audience:</h8>

                     <ul style="font-size:16px; padding-left:20px;">
                         <li >College students</li>
                         <li >Graduate students </li>
                     </ul>


                      <h8 style="text-align:left;font-weight:bold;">​Service：</h8>

                                 <ul style="font-size:16px; padding-left:20px;">
                                     <li >Personalized 1-on-1 coaching sessions ( 5 hours in total)</li>
                                     <li >Job Referral</li>
                                     <li >Guaranteed internship offer</li>

                                 </ul>
</br></br>
                         <h8 style="text-align:left;font-weight:bold;">​​Membership：3 months​</h8>

                      </div>

                     </div>
                   </div>

   <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="icon-box icon-box-pink">


                       <img src="{{ asset('user/img/service/ser4.png') }}" style=" height:39%;width:100%;"/>
                       </br> </br>

                       <h4 class="title">​Guaranteed Full-time Interview</h4>
                         <hr />
                        <div style="text-align:left;">
                       <h8 style="text-align:left;font-weight:bold; ">Target Audience:</h8>

                     <ul style="font-size:16px; padding-left:20px;">
                         <li >College, graduate students in the final year of study</li>
                         <li >Job seekers who are seeking further career advancement </li>
                     </ul>


                      <h8 style="text-align:left;font-weight:bold;">​Service：</h8>

                                 <ul style="font-size:16px; padding-left:20px;">
                                     <li >Personalized 1-on-1 coaching sessions ( 10 hours in total )</li>
                                     <li >Job Referral</li>
                                     <li >Guaranteed full-time interview at large companies</li>

                                 </ul>
</br>
                         <h8 style="text-align:left;font-weight:bold;">​​Membership：3 months​</h8>

                      </div>

                     </div>
                   </div>

   <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="icon-box icon-box-pink">


                       <img src="{{ asset('user/img/service/ser5.png') }}" style=" height:39%;width:100%;"/>
                       </br> </br>

                       <h4 class="title">​Guaranteed Full-time Offer</h4>
                         <hr />
                        <div style="text-align:left;">
                       <h8 style="text-align:left;font-weight:bold;">Target Audience:</h8>

                     <ul style="font-size:16px; padding-left:20px;">
                         <li >College, graduate students in the final year of study</li>
                         <li >Recent graduates</li>
                          <li >Job seekers who already have jobs, seeking to start new careers</li>
                     </ul>


                      <h8 style="text-align:left;font-weight:bold;">​Service：</h8>

                                 <ul style="font-size:16px; padding-left:20px;">
                                     <li >Personalized 1-on-1 coaching sessions ( 10 hours in total )</li>
                                     <li >Job Referral</li>
                                     <li >Guaranteed full-time offer</li>

                                 </ul>
</br>
                         <h8 style="text-align:left;font-weight:bold;">​​Membership：12 months​</h8>

                      </div>

                     </div>
                   </div>



   <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="icon-box icon-box-pink">


                       <img src="{{ asset('user/img/service/ser6.png') }}" style=" height:40%;width:100%;"/>
                       </br> </br>

                       <h4 class="title">​​VIP</h4>
                         <hr />
                        <div style="text-align:left;">
                       <h8 style="text-align:left;font-weight:bold;">Target Audience:</h8>

                     <ul style="font-size:16px; padding-left:20px;">
                         <li >College, graduate students who would graduate in two years, seeking long-term career guidance and desiring to build a successful career path</li>

                     </ul>
                     </br>



                      <h8 style="text-align:left;font-weight:bold;">​Service：</h8>

                                 <ul style="font-size:16px; padding-left:20px;">
                                     <li >Personalized 1-on-1 coaching sessions ( 10 hours in total )</li>
                                     <li >Job Referral</li>
                                     <li >Guaranteed internship offer</li>
                                      <li >Guaranteed full-time offer</li>

                                 </ul>

                         <h8 style="text-align:left;font-weight:bold;">​​Membership：24 months​</h8>

                      </div>

                     </div>
                   </div>



        </div>

      </div>
    </section><!-- End Services Section -->






  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer>

 @include('user/layouts/footer')
  </footer><!-- End  Footer -->

 @include('user/layouts/vendorjsfiles')

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
