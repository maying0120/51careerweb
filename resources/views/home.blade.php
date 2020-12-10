<!DOCTYPE html>
<html lang="en">

  @include('user/layouts/head')






  		<style>



          h1 { margin:150px auto 30px auto; text-align:center; color:#fff;}

                .hi-slide { position: relative; width: 800px; height: 292px; margin: 10px auto 0; }

  .hi-slide .hi-next,
  .hi-slide .hi-prev
              { position: absolute;
                top: 50%;
                width: 40px;
                height: 40px;
                margin-top: -20px;
                  border-radius: 50px;


                line-height: 40px;
                text-align: center;
                cursor: pointer;
                background-color: #fff;
                color: black;
                transition: all 0.6s;
                font-size: 20px;
                  font-weight: bold;
              }
             .hi-slide .hi-next:hover,
              .hi-slide .hi-prev:hover
              {
              opacity: 1;
              background-color: #fff;
              }

             .hi-slide .hi-prev { left: -60px; }

      .hi-slide .hi-prev::before { content: '<'; }
      .hi-slide .hi-next { right: -60px; }
      .hi-slide .hi-next::before { content: '>'; }

       .hi-slide > ul
                    {
                        list-style: none;
                        position: relative;
                        width: 754px;
                        height: 292px;
                        margin: 0;
                        padding: 0;
            }

          .hi-slide > ul > li {
              overflow: hidden;
              position: absolute;
              z-index: 0;
              left: 377px;
              top: 146px;
              width: 0;
              height: 0;
              margin: 0;
              padding: 0;
              border: 3px solid #fff;
              background-color: #333;
              cursor: pointer; }

          .hi-slide > ul > li > img { width: 100%; height: 100%; background-position: center;}



  		</style>



<body data-spy="scroll" data-target="#navbar-example">



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
    @include('user/layouts/header')
  </header><!-- End Header -->

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{ asset('user/img/slider/nyc11.jpg') }}" alt="" title="#slider-direction-1" />

         <img src="{{ asset('user/img/slider/empire2_edited.jpg') }}" alt="" title="#slider-direction-1" />

     <!--  <img src="{{ asset('user/img/slider/slider2.jpg') }}" alt="" title="#slider-direction-2" /> -->
        <img src="{{ asset('user/img/slider/slider3.jpg') }}" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1" style="font-size:70px;">A Leading Career</h2>
                  </br> </br>
                    <h2 class="title1"  style="font-size:70px;">Consulting Firm</h2>
                </div>
                </br> </br> </br>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2" style="font-size:30px;"> Helping candidates find dream jobs</h1>
                    </div>
             {{--   <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
                --}}

              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                </br></br></br></br>
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1" style="font-size:70px;">Make Dreams Happen </h2>
                </div>
                <!-- layer 2 -->
          {{--   <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">A Leading Career</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>--}}
              </div>
            </div>
          </div>
        </div>
      </div>

     {{-- <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">A Leading Career</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      --}}

    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
     <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">


          {{--      <div class="col-md-4 col-sm-4 col-xs-4">
                          <div class=" text-center">
                     <h2  style="font-size:60px; text-align:left;">10,000 + </h2>
                     </div></div>

                         <div class="col-md-4 col-sm-4 col-xs-4">
                           <div class=" text-center">
                             <h2  style="font-size:60px; text-align:left;">2,000 +</h2>
                                </div> </div>


                         <div class="col-md-4 col-sm-4 col-xs-4">
                           <div class=" text-center">
                              <h2  style="font-size:60px; text-align:left;">99%+ </h2>
                                </div> </div>--}}

     <div class=" text-center">
              <h2 style="font-size:40px;">A Reputable Career Consulting Brand</h2> </br> </br>
        {{--     <img src="{{ asset('user/img/slider/brand.png') }}" alt="">--}}
            </div>
          </div>

                <div class="col-md-4 col-sm-4 col-xs-4">
                <div class=" text-center">
                 <h2  style="font-size:60px; ">10,000 + </h2>
                 </br>
            <h2 style="font-size:30px;  ">​Partners</h2>
           </div></div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                 <div class=" text-center">
                  <h2  style="font-size:60px; ">2,000 +</h2> </br>
                       <h2 style="font-size:30px;  ">​Offers</h2>
                      </div> </div>


               <div class="col-md-4 col-sm-4 col-xs-4">
                 <div class=" text-center">
                   <h2  style="font-size:60px; ">99% + </h2> </br>
                       <h2 style="font-size:30px;  ">Praise​</h2>
                      </div> </div>
        </div>


      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
      <div id="about" class="about-area area-padding">
      <div class="container">

        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">

                  <h2  style="font-size:60px; text-align:left;">51 Careers </h2>
                  </br> </br>
                  <h3 style="font-size:20px;text-align:left;  font-weight:normal">  A top career consulting firm that tailors clients' needs and helps candidates chase career dreams. </h3>

                 <div style="text-align:left;">
                 <a class="ready-btn right-btn page-scroll" href="#services" style="background-color:#FFCC33; color:black; border-radius:0px;" >Learn More</a>
                 </div>

                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-move">
              <div class="services-details">

                <img src="{{ asset('user/img/slider/51adv.PNG') }}" alt="">
              </div>
              <!-- end about-details -->
            </div>
          </div>



        </div>
      </div>
    </div><!-- End Services Section -->


{{--
      <div id="team" class="our-team-area area-padding">
              <div class="container">


                    <div class=" text-center">
                            <h2  style="font-size:40px;">Our Service System</h2>
                  </div>
                </div>


        <div id="services" class="services-area area-padding">
            <div class="container">
              <div class="row">

  <div class="col-md-3 col-sm-3 col-xs-6">
               <div class="pri_table_list">

                <i class="fa fa-arrows fa-5x  rounded-circle"></i> fa-5x
                            <h3>basic <br /> <span>$80 / month</span></h3>
                            <ol>
                              <li class="check">Online system</li>
                              <li class="check cross">Full access</li>
                              <li class="check">Free apps</li>
                              <li class="check">Multiple slider</li>
                              <li class="check cross">Free domin</li>
                              <li class="check cross">Support unlimited</li>
                              <li class="check">Payment online</li>
                              <li class="check cross">Cash back</li>
                            </ol>
                            <button>sign up now</button>
                          </div>  </div>









     <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="about-move">
              <div class="services-details">



               <i class="fa fa-arrows fa-5x"></i> fa-5x
               <h2 style="font-size:30px;">Career Plan </h2>

              </div>
              <!-- end about-details -->
            </div>
          </div>

               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="about-move">
                        <div class="services-details">



                         <i class="fa fa-laptop fa-5x"></i> fa-5x

                        </div>
                        <!-- end about-details -->
                      </div>
                    </div>



     <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="about-move">
              <div class="services-details">



               <i class="fa fa-group fa-5x"></i> fa-5x

              </div>
              <!-- end about-details -->
            </div>
          </div>

     <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="about-move">
              <div class="services-details">


               <i class="fa fa-handshake-o fa-5x"></i> fa-5x

              </div>
              <!-- end about-details -->
            </div>
          </div>
    </div>            </div>
                    </div>
              </div>

--}}


</br></br></br>

               <div class="col-md-12 col-sm-12 col-xs-12">

                         <div class=" text-center">
                           <h2  style="font-size:40px;">Our Service System</h2>
                         </div>


                          <div class="wrapper">

                              <div class="team1">

                              <div class="team_member">
                                <div class="team_img">
                                   <i class="fa fa-arrows fa-5x  rounded-circle"></i>
                                </div>
                                <h3>Career Plan</h3>
                              <!--  <p class="role">UI developer</p> -->
                                <p> find a teacher</p>
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                <p> find a teacher</p>
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                <p> find a teacher</p>
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                <p> find a teacher</p>
                              </div>


                              <div class="team_member">
                                <div class="team_img">
                                  <i class="fa fa-laptop fa-5x"></i>
                                </div>
                            <h3>Career Plan</h3>
                                                     <!--  <p class="role">UI developer</p> -->
                                                       <p> find a teacher</p>
                                                       <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                       <p> find a teacher</p>
                                                       <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                       <p> find a teacher</p>
                                                       <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                       <p> find a teacher</p>
                                </div>

                              <div class="team_member">
                                <div class="team_img">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                             <h3>Career Plan</h3>
                                                      <!--  <p class="role">UI developer</p> -->
                                                        <p> find a teacher</p>
                                                        <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                        <p> find a teacher</p>
                                                        <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                        <p> find a teacher</p>
                                                        <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                        <p> find a teacher</p>   </div>


                                              <div class="team_member">
                                                              <div class="team_img">
                                                                <i class="fa fa-handshake-o fa-5x"></i>
                                                              </div>
                                           <h3>Career Plan</h3>
                                                                    <!--  <p class="role">UI developer</p> -->
                                                                      <p> find a teacher</p>
                                                                      <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                                      <p> find a teacher</p>
                                                                      <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                                      <p> find a teacher</p>
                                                                      <i class="fa fa-arrow-down" aria-hidden="true"></i>

                                                                      <p> find a teacher</p>          </div>


                            </div>
                          </div>
  </div>


      <div id="team" class="our-team-area area-padding">
          <div class="container">


                <div class=" text-center">
                  <h2  style="font-size:40px;">Our Specialized ​Industries</h2>

              </div>


            </div>

            </br>  </br>  </br>
                <img src="{{ asset('user/img/slider/ind.png') }}" alt=""  style="width:100%">
                              </div>


    <div id="team" class="our-team-area area-padding">
          <div class="container">


                <div class=" text-center">
                        <h2  style="font-size:40px;">Our Partner</h2>

              </div>

            </div>
        <img src="{{ asset('user/img/slider/part.png') }}" alt="" style="width:100%">
     </div>



    <div id="about" class="about-area area-padding" style="z-index:-1;height:620px;background-image: url('user/img/slider/blue11.PNG') ; background-size:100% 620px;">
      <div class="container">

 <div class=" text-center">
              <h2  style="font-size:40px; color:white;">Our Offers</h2>
            </div>
</br></br>
    <div class="slide hi-slide" >
    		  <div class="hi-prev "></div>
    			<div class="hi-next "></div>
    			<ul>
    				<li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
    				<li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
    				<li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
    				<li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
    				<li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
    				<li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
                    <li><img src="{{ asset('user/img/slider/offer.jpg') }}"   alt=""></li>
    			</ul>
    		</div>



        <a class="ready-btn right-btn page-scroll" href="#services" style="background-color:white; color:black; border-radius:0px; float: right; " >Learn More</a>


</div>
</div>




</br></br></br></br></br></br>

 <div class="col-md-12 col-sm-12 col-xs-12">
 <div class=" text-center">
              <h2  style="font-size:40px;">Our Offers</h2>
            </div>



<div class="thumbnail-slider">
	<div class="thumbnail-container">
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
			 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
		<div class="item">
		 <img src="{{ asset('user/img/slider/offer.jpg') }}"   alt="">
		</div>
	</div>


  <!-- controls slides -->
  <div class="controls">
  </div>

</div>
</div>
 </div>


</br></br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>





   {{--
    <!-- ======= Skills Section ======= -->
    <div class="our-skill-area fix hidden-sm">
      <div class="test-overly"></div>
      <div class="skill-bg area-padding-2">
        <div class="container">
          <!-- section-heading end -->
          <div class="row">

            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">

               <img src="{{ asset('user/img/slider/51adv.PNG') }}"  style=" height:80px; width:80px;" alt="">

              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Graphics Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Php Developer</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Java Script</h3>
                </div>
              </div>
            </div>
                     <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                          <div class="single-skill">
                            <div class="progress-circular">
                              <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                              <h3 class="progress-h4">Java Script</h3>
                            </div>
                          </div>
                        </div>

                                 <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                                      <div class="single-skill">
                                        <div class="progress-circular">
                                          <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                          <h3 class="progress-h4">Java Script</h3>
                                        </div>
                                      </div>
                                    </div>
            <!-- single-skill end -->
          </div>

   <div class="row">

            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Web Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Graphics Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Php Developer</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Java Script</h3>
                </div>
              </div>
            </div>
                     <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                          <div class="single-skill">
                            <div class="progress-circular">
                              <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                              <h3 class="progress-h4">Java Script</h3>
                            </div>
                          </div>
                        </div>

                                 <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                                      <div class="single-skill">
                                        <div class="progress-circular">
                                          <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                          <h3 class="progress-h4">Java Script</h3>
                                        </div>
                                      </div>
                                    </div>
            <!-- single-skill end -->
          </div>





        </div>
      </div>
    </div><!-- End Skills Section -->   --}}



    <!-- ======= Team Section ======= -->

{{--
   <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class=" text-center">
              <h2  style="font-size:40px;">Our Service System</h2>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{ asset('user/img/team/1.jpg') }}" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{ asset('user/img/team/2.jpg') }}" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{ asset('user/img/team/3.jpg') }}" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{ asset('user/img/team/4.jpg') }}" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>



            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->



    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area hidden-xs">
      <div class="work-us">
        <div class="work-left-text">
          <a href="#">
            <img src="{{ asset('user/img/about/2.jpg') }}" alt="">
          </a>
        </div>
        <div class="work-right-text text-center">
          <h2>working with us</h2>
          <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
          <a href="#contact" class="ready-btn scrollto">Contact us</a>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Development</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Design</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Photoshop</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('user/img/portfolio/1.jpg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('user/img/portfolio/1.jpg') }}">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('user/img/portfolio/2.jpg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('user/img/portfolio/2.jpg') }}">
                      <h4>Blue Sea</h4>
                      <span>Photosho</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('user/img/portfolio/3.jpg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('user/img/portfolio/3.jpg') }}">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('user/img/portfolio/4.jpg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('user/img/portfolio/4.jpg') }}">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('user/img/portfolio/5.jpg') }}" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('user/img/portfolio/5.jpg') }}">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('user/img/portfolio/6.jpg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('user/img/portfolio/6.jpg') }}">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Pricing Table</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>basic <br /> <span>$80 / month</span></h3>
              <ol>
                <li class="check">Online system</li>
                <li class="check cross">Full access</li>
                <li class="check">Free apps</li>
                <li class="check">Multiple slider</li>
                <li class="check cross">Free domin</li>
                <li class="check cross">Support unlimited</li>
                <li class="check">Payment online</li>
                <li class="check cross">Cash back</li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <span class="saleon">top sale</span>
              <h3>standard <br /> <span>$110 / month</span></h3>
              <ol>
                <li class="check">Online system</li>
                <li class="check">Full access</li>
                <li class="check">Free apps</li>
                <li class="check">Multiple slider</li>
                <li class="check cross">Free domin</li>
                <li class="check">Support unlimited</li>
                <li class="check">Payment online</li>
                <li class="check cross">Cash back</li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>premium <br /> <span>$150 / month</span></h3>
              <ol>
                <li class="check">Online system</li>
                <li class="check">Full access</li>
                <li class="check">Free apps</li>
                <li class="check">Multiple slider</li>
                <li class="check">Free domin</li>
                <li class="check">Support unlimited</li>
                <li class="check">Payment online</li>
                <li class="check">Cash back</li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Pricing Section -->



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
    </div><!-- End Blog Section -->    --}}

    </br>  </br>  </br>  </br>  </br>  </br>  </br>  </br>  </br>  </br>

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


