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
  @include('user/layouts/head')


</head>

<body data-spy="scroll" data-target="#navbar-example">

   @include('user/layouts/header')
  <main id="main">

<div id="home" class="slider-area">
    <div class="bend niceties preview-2">


   <img src="{{ asset('user/img/background/joinusbg.jpg')}}" alt="" title="#slider-direction-1"  width="100%;"/>
 {{--  <img src="{{ asset('user/story/assets/img/offer/offbg1.png') }}" style=" height:790px; width:100%;" />--}}

   <div class="text-center" >

       <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px;background:#black; ">VIDEO </h2>

                                           </div>
</div>
</div>



<br><br><br><br><br><br>


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
                                 <input type="search" name="search" placeholder="search video title...">
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
