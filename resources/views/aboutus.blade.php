<!DOCTYPE html>
<html lang="en">

  @include('user/layouts/head')

<body data-spy="scroll" data-target="#navbar-example">



<style>
  .demo1{
            position: relative;
            text-decoration: none;
            font-size: 20px;
            color: #333;
        }
        .demo1:before{
            content: "";
            position: absolute;
            left: 50%;
            bottom: -2px;
            width: 0;
            height: 2px;
            background: #3078be;
            transition: all .3s;
        }
        .demo1:hover:before{
            width: 100%;
            left: 0;
            right: 0;
        }



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

}

</style>




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
          <li ><a href="/home">Home</a></li>
          <li><a href="/ourservice">Service</a></li>
          <li><a href="/ouroffer">Success Stories</a></li>
          <li><a href="/job">Job Board</a></li>
          <li><a href="/post">Blog</a></li>
          <li class="drop-down active">
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

  <!-- ======= Slider Section ======= -->


  <main id="main">



 <div>

          <img src="{{ asset('user/img/background/joinusbg.jpg') }}" style=" margin-top:-80px;" />
            <div class="text-center">

         <h2 style="font-family:'Lora'; font-weight:bold; font-size:60px;  z-index:999; color:white; margin-top:-180px; ">ABOUT  &nbsp; US</h2>

                                                </div>

        </div>




</br></br></br>


</br></br></br>


  <div class="container" >

        <div class="row" >
          <div class="col-lg-12" >
  <nav class="nav-menu ">
        <ul>
        <li> <a style="font-family:'Lora';font-size:26px;padding-right:30px;"> Our Company   |</a></li>
          <li class="active"><a href="/aboutus" style="font-family:'Lora';font-size:26px;padding-right:30px;">About Us</a></li>
          <li><a href="/joinus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Join Us</a></li>
          <li><a href="/contactus" style="font-family:'Lora';font-size:26px;padding-right:30px;">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->
</div>

</div></div>

  <div style="border:1px solid black;"></div>
{{--

      <div class="container" >

        <div class="row" >
          <div class="col-lg-12" >
            <ul>
         <li class="active"> <a href="aboutus" class="demo1 " style="padding-right:30px;"> AboutUs </a></li>
       <li>    <a href="joinus" class="demo1" style="padding-right:30px;">JoinUs</a></li>
    <li>  <a href="contactus" class="demo1" style="padding-right:30px;">ContactUs</a></li>
</ul>
          </div>

  </div>
--}}


    <!-- ======= About Section ======= -->
      <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="well-left">

                      </br>
                           <div class="text-left section-headline">

                                   <h2 style="font-family:'Lora';font-size:46px; line-height:1.5em;">About Us</h2>

 <h4  style="font-family:'roboto-thin,sans-serif'; font-size:32px;line-height:1.5em;">We're passionate about transforming clients into professionals they want to become.</h4>

</br>
                <p style="font-family:'roboto-thin,sans-serif';font-size:24px;line-height:1.5em;">
              We've been a pioneer in the career consulting industry globally since 2016. Inspired by the obstacles and challenges international students face in the United States job market, we aspired to help them transition into the American workplace and achieve their career goals. We have a global network of employers looking for qualified candidates. We combine the needs of employers and future employees to achieve the perfect fit.     </p>

                                 </div>
                      </div>
                    </div>



          <div class="col-md-5 col-sm-5 col-xs-12">
          </br> </br>  </br> </br>  </br> </br></br> </br>  </br> </br>
            <div class="well-middle">
              <div class="single-well">

          <img src="{{ asset('user/img/about/aboutusjpg.jpg') }}" alt="" style="height:300px;">
                      </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->






    <!-- ======= About Section ======= -->
     <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">


          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
            <iframe width="100%" height="600" src="https://www.youtube.com/embed/C4g4p-fyXfQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
            </div>
          </div>


                <div class="col-md-2 col-sm-2 col-xs-2">

                              </div>
          <!-- End col-->
        </div>

      </div>
    </div>








     <section>
        <section class="team bg-li py-5" id="team">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="well-left">


      <div class="section-headline text-left" >
                  <h2 style="font-family:'Lora';font-size:46px;">Our Philosophy </h2>
               </div>
  </div>  </div>  </div>  </div>

   <div style="z-index:-1;height:100%;background-image: url('user/img/slider/ourphilosophy.jpg') ; background-size:100% 100%;">
        		<div class="container py-xl-5 py-lg-3" >

        			<div class="row ab-info second pt-lg-4">
        				<div class="col-lg-4 col-sm-4 ab-content text-center mt-lg-0 mt-4">
        					<div class="ab-content-inner" >

        						<div class="ab-info-con" style="margin:-9px;">
     <img src="{{ asset('user/img/about/growth-icon.jpg') }}" alt="" style="height:50px; margin-bottom:-20px;">
    <h4 class="text-team-w3" style="font-family:lora,serif; font-weight:bold; font-size:32px; ">Growth</h4>
<hr>

        							<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:16px;"> We’re here to discover our members’ potential, professionally and personally. We challenge our members to step out of their comfort zone, enhancing competitiveness and creating extraordinary results.

        							  </p>

        						</div>
        					</div>
        				</div>
        				<div class="col-lg-4 col-sm-4 ab-content text-center mt-lg-0 mt-4">
        					<div class="ab-content-inner">

        						<div class="ab-info-con" style="margin:-9px;">
       <img src="{{ asset('user/img/about/result-icon.png') }}" alt="" style="height:50px; margin-bottom:-20px;">

        							<h4 class="text-team-w3" style="font-family:lora,serif; font-weight:bold; font-size:32px;">Results</h4>


<hr>

        								<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:16px;"> We’re a solution driven and outcome-oriented consulting team. We tailor members’ career plans after understanding the expectations, goals and needs of each member. At heart, we’re problem solvers.
				</p>

        						</div>
        					</div>
        				</div>
        				<div class="col-lg-4 col-sm-4 ab-content text-center mt-lg-0 mt-4">
        					<div class="ab-content-inner">

        						<div class="ab-info-con" style="margin:-9px;">
        						 <img src="{{ asset('user/img/about/people-icon.png') }}" alt=""  style="height:50px; margin-bottom:-20px;">
        						<h4 class="text-team-w3" style="font-family:lora,serif; font-weight:bold; font-size:32px;">People</h4>

                        <hr>


        								<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:16px;">
        							People are our strongest assets. We care about people, both our staff and members. The talent and diversity of our community built our success and will continue to shape our future. We have a passion for what we do, as such our work environment is open and collaborative.
        								 </p>

        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		</div>
        	</section>
	</section>


      {{--
    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials-area">
      <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Start testimonials Start -->
              <div class="testimonial-content text-center">
                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                <!-- start testimonial carousel -->
                <div class="owl-carousel testimonial-carousel">
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                      </p>
                      <h6>Boby</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                      </p>
                      <h6>Jhon</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                      </p>
                      <h6>Fleming</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                </div>
              </div>
              <!-- End testimonials end -->
            </div>
            <!-- End Right Feature -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="{{ asset('user/img/blog/1.jpg') }}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Assumenda repud eum veniam</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="{{ asset('user/img/blog/2.jpg') }}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Explicabo magnam quibusdam.</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="{{ asset('user/img/blog/3.jpg') }}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Lorem ipsum dolor sit amet</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
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
--}}

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer>

 @include('user/layouts/footer')
  </footer><!-- End  Footer -->

 @include('user/layouts/vendorjsfiles')


</body>

</html>