<script>

const controls=document.querySelector(".controls");
  const container=document.querySelector(".thumbnail-container");
  const allBox=container.children;
  const containerWidth=container.offsetWidth;
  const margin=30;
   var items=0;
   var totalItems=0;
   var jumpSlideWidth=0;


  // item setup per slide

 responsive=[
  {breakPoint:{width:0,item:1}}, //if width greater than 0 (1 item will show)
  {breakPoint:{width:600,item:2}}, //if width greater than 600 (2  item will show)
  {breakPoint:{width:1000,item:4}} //if width greater than 1000 (4 item will show)
 ]

 function load(){
     for(let i=0; i<responsive.length;i++){
     	if(window.innerWidth>responsive[i].breakPoint.width){
     		items=responsive[i].breakPoint.item
     	}
     }
     start();
 }

 function start(){
 	 var totalItemsWidth=0
 	for(let i=0;i<allBox.length;i++){
 		 // width and margin setup of items
 		allBox[i].style.width=(containerWidth/items)-margin + "px";
 		allBox[i].style.margin=(margin/2)+ "px";
        totalItemsWidth+=containerWidth/items;
        totalItems++;
 	}

 	// thumbnail-container width set up
 	container.style.width=totalItemsWidth + "px";

 	// slides controls number set up
 	 const allSlides=Math.ceil(totalItems/items);
     const ul=document.createElement("ul");
        for(let i=1;i<=allSlides;i++){
          const li=document.createElement("li");
               li.id=i;
               li.innerHTML=i;
               li.setAttribute("onclick","controlSlides(this)");
               ul.appendChild(li);
               if(i==1){
               	li.className="active";
               }
        }
        controls.appendChild(ul);
 }

    // when click on numbers slide to next slide
 function controlSlides(ele){
       // select controls children  'ul' element
       const ul=controls.children;

       // select ul children 'li' elements;
      const li=ul[0].children


       var active;

       for(let i=0;i<li.length;i++){
       	if(li[i].className=="active"){
       		// find who is now active
       		active=i;
       		// remove active class from all 'li' elements
       		li[i].className="";
       	}
       }
       // add active class to current slide
       ele.className="active";

       var numb=(ele.id-1)-active;
          jumpSlideWidth=jumpSlideWidth+(containerWidth*numb);
       container.style.marginLeft=-jumpSlideWidth + "px";
 }

window.onload=load();



</script>



	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="{{ asset('user/vendor/js/jquery.hislide.js') }}"></script>


		<script>
			$('.slide').hiSlide();
		</script>


</body>

</html>
