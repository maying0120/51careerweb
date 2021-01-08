<!DOCTYPE html>
<html lang="en">


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


  @include('user/layouts/head')

<body data-spy="scroll" data-target="#navbar-example">


<style>
hr{
background-color: black;
border:none;
height: 0.5px;
}

h2
{
font-family:'Lora';
}


h3
{
font-family:'Lora';
color:black;
}


h4
{
font-family:'Lora';
font-size:13px;
}

</style>


  <script src='https://www.google.com/recaptcha/api.js'></script>



    <script data-cfasync="false" type="text/javascript" src="{{ asset('user/js/form-submission-handler.js') }}"></script>

  <script src="{{ asset('user/vendor/aos/aos.js') }}"></script>

<script>
    (function(d, w, c) {
        w.ChatraID = 'TjSQeyfYP6ipurbem';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
         <div class="mr-auto">
           <img src="{{ asset('user/img/51careerlogo1.png') }}" alt="" style="max-height: 50px; transform: translateY(-6px);"/>
         </div>
         <nav class="nav-menu d-none d-lg-block">
           <ul>
             <li ><a href="/home1">Home</a></li>
             <li><a href="ourservice">Service</a></li>
             <li><a href="ourstory">Success Stories</a></li>
             <li><a href="/job">Job Board</a></li>
             <li><a href="/post">Blog</a></li>
             <li class="drop-down active">
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

  <main id="main">

 <div>

          <img src="{{ asset('user/img/background/joinusbg.jpg') }}" style=" margin-top:-80px;" />
            <div class="text-center">

         <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">JOIN  &nbsp; US</h2>

                                                </div>

        </div>




</br></br></br>  </br></br></br>
  <div class="container" >

        <div class="row" >
          <div class="col-lg-12" >
  <nav class="nav-menu ">
        <ul>
        <li> <a style="font-family:'Lora';font-size:26px;padding-right:30px;"> Our Company   |</a></li>
          <li ><a href="/aboutus" style="font-family:'Lora';font-size:26px;padding-right:30px;">About Us</a></li>
          <li class="active"><a href="/joinus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Join Us</a></li>
          <li><a href="/contactus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->
</div>

</div></div>

  <div style="border:1px solid black;"></div>


</br></br></br>  </br></br></br>
      <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">


                      <div class="well-left">
                           <div class=" text-center">



      <div style="border: 0.5px solid black; width:80px; height:0;margin-left:45%;"></div>
                                 </br>
                          <h2 style="font-size:46px;" >Join Us</h2>




                      </div>
                    </div>


          <!-- End col-->
        </div>
      </div>
    </div>
 </br></br></br> </br>
   <img src="{{ asset('user/img/about/jpinus.png') }}"  style="width:100%" alt="">

{{--
    <!-- ======= About Section ======= -->
      <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">

 <div class="col-md-1 col-sm-1 col-xs-1">

</div>


          <div class="col-md-5 col-sm-5 col-xs-5">


                      <div class="well-left">
                           <div class=" text-left">

                                  <h3 style="font-size:20px;text-align:left; font-weight:normal;line-height:30px;">

                                     51 Careers is run by a dedicated, passionate team of people who challenge you, support you, and inspire you to be extraordinary. Join our team today!
                                     </h3>
                                 </div>



                      </div>
                    </div>

 <div class="col-md-1 col-sm-1 col-xs-1">

</div>

                    <div class="col-md-5 col-sm-5 col-xs-5">


                                      <div class="well-left">

                 <img src="{{ asset('user/img/service/b1.png') }}" style=" height:300px; margin-top:-30px;" />

                                      </div>
                                    </div>




          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->
--}}

 </br></br></br> </br>

      <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">


                      <div class="well-left">
                           <div class=" text-center">



      <div style="border: 0.5px solid black; width:80px; height:0;margin-left:45%;"></div>
                                 </br>
                          <h2 style="font-size:46px;">Current  Openings</h2>




                      </div>
                    </div>


          <!-- End col-->
        </div>
      </div>
    </div>







  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-12" >

            <div class="row">

              <div class="col-md-4">
                <div class="info-box" style="text-align:left; padding-left:20px;padding-right:10px;">

                  <h4>ADMINISTRATION </h4>
                  <h3 style="color:black;">Senior Director, Human Resource & Administration </h3>
                  <p style="color:black;">New York, NY</p>
                    <h3 style="color:black;">Marketing Intern</h3>
                    <a  href="/jobreq"  style="text-align:left; color:#2557A7;">Learn More -></a>
                </div>
              </div>

            <div class="col-md-4">
                           <div class="info-box" style="text-align:left; padding-left:20px;padding-right:10px;">

                             <h4>FIANCE </h4>
                             <h3 style="color:black;">Controller </h3>
                             <p style="color:black;">New York, NY</p>
                               <h3 style="color:black;">Business Development Intern</h3>

                                </br> </br>
                               <a  href="/jobreq"  style="text-align:left; color:#2557A7;">Learn More -></a>

                           </div>
                         </div>

            <div class="col-md-4">
                           <div class="info-box" style="text-align:left; padding-left:20px;padding-right:10px;">

                             <h4>DEVELOPMENT </h4>
                             <h3 style="color:black;">Senior Director, Human Resource & Administration </h3>
                             <p style="color:black;">New York, NY</p>
                               <h3 style="color:black;">Major Gifts Officer</h3>
                               <a  href="/jobreq"  style="text-align:left; color:#2557A7;">Learn More -></a>
                           </div>
                         </div>


            </div>

          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->








              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->

            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
<!--    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our eBusiness company</h3>
              <a class="sus-btn" href="#">Get A quate</a>
            </div>
          </div>
        </div>
      </div>
    </div>
-->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer>

 @include('user/layouts/footer')
  </footer><!-- End  Footer -->

 @include('user/layouts/vendorjsfiles')


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
  <script src="{{ asset('user/story/assets/js/main.js') }}" ></script
</body>

</html>
