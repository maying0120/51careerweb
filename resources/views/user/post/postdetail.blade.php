<!DOCTYPE html>
<html lang="en">

<head>
 @include('user.layouts.head')

</head>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_CN/sdk.js#xfbml=1&version=v7.0" nonce="XE4x448g"></script>


<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Header ======= -->

   {{--  <div class="header-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                  <h1 class="title2">Blog Details </h1>
                </div>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                  <h2 class="title3">profesional Blog Page</h2>
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

             <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">Post</h2>

                                                    </div>

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding" style="margin-top:200px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
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
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
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
              </div>
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
                        <a href="#">wordpress</a>
                      </li>
                      <li>
                        <a href="#">Joomla</a>
                      </li>
                      <li>
                        <a href="#">Html</a>
                      </li>
                      <li>
                        <a href="#">Masonry</a>
                      </li>
                      <li>
                        <a href="#">Website</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <div class="post-thumbnail">
                    <img src="assets/img/blog/6.jpg" alt="" />
                  </div>
                  <div class="post-information">
                    <h2>{{$post->title}}</h2>


                    <div class="entry-meta">
                      <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                      <span><i class="fa fa-clock-o"></i> {{$post->created_at}}</span>
                      <span class="tag-meta">
                        <i class="fa fa-folder-o"></i>

                                @foreach ($post->categories as $category)
                                 <a href="">{{ $category->name }}</a>
                                @endforeach
                      </span>
                      <span>
                        <i class="fa fa-tags"></i>

                        @foreach ($post->tags as $tag)
                         <a href="">{{ $tag->name }}</a>
                        @endforeach

                      </span>
                      <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                    </div>
                    <div class="entry-content">
                      {!! htmlspecialchars_decode($post->body) !!}
                    </div>

 <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="1" data-width=""></div>


                   </div>
                </article>
                <div class="clear"></div>
                <div class="single-post-comments">
                  <div class="comments-area">
                    <div class="comments-heading">
                      <h3>6 comments</h3>
                    </div>
                    <div class="comments-list">
                      <ul>
                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">admin</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                            </div>
                          </div>
                        </li>
                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply </h3>
                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                    <form action="#">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <p>Name *</p>
                          <input type="text" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <p>Email *</p>
                          <input type="email" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <p>Website</p>
                          <input type="text" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                          <p>Website</p>
                          <textarea id="message-box" cols="30" rows="10"></textarea>
                          <input type="submit" value="Post Comment" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- single-blog end -->
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
                  <h2><span>e</span>Business</h2>
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
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">



            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

 @include('user.layouts.vendorjsfiles')

</body>

</html>
