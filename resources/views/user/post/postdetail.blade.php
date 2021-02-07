<!DOCTYPE html>
<html lang="en">

<head>
 @include('user.layouts.head')

</head>

<body data-spy="scroll" data-target="#navbar-example">

    @include('user/layouts/head')
  @include('user/layouts/header')

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
