<!DOCTYPE html>
<html lang="en">

<head>
 @include('user.layouts.head')

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- Header -->
  @include('user/layouts/header')
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

              <img src="{{ asset('user/img/background/joinusbg.jpg') }}" />
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
                      <input type="search" name="search" placeholder="search post title...">
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



{{--
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
                            </div>--}}






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

    @include('user/layouts/footer')

   @include('user.layouts.vendorjsfiles')


  </body>

  </html>
  <script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script>
