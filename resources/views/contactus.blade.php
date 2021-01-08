<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Moderna Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>

        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home <i class="la la-angle-down"></i></a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li class="active"><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

    <footer>

   @include('user/layouts/footer')
    </footer><!-- End  Footer -->

   @include('user/layouts/vendorjsfiles')

</body>

</html>
=======
  @include('user/layouts/head')

<body data-spy="scroll" data-target="#navbar-example">


<style>
hr{
background-color: black;
border:none;
height: 0.5px;
}


h2,h3.h4.h5,p
{
font-family:'Lora';
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



  <main id="main">


 <div>

          <img src="{{ asset('user/img/background/joinusbg.jpg') }}" style=" margin-top:-80px;" />
            <div class="text-center">

         <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">CONTACT  &nbsp; US</h2>

                                                </div>


</br></br></br></br></br></br>





  <div class="container" >

        <div class="row" >
          <div class="col-lg-12" >
  <nav class="nav-menu ">
        <ul>
        <li> <a style="font-family:'Lora';font-size:26px;padding-right:30px;"> Our Company   |</a></li>
          <li ><a href="/aboutus" style="font-family:'Lora';font-size:26px;padding-right:30px;">About Us</a></li>
          <li ><a href="/joinus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Join Us</a></li>
          <li class="active"><a href="/contactus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->
</div>

</div></div>

  <div style="border:1px solid black;"></div>




    <!-- ======= About Section ======= -->
      <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7 col-xs-7">
             <div class="col-md-4 col-sm-4 col-xs-4"> </div>
             <div class="col-md-8 col-sm-8 col-xs-8">
                      <div class="well-left">
                           <div class=" text-left">
                             <div style="border: 1px solid black;width:100px;height:0;margin-left:1px;"></div>
                             </br>
                                   <h2>Contact Us</h2>
                                  <h3 style="font-size:15px;text-align:left; font-weight:normal;line-height:20px;">

                               Thank you for your interest in 51 Careers. Please fill out the form below to submit your inquiry.

                                  </h3>
                                 </div>




                                 <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net"
                                                       action="https://script.google.com/macros/s/AKfycbzudUC4D4FJJNygVRTWgiW5430RaRMKkb7fAZc7kg/exec">


                                                   <div class="form-group">
                                                     <fieldset class="form-field">
                                                       <label for="c_name">*Your Name: </label>
                                                       </br>
                                                       <input id="c_name" name="c_name" style="width:300px; height:40px;" placeholder=" " />
                                                     </fieldset>

                                                     </br>
                                                     <fieldset class="form-field">
                                                       <label for="c_email"><!--<em>Your</em>-->*Your Email:</label>
                                                       </br>
                                                       <input id="c_email" name="c_email" type="email"  style="width:300px; height:40px;" value=""
                                                              required placeholder=""/>
                                                       <span class="email-invalid" style="display:none">
                                                       Must be a valid email address</span>
                                                     </fieldset>


                                                     </br>
                                                     <fieldset class="form-field">
                                                       <label for="c_phone">Phone Number: </label>
                                                       </br>
                                                       <input id="c_phone" name="c_phone" type="phone" style="width:300px; height:40px;" oninput="value=value.replace(/[^\d]/g,'')" placeholder=" " />
                                                     </fieldset>

                                                    </br>
                                                     <fieldset class="form-field">
                                                       <label for="c_school">*Company or School </label>
                                                       </br>
                                                       <input id="c_school" name="c_school" type="school" style="width:300px; height:40px;"  placeholder=" " />
                                                     </fieldset>

                                                     </br>
                                                     <fieldset class="form-field">
                                                       <label for="c_subject">*Subject </label>
                                                     </br>
                                                       <input id="c_subject" name="c_subject"  list="typelist" style="width:300px; height:40px;"
                                                                 placeholder="Please choose "></input>

                                                                 <datalist id="typelist">
                                                                 　　<option>General</option>
                                                                 　　<option>Service Inquiry</option>
                                                                   <option>Partnership Inquiry</option>
                                                                   <option>Join Us</option>
                                                                 </datalist>


                                                     </fieldset>



                                                     </br>
                                                     <fieldset class="form-field">
                                                       <label for="c_message">*Leave Your Message: </label>
                                                     </br>
                                                       <textarea id="c_message" name="c_message"  cols="40" rows="4"
                                                                 placeholder="Tell us what's on your mind..."></textarea>
                                                     </fieldset>


      </br>
   <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>




                                               </br>
                                                     <button class="btn btn-primary " style="color:white; background-color:#000033; border-radius:0px; border: 0px " >
                                                       Send Message</button>
                                                   </div>

                                                   <!-- Customise the Thankyou Message People See when they submit the form: -->



                                                     <div class="thankyou_message" style="display:none;">
                                                         <h2 style="font-size:30px;">Thanks for contacting us!
                                                           We will get back to you soon!</h2>
                                                       </div>


                                                 </form>

</div>

                      </div>
                    </div>

          <div class="col-md-5 col-sm-5 col-xs-5">
            <div class="well-middle">

            </br>
            <hr/>

              <h2 style="font-size:30px;">More ways to connect</h2>

             <h2 style="font-size:20px;font-weight:normal;">Contact us on social media</h2>

             <img src="{{ asset('user/img/slider/Mia.jpg') }}" alt="" style="height:380px; width:300px;">

                <div style="color:black;">
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                     <a href="#">
                                       <i class="fa fa-linkedin fa-lg" style="color:black;"></i>
                                     </a>&nbsp; &nbsp;


                                   <a href="#">
                                     <i class="fa fa-facebook fa-lg" style="color:black;"></i>
                                   </a>&nbsp; &nbsp;


                                   <a href="#">
                                     <i class="fa fa-instagram fa-lg" style="color:black;"></i>
                                   </a>&nbsp; &nbsp;

                                   <a href="#">
                                     <i class="fa fa-youtube fa-lg" style="color:black;"></i>
                                   </a>&nbsp; &nbsp;

                 </div>
                 </br>   </br>

                  <h2 style="font-size:20px;font-weight:normal; line-height:20px;">Find our office</h2>
                  <h2 style="font-size:15px;font-weight:normal; line-height:20px;">48 Wall St, 11th Fl, New York, NY 10005</h2>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.5246797422033!2d-74.01127398450423!3d40.70646487933251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1656d33e13%3A0x8a5b22162de36c32!2s48%20Wall%20St%2011th%20floor%2C%20New%20York%2C%20NY%2010005!5e0!3m2!1sen!2sus!4v1607548078786!5m2!1sen!2sus" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->















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


</body>

</html>
>>>>>>> origin/new_develop
