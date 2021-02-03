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
  <link rel="stylesheet" type="text/css"href="{{ asset('user/newjob/css/font-awesome.min.css') }}" >
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

    <h2 style="font-family:'Lora',serif; font-weight:700; font-size:82px;  z-index:999; color:white; margin-top:-180px; ">OUR  &nbsp; SERVICE</h2>

                                           </div>

        </div>
</br></br></br>

  <main id="main">




</br></br></br>
    <!-- ======= About Section ======= -->
      <div id="portfolio" class="portfolio-area area-padding fix" style="margin-top:-90px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="well-left">
                      <div style="border: 0.5px solid gray;width:70px;height:0; margin-left:0%;"></div>
                      </br>
                           <div class="text-left" style="margin-top:10px;">

                                   <h2 style="font-family:'Lora',serif;  font-weight:700; font-size:50px; ">OUR PROGRAMS</h2>

                                 </div>
                      </div>
                    </div>


          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->



<section class="services" style="margin-top:-40px;">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box1 icon-box-pink">


              <img src="{{ asset('user/img/service/ser1.png') }}" style=" height:40%;width:100%;"/>
              </br> </br>

              <h4 class="title"  >1-on-1 Career Coaching</h4>
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
</br></br></br>
                <h8 style="text-align:left;font-weight:bold;">​​Membership：</h8>
                </br>


             </div>
             <div style="margin-top:30px;">
                  <a href="{{ asset('user/img/service/IMG_1826.PNG') }}"   data-gall="portfolioGallery" class=" venobox" title="App 1">Learn More -></a>

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

                   <h8 style="text-align:left;font-weight:bold;">​​Membership：3 months​ </h8>

                </div>
        <a href="{{ asset('user/img/service/haobao1.png') }}"  data-gall="portfolioGallery" class=" ready-btn right-btn  venobox" title="App 1">Learn More<i class="icofont-plus"></i></a>

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


                       <img src="{{ asset('user/img/service/ser6.png') }}" style=" height:39%;width:100%;"/>
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





<div style="z-index:-1;height:100%;background-image: url('user/img/service/serviceadbg.png') ; height:100%; background-size:100% 100%;">>
<div class="text-center">
  <h4 class="text-center" style="font-family:lora,serif; font-weight:bold; font-size:58px; color:white; margin-top:50px;">Our Strengths</h4>
</div>
        		<div class="container py-xl-5 py-lg-3" style="margin-top:-30px;" >

        			<div class="row ab-info second pt-lg-4">
        				<div class="col-lg-4 col-sm-4 ab-content  mt-lg-0 mt-4" style="padding-right:30px;">
        					<div class="ab-content-inner" >

        						<div class="ab-info-con" >
        						<div class="text-center">
     <img src="{{ asset('user/img/service/star1.png') }}" alt="" style="height:80px; margin-left:-50px;" >
     </div>
    <h4 class="text-team-w3" style="font-family:'roboto-thin,sans-serif'; font-weight:bold; font-size:30px;color:white; ">Personalized Service</h4>
 </br>

        							<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:17px; line-height:26px; color:white;">
        							<strong style="font-size:20px;"> Identify </strong> jobs and career characteristics that align with your values, interests, skills and personality
                                    	  </p>

<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:17px; line-height:26px; color:white;">
                                    <strong style="font-size:20px;">Set </strong>  clear career goals and define a path for achievement
        							  </p>

        						</div>
        					</div>
        				</div>
        		    				<div class="col-lg-4 col-sm-4 ab-content  mt-lg-0 mt-4" style="padding-right:30px;">
                        					<div class="ab-content-inner" >

                        						<div class="ab-info-con" >
                        						<div class="text-center">
                     <img src="{{ asset('user/img/service/star1.png') }}" alt="" style="height:80px;margin-left:-50px;" >
                     </div>

        						<h4 class="text-team-w3" style="font-family:'roboto-thin,sans-serif'; font-weight:bold; font-size:30px;color:white; ">Company Resources</h4>
                                 </br>

                                        							<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:17px; line-height:26px; color:white;">
                                        							<strong style="font-size:20px;">  Provide </strong>                     thousands of company resources to match with your job search strategies 	    </p>





                                <p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:17px; line-height:26px; color:white;">
                                                                    <strong style="font-size:20px;">Save </strong>  your time and energy on the career process
                                        							  </p>
        						</div>
        					</div>
        				</div>

     				<div class="col-lg-4 col-sm-4 ab-content  mt-lg-0 mt-4" style="padding-right:30px;">
         					<div class="ab-content-inner" >

         						<div class="ab-info-con" >
         						<div class="text-center">
      <img src="{{ asset('user/img/service/iconnew.png') }}" alt="" style="height:50px; margin-left:-50px;" >
      </div>
      </br>

               						<h4 class="text-team-w3" style="font-family:'roboto-thin,sans-serif';  font-weight:bold; font-size:30px;color:white; ">Results-Driven Service </h4>
                                        </br>

                                               							<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:17px; line-height:26px; color:white;">
                                               							<strong style="font-size:20px;">    Develop </strong> interpersonal skills and industry specific knowledge </p>

</br>


                                       <p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:17px; line-height:26px; color:white;">
                                                                           <strong style="font-size:20px;">Implement </strong>  an action plan to achieve your career goals
                                               							  </p>
               						</div>
               					</div>​
               				</div>






        			</div>
        		</div>
        		</div>


<div style="z-index:-1; height:100% ; background-image: url('user/img/service/serviceconnect.jpg') ;  height:100% ; background-size:100% 100%; ">
<div class="container">
    <div class="row">



<div class="col-lg-9 col-md-9 col-sm-9"><h2 class="text-left" style="font-family:'roboto-thin,sans-serif';font-weight:bold; font-size:23px; color:white; padding-top:40px;">Transformation starts here. Let us help you reach your career goals.</h4>

<h2 class="text-left" style="font-family:'roboto-thin,sans-serif'font-family:lora,serif;  font-size:20px; color:white;  padding-top:-1px;">Schedule a free consultation to learn more about our programs. </h2>
</div>


   <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:15px; ">

                 <a class="ready-btn right-btn" href="/aboutus" style="background-color:#3078BE; color:white; border-radius:0px; font-size:23px;" > Let's connect</a>
                 </div>

 </div>
 </br>

 </div></div>

</div>

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
