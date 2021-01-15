<!DOCTYPE html>
<html lang="en">

<head>
 @include('user.layouts.head')

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
 <div class="container d-flex">
   <div class="mr-auto">
     <img src="{{ asset('user/img/51careerlogo1.png') }}" alt="" style="max-height: 50px; transform: translateY(-6px);"/>
   </div>
   <nav class="nav-menu d-none d-lg-block">
     <ul>
       <li ><a href="/home1">Home</a></li>
       <li><a href="/ourservice">Service</a></li>
       <li><a href="/ourstory">Success Stories</a></li>
       <li><a href="/job">Job Board</a></li>
       <li class="active"><a href="/post">Blog</a></li>
       <li class="drop-down">
         <a href="aboutus">Our Company</a>
         <ul>
           <li><a href="/aboutus">About Us</a></li>
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

  <main id="main">

    <!-- ======= Blog Header ======= -->
    {{-- <div class="header-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                  <h1 class="title2">My Blog</h1>
                </div>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                  <h2 class="title3">Profesional Blog Page</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->--}}


     <div>

              <img src="{{ asset('user/img/background/joinusbg.jpg') }}" style=" margin-top:-80px;" />
                <div class="text-center">

             <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">POST</h2>

                                                    </div>
</br></br></br></br></br>
   <!-- ======= Blog Page ======= -->
      <div class="blog-page area-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="page-head-blog">
                <div class="single-blog-page">
                  <!-- search option start -->
                  <form action="/post/search" method="get">
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
               {{--   <div class="left-blog">
                    <h4>recent post</h4>
                    <div class="recent-post">
                      <!-- start single post -->
                      <div class="recent-single-post">
                        <div class="post-img">
                          <a href="#">
                            <img src="assets/img/blog/1.jpg" alt="">
                          </a>
                        </div>
                        <div class="pst-content">
                          <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                        </div>
                      </div>
                      <!-- End single post -->
                      <!-- start single post -->
                      <div class="recent-single-post">
                        <div class="post-img">
                          <a href="#">
                            <img src="assets/img/blog/2.jpg" alt="">
                          </a>
                        </div>
                        <div class="pst-content">
                          <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                        </div>
                      </div>
                      <!-- End single post -->
                      <!-- start single post -->
                      <div class="recent-single-post">
                        <div class="post-img">
                          <a href="#">
                            <img src="assets/img/blog/3.jpg" alt="">
                          </a>
                        </div>
                        <div class="pst-content">
                          <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                        </div>
                      </div>
                      <!-- End single post -->
                      <!-- start single post -->
                      <div class="recent-single-post">
                        <div class="post-img">
                          <a href="#">
                            <img src="assets/img/blog/4.jpg" alt="">
                          </a>
                        </div>
                        <div class="pst-content">
                          <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                        </div>
                      </div>
                      <!-- End single post -->
                    </div>
                  </div>
                  <!-- recent end --> --}}
                </div>
                <div class="single-blog-page">
               {{--   <div class="left-blog">
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
                  </div>--}}
                </div>
                <div class="single-blog-page">
                  <div class="left-blog">
                    <h4>archive</h4>


                    <ul>
                     @foreach($archives as $stats)
                      <li>
                        <a href="/post/?month={{ $stats['month'] }}&year={{  $stats['year'] }}">

                         {{ $stats['month'].' '. $stats['year'] }} </a>
                      </li>
                     @endforeach

                      <li>
                                         <h5 > <a href="/post">See All Articles</a> </h5>
                                          </li>
                    </ul>
                  </div>
                </div>




                <div class="single-blog-page">
                              <div class="left-blog">
                                <h4>Categories</h4>


                                <ul>
                                 @foreach($categories as $category)
                                  <li>
                                    <a href="/posts/{{ $category->name }}">

                                     {{ $category->name}} </a>
                                  </li>
                                 @endforeach

                                  <li>
                                   <h5 > <a href="/post">See All post</a> </h5>
                                                      </li>
                                </ul>
                              </div>
                            </div>






              </div>
            </div>
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                @foreach ($posts as $post)

                  <div class="single-blog">
                    <div class="single-blog-img">
                      <a href="{{ route('post',$post->slug) }}">
                        <img src="{{ Storage::disk('local')->url($post->image) }}" alt="" width="600px" height="400px">
                      </a>
                    </div>
                    <div class="blog-meta">
                      <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                        <a href="#">11 comments</a>



                      </span>
                      <span class="date-type">
                        <i class="fa fa-calendar"></i>{{$post->created_at }}
                      </span>
                    </div>
                    <div class="blog-text">
                      <h4>
                        <a href="{{ route('post',$post->slug) }}">{{ $post->title }}</a>
                      </h4>
                      <p>
                         {{ $post->subtitle }}
                      </p>
                    </div>
                    <span>
                      <a href="{{ route('post',$post->slug) }}" class="ready-btn">Read more</a>
                      </br>
                      </br>
                       </br>
                      </br>
                    </span>
                  </div>

               @endforeach
                </div>
                <!-- End single blog -->

                <div class="blog-pagination">
                  <ul class="pagination">
                  {{ $posts->links() }}


                  </ul>
                </div>
              </div>
            </div>
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


  </body>

  </html>
  <script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script>