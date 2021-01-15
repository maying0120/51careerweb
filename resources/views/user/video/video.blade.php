<!DOCTYPE html>
<html lang="en">

<head>
 @include('user.layouts.head')
   <link href="{{ asset('user/vedio/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('user/vedio/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
   <link href="{{ asset('user/vedio/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
   <link href="{{ asset('user/vedio/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('user/vedio/vendor/venobox/venobox.css') }}" rel="stylesheet">
   <link href="{{ asset('user/vedio/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
   <link href="{{ asset('user/vedio/vendor/aos/aos.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('user/vedio/css/style.css') }}" rel="stylesheet">
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
<div class="container d-flex">
  <div class="mr-auto">
    <img src="{{ asset('user/img/51careerlogo1.png') }}" alt="" style="max-height: 50px; transform: translateY(-6px);"/>
  </div>
  <nav class="nav-menu d-none d-lg-block" style>
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

  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div>

          <img src="{{ asset('user/story/assets/img/offer/offbg1.png') }}" style=" margin-top:-100px;" />

        </div>


        <div class="container" >

              <div class="row" >
                <div class="col-lg-12" >
        <nav class="nav-menu ">
              <ul>
              <li> <a style="font-family:'Lora';font-size:26px;padding-right:30px;"> Success Stories  |</a></li>
                <li ><a href="/ouroffer" style="font-family:'Lora';font-size:26px;padding-right:30px;">Offer</a></li>
                <li><a href="/ourstory" style="font-family:'Lora';font-size:26px;padding-right:30px;">Our Story</a></li>
                <li class="active"><a href="/video" style="font-family:'Lora';font-size:26px;padding-right:30px;">Video</a></li>

              </ul>
            </nav><!-- .nav-menu -->
      </div>

      </div></div>

        <div style="border:1px solid black;"></div>

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                       <form action="/video/search" method="get">
                               <div class="search-option">
                                 <input type="search" name="search" placeholder="Search...">
                                 <button class="button" type="submit">
                                   <i class="fa fa-search"></i>
                                 </button>
                               </div>
                             </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->

              </div>
           {{--   <div class="single-blog-page">
                <div class="left-blog">
                  <h4>categories</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <a href="#">wordpress</a>
                    </li>
                    <li>
                      <a href="#">Joomla</a>
                    </li>
                    <li>
                      <a href="#">Html</a>
                    </li>
                    <li>
                      <a href="#">Website</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>archive</h4>
                  <ul>
                    <li>
                      <a href="#">07 July 2016</a>
                    </li>
                    <li>
                      <a href="#">29 June 2016</a>
                    </li>
                    <li>
                      <a href="#">13 May 2016</a>
                    </li>
                    <li>
                      <a href="#">20 March 2016</a>
                    </li>
                    <li>
                      <a href="#">09 Fabruary 2016</a>
                    </li>
                  </ul>
                </div>
              </div> --}}

               <div class="single-blog-page">
                                    <div class="left-blog">
                                      <h4>Month</h4>


                                      <ul>
                                       @foreach($archives as $stats)
                                        <li>
                                          <a href="/video/?month={{ $stats['month'] }}&year={{  $stats['year'] }}">

                                           {{ $stats['month'].' '. $stats['year'] }} </a>
                                        </li>
                                       @endforeach

                                        <li>
                                                           <h5 > <a href="/video">See All Videos</a> </h5>
                                                            </li>
                                      </ul>
                                    </div>
                                  </div>







                  <div class="single-blog-page">
                              <div class="left-blog">
                                <h4>Categories</h4>


                                <ul>
                                 @foreach($vcategories as $vcategory)
                                  <li>
                                    <a href="/videos/{{ $vcategory->name }}">

                                     {{ $vcategory->name}} </a>
                                  </li>
                                 @endforeach

                                  <li>
                                   <h5 > <a href="/video">See All Videos</a> </h5>
                                                      </li>
                                </ul>
                              </div>
                            </div>



{{--
              <div class="single-blog-page">
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                      <li>
                        <a href="#">Portfolio</a>
                      </li>
                      <li>
                        <a href="#">Project</a>
                      </li>
                      <li>
                        <a href="#">Design</a>
                      </li>
                      <li>
                        <a href="#">Website</a>
                      </li>
                      <li>
                        <a href="#">Joomla</a>
                      </li>
                      <li>
                        <a href="#">Html</a>
                      </li>
                      <li>
                        <a href="#">wordpress</a>
                      </li>
                      <li>
                        <a href="#">Masonry</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              --}}

            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
  @foreach ($videos as $video)
                <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                   <div class="container">

                     <div class="row">


                       <div class="col-lg-6 video-box">



                         <img src="{{ Storage::disk('local')->url($video->image) }}" class="img-fluid" alt="">
                      <a href="{{ route('video',$video->body) }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
   {{--


                     <div class="media-body">
                                {!! Embed::make($video->bodys)->parseUrl()->getIframe() !!}
                            </div>  --}}


                       {{--       <a src="{{$video->body}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}


                       </div>



                       <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                         <div class="icon-box">

                           <div class="icon"><i class="fab fa-hotjar"></i></div>
                           <h4 class="title"><a href="">{{ $video->title }}</a></h4>
                           <p class="description">{{ $video->subtitle }}</p>

                          {{--  <h4 class="title"><a href="">ttttt{{$video->body}}</a></h4>  --}}
                         </div>

                       </div>
                     </div>

                   </div>

                 </section>
                 </br>
                  </br>
                   </br>
 @endforeach




{{--
                          <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                                    <div class="container">

                                      <div class="row">
                                        <div class="col-lg-6 video-box">
                                          <img src="{{ asset('user/img/portfolio/2.jpg' ) }}" class="img-fluid" alt="">
                                          <a href="https://youtu.be/C4g4p-fyXfQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                                        </div>

                                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                                          <div class="icon-box">
                                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                          </div>


                                        </div>
                                      </div>
                                    </div>
                                  </section>--}}

        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>51</span>career</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                            <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
                <!-- <h4>Instagram</h4>
               <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->
 @include('user.layouts.vendorjsfiles')

  <!-- Vendor JS Files -->
  <script src="{{ asset('user/vedio/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('user/vedio/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user/vedio/js/main.js') }}"></script>

</body>

</html>
