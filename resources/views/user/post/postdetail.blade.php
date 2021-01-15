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
       <li ><a href="/home">Home</a></li>
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


     <div>

              <img src="{{ asset('user/img/background/joinusbg.jpg') }}" style=" margin-top:-80px;" />
                <div class="text-center">

             <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">{{$post->title}}</h2>

                                                    </div>
</br></br></br></br></br></br>


  <div class="container" >

        <div class="row" >
          <div class="col-lg-12" >
  <nav class="nav-menu ">
        <ul>

          <li class="active"><a href="/post" style="font-family:'Lora';font-size:26px;padding-right:30px;"> <i class="fa fa-arrow-left"></i> Return to all posts</a></li>
          {{-- <li><a href="/joinus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Join Us</a></li>--}}

        </ul>
      </nav><!-- .nav-menu -->
</div>

</div></div>
  <div style="border:1px solid black;"></div>
   <!-- ======= Blog Page ======= -->
      <div class="blog-page area-padding">
        <div class="container">
          <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-2">
          </div>


          <div class="col-md-12 col-sm-12 col-xs-12">

                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <div class="post-thumbnail">
                    <img src="assets/img/blog/6.jpg" alt="" />
                  </div>
                  <div class="post-information">
                    <h2>{{$post->title}}</h2>


                    <div class="entry-meta">
                     <td> <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span> </td>
                       <td> <span><i class="fa fa-clock-o"></i> {{$post->created_at}}</span></td>






<div style="display:inline">
           <div class="addthis_inline_share_toolbox_wd2n"></div>


                                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f98e5eaf5c2658d"></script>


                                          </div>   </div>



           </div>


           </div>





                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="entry-content">
                    &nbsp; &nbsp;&nbsp;    {!! htmlspecialchars_decode($post->body) !!}
                    </div>
                </div>

                </article>

     </div>
<hr>


                <!-- single-blog end -->
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
