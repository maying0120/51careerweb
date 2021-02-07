<!DOCTYPE html>
<html lang="en">

  @include('user/layouts/head')


  <style>

  .soild_text_one{
    width:500px;
    margin:0 auto;
    fieldset{
          height: 500px;
          border-left: none;
          border-right: none;
          border-bottom: none;
          color: #009688;
          border-color: #defffc;
          height:20px;
          legend{
              text-align: center;
              padding: 0 10px;
              font-size: 14px;
          }
      }
  }

  .soild_text_two{
    text-align:center;
    width:500px;
    margin:0 auto;
    height:20px;
    font-size: 14px;
    color: #4caf50;
    hr{
      width:200px;
      display:inline-block;
      vertical-align:middle;
      border-color: #e4ffe6;
    }
    span{
      padding: 0 10px;
    }
  }

  .soild_text_three{
    position:relative;
    text-align:center;
    width:500px;
    margin:20px auto;
    height:20px;
    font-size: 14px;
    color:#ff9800;
    &::before,&::after{
      content:"";
      position:absolute;
      top:50%;
      border:solid 1px #fbdfb6;
      width:40%;
    }
    &::before{
      left:0;
    }
    &::after{
      right:0;
    }
  }

  h2,h3.h4.h5,p
  {
    font-family:'Lora';
  }
p

{
font-size:20px;

}

  h1 { margin:150px auto 30px auto; text-align:center; color:#fff;}


  		<style>

h2,h3.h4.h5,p
{
font-family:lora,serif;
}


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



.soild_text_two{
  text-align:center;
  width:500px;
  margin:0 auto;
  height:20px;
  font-size: 14px;
  color: #4caf50;
  hr{
    width:200px;
    display:inline-block;
    vertical-align:middle;
    border-color: #e4ffe6;
  }
  span{
    padding: 0 10px;
  }
}



  </style>




<body data-spy="scroll" data-target="#navbar-example">


{{--
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
</script>--}}



  <!-- ======= Header ======= -->
  @include('user/layouts/header')

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{ asset('user/img/slider/banner1.png') }}" alt="" title="#slider-direction-1" />

         <img src="{{ asset('user/img/slider/baner2.png') }}" alt=""  title="#slider-direction-2" />

     <!--  <img src="{{ asset('user/img/slider/slider2.jpg') }}" alt="" title="#slider-direction-2" />
        <img src="{{ asset('user/img/slider/slider3.jpg') }}" alt="" title="#slider-direction-3" />-->
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1" style="font-size:72px; color:black; margin-top:-50px;">A Leading Career</h2>
                  </br> </br>
                    <h2 class="title1"  style="font-size:72px; color:black">Consulting Firm</h2>
                </div>

                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2" style="font-family:lora,serif;font-size:30px; color:black; margin-top:4px; font-weight:400; " > Helping candidates find dream jobs</h1>
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
                  <h2 class="title1" style="font-size:72px; color:black; margin-top:-80px;">Make <span style="color:#F5BB2A">Dreams</span> Happen </h2>
                </div>
                <!-- layer 2 -->
             <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                 <h1 class="title2" style="font-family:lora,serif;font-size:30px; color:black;margin-top:-1px; font-weight:400;"> Taking your career to next level</h1>
                </div>
            {{--    <!-- layer 3 -->
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

     <div class=" text-center" style="margin-top:-20px;">


              <h2 style="font-family:'lora',serif; font-size:48px;">A Reputable Career Consulting Brand</h2> </br> </br>


                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-4" style="margin-top:-20px;">
                <div class=" text-center" style="font-style: italic; ">
                 <h2  style="font-size:64px; color:#3078be; text-shadow:#ffffff 3px 3px 0px, rgba(0, 0, 0, 0.2) 6px 6px 0px;font-style:italic;">10,000 + </h2>
                 </br>
             <h2 style="font-family:'Lora',serif;font-weight:400; font-size:36px; margin-top:-10px;">​Partners</h2>
           </div></div>

               <div class="col-md-4 col-sm-4 col-xs-4" style="margin-top:-20px;">
                 <div class=" text-center">
            <h2  style="font-size:64px; color:#3078be; text-shadow:#ffffff 3px 3px 0px, rgba(0, 0, 0, 0.2) 6px 6px 0px; font-style:italic;">2,000 +</h2> </br>
                       <h2 style="font-family:'Lora',serif; font-weight:400; font-size:36px;margin-top:-10px; ">​Offers</h2>


                  </div> </div>


               <div class="col-md-4 col-sm-4 col-xs-4" style="margin-top:-20px;">
                 <div class=" text-center">

                  <h2  style="font-size:64px; color:#3078be; text-shadow:#ffffff 3px 3px 0px, rgba(0, 0, 0, 0.2) 6px 6px 0px;font-style:italic;">99% + </h2> </br>
                        <h2 style="ffont-family:'Lora',serif; font-weight:400; font-size:36px; margin-top:-10px;">Praise</h2>
                      </div>

                  </div>
                </div>


              </div>
            </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
      <div id="about" class="about-area area-padding" style="margin-top:-60px;">
      <div class="container" style="margin-top:-20px; margin-bottom:-20px;">

        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">

                  <h2  style="font-size:60px; text-align:left;">51 Careers </h2>
                  </br> </br>
                  <h3 style=" font-family:Roboto,Helvetica,Arial,sans-serif; font-size:30px;text-align:left; line-height:36px;
                    font-weight:normal"> We are a top career consulting firm that tailors members' needs to achieve career ambitions. </h3>

                 <div style="text-align:left;">
                 <a class="ready-btn right-btn page-scroll" href="/aboutus" style="background-color:#3078be; color:white; border-radius:0px;" >Learn More</a>
                 </div>

                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
             <div class="col-md-1 col-sm-1 col-xs-12">
 </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
                {{-- <img src="{{ asset('user/img/slider/51adv.PNG') }}" alt="">--}}
                 <img src="{{ asset('user/img/slider/homepageyuan1.png') }}" alt="" style="height:400px; width:400px;">
          </div>



        </div>
      </div>
    </div><!-- End Services Section -->




</br></br></br>





<div id="about" >
      <div class="container">
      <div class="row text-center">

               <div class="col-md-12 col-sm-12 col-xs-12">

                         <div class=" text-center">
                           <h2  style="font-family:'Lora',serif;font-size:48px; margin-bottom:-30px; font-weight:700;">Our Service System </h2>

                         </div> </div>
</br></br></br></br>
<div class="col-md-1 col-sm-1 col-xs-1 ">

</div>
<div class="col-md-2 col-sm-2 col-xs-2 " style="border: 0.5px solid gray;height:0;  ">
</div>

<div class="col-md-6 col-sm-6 col-xs-6" style="margin-top:-20px;"><h2 style="font-family:lora,serif;font-size:22px;">Personalized Planning and Career Full - Service</h2></div>

<div class="col-md-2 col-sm-2 col-xs-2 " style="border: 0.5px solid gray;height:0;  ">
</div><div class="col-md-1 col-sm-1 col-xs-1 ">

      </div>
</div></div></div>
                          <div class="wrapper" style="margin-top:40px;">

                              <div class="team1">

                              <div class="team_member" >
                                <div class="team_img">
                                {{--    <i class="fa fa-calendar fa-5x  rounded-circle"></i>--}}

                                     <img src="{{ asset('user/img/slider/1.png') }}" alt="">
                                </div>

                                <h3 style="font-family:roboto,sans-serif; font-weight:500; padding-top:1px;">​Career</h3>
                                <h3 style="font-family:roboto,sans-serif;margin-top:-15px; font-weight:500;"> Discovery</h3>
                              <!--  <p class="role">UI developer</p> -->
                                <p style="font-family:roboto,sans-serif;">Profile Aseessment</p>
                                <div style="margin-top:-5px">
                                <i class="fa fa-arrow-down" aria-hidden="true" ></i> </div>


                                <div style="margin-top:5px">

                                <p style="font-family:roboto,sans-serif;">  Career Options </p></div>
                                   <div style="margin-top:-15px">
                              <p  style="font-family:roboto,sans-serif;">  Exploration</p></div>
                                    <div style="margin-top:-5px">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                                  <div style="margin-top:5px">
                                <p style="font-family:roboto,sans-serif;"> Goal Identification</p></div>
                                   <div style="margin-top:-5px">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i></div>
  <div style="margin-top:5px">
                                <p style="font-family:roboto,sans-serif;"> Personalized Job Serach Strategy</p></div>
                              </div>

<div style="float:left;margin-top:80px;width: 1px;height: 300px; background: darkgray;"></div>




                                 <div class="team_member" >
                                <div class="team_img">
                                 {{--  <i class="fa fa-laptop fa-5x"></i>--}}

                                    <img src="{{ asset('user/img/slider/2.png') }}" alt="">

                                </div>


                              <h3 style="font-family:roboto,sans-serif; font-weight:500; ">​Brand Establishment</h3>
                                                     <!--  <p class="role">UI developer</p> -->
                                                        <p style="font-family:roboto,sans-serif;">  Recruitment Timeline & Strategy</p>

                                                           <div style="margin-top:-5px">
                                                       <i class="fa fa-arrow-down" aria-hidden="true"></i></div>


                                                           <div style="margin-top:5px">
                                                        <p style="font-family:roboto,sans-serif;">  Resume Makeover</p></div>
                                                           <div style="margin-top:-5px">
                                                       <i class="fa fa-arrow-down" aria-hidden="true"></i></div>

                                                         <div style="margin-top:5px">
                                                        <p style="font-family:roboto,sans-serif;"> Cover Letter, LinkedIn Profile Upgrades</p></div>
                                                           <div style="margin-top:-5px">
                                                       <i class="fa fa-arrow-down" aria-hidden="true"></i></div>
 <div style="margin-top:5px">
                                                         <p style="font-family:roboto,sans-serif;">

                                                          Networking Techniques</p></div>
                                </div>
<div style="float:left;margin-top:80px;width: 1px;height: 300px; background: darkgray;"></div>


                                   <div class="team_member" >
                                <div class="team_img">
                                  {{--   <i class="fa fa-bell fa-5x"></i>--}}
                                     <img src="{{ asset('user/img/slider/3.png') }}" alt="">
                                </div>
                              <h3 style="font-family:roboto,sans-serif; font-weight:500; ">​Interview Preparation</h3>
                                                      <!--  <p class="role">UI developer</p> -->
                                                     <p style="font-family:roboto,sans-serif;">  Referral Opportunities</p>
                                                      <div style="margin-top:-5px">
                                                        <i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                                                           <div style="margin-top:5px">

                                                      <p style="font-family:roboto,sans-serif;"> （Behavior & Technical）Mock Interviews</p></div>
                                                       <div style="margin-top:-5px">
                                                        <i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                                                         <div style="margin-top:5px">
                                                        <p style="font-family:roboto,sans-serif;">  Online Test Simulations</p></div>
                                                        <div style="margin-top:-5px">
                                                        <i class="fa fa-arrow-down" aria-hidden="true"></i></div>

                                                          <div style="margin-top:5px"> <p style="font-family:roboto,sans-serif;">  ​Specific Skills Development</p>   </div>
      </div>
<div style="float:left;margin-top:80px;width: 1px;height: 300px; background: darkgray;"></div>

                                                  <div class="team_member" >
                                                              <div class="team_img">
                                                                {{-- <i class="fa fa-users fa-5x"></i>--}}
                                                                <img src="{{ asset('user/img/slider/4.png') }}" alt="">

                                                              </div>
                                             <h3 style="font-family:roboto,sans-serif; font-weight:500; ">​​Offer </h3>

                                           <h3 style="font-family:roboto,sans-serif; font-weight:500; margin-top:-15px;">​ Finalization </h3>

                                                                    <!--  <p class="role">UI developer</p> -->
                                                                      <p style="font-family:roboto,sans-serif;">  Offer Selection</p>

                                                               <p style="font-family:roboto,sans-serif;margin-top:-15px;">            Advice</p>

                                                                  <div style="margin-top:-5px">
                                                                      <i class="fa fa-arrow-down" aria-hidden="true"></i></div>


                                                                         <div style="margin-top:5px">
                                                                        <p style="font-family:roboto,sans-serif;">Salary Negotiation </p>

                                                                       <p style="font-family:roboto,sans-serif;margin-top:-15px;">    Tips</p></div>
                                                                          <div style="margin-top:5px">
                                                                      <i class="fa fa-arrow-down" aria-hidden="true"></i></div>

                                                                     <div style="margin-top:5px">
                                                                       <p style="font-family:roboto,sans-serif;">Future Professional </p>


                                                                         <p style="font-family:roboto,sans-serif;margin-top:-15px;">   Plans</p></div>
                                                                        </div>


                            </div>
                          </div>
  </div>



{{--
 <div id="team" class="our-team-area area-padding" style="z-index:100;">
          <div class="container" style="z-index:100;">


                <div class=" text-center" style="z-index:100;">
                 <h2  style="font-family:'Lora',serif;font-size:48px; font-weight:700; margin-top:-30px; z-index:100;">

                       Our Specialized ​Industries</h2>

              </div>

            </div>

            <img src="{{ asset('user/img/slider/industry111.png') }}" alt="" style="width:100%; z-index:-100;">
     </div>

--}}

{{--
  <img src="{{ asset('user/img/slider/industryupdated.png') }}" alt="" style="width:100%; z-index:-100;">

  <img src="{{ asset('user/img/slider/industry111.png') }}" alt="" style="width:100%;  z-index:-100;">--}}

{{--
 <img src="{{ asset('user/img/slider/tttest.png') }}" alt="" style="width:100%; z-index:-100;">
    <div id="about" class="about-area area-padding" style="z-index:-1;height:790px;background-image: url('user/img/slider/industryupdated.png') ; background-size: 100% 790px; ">
      <div class="container text-center" >
              <h2  style="font-family:'Lora',serif;font-size:48px; font-weight:700; margin-top:-25px; z-index:100;"> Our Specialized ​Industries</h2>
      </div></div>--}}



</br></br>
</br>




<div id="about" class="about-area area-padding" style=" margin-top:-70px;z-index:-1;height:790px;background-image: url('user/img/slider/industry/ids.jpg') ; background-size:100% 790px; ">
      <div class="container text-center">
      </br>
 <h2  style="font-family:'Lora',serif;font-size:48px; font-weight:700; margin-top:-30px; z-index:100;">
 Our Specialized ​Industrie</h2>
</br></br></br>


    <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2">
           <img src="{{ asset('user/img/slider/industry/i1.png') }}" alt="" >
       <h2  style="font-family:roboto,sans-serif;font-size:22px;">Financial Services </h2>

            </div>

              <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="{{ asset('user/img/slider/industry/i2.png') }}" alt="" >
 <h2  style="font-family:roboto,sans-serif;font-size:22px;">Banking </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                     <img src="{{ asset('user/img/slider/industry/i3.png') }}" alt="" >
 <h2  style="font-family:roboto,sans-serif;font-size:22px;">Consulting </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">

                     <img src="{{ asset('user/img/slider/industry/i4.png') }}" alt="" >
                      <h2  style="font-family:roboto,sans-serif;font-size:22px;">Technology </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="{{ asset('user/img/slider/industry/i5.png') }}" alt="" >
                         <h2  style="font-family:roboto,sans-serif;font-size:22px;">Accounting </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                        <img src="{{ asset('user/img/slider/industry/i6.png') }}" alt="" >
                            <h2  style="font-family:roboto,sans-serif;font-size:22px;">Investment Management </h2>

              </div>

            <div class="col-md-2 col-sm-2 col-xs-2">
           <img src="{{ asset('user/img/slider/industry/i21.png') }}" alt="" >
       <h2  style="font-family:roboto,sans-serif;font-size:22px;">Fashion </h2>

            </div>

              <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="{{ asset('user/img/slider/industry/i22.png') }}" alt="" >
                  <h2  style="font-family:roboto,sans-serif;font-size:22px;">Internet </h2>

              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                     <img src="{{ asset('user/img/slider/industry/i23.png') }}" alt="" >
                    <h2  style="font-family:roboto,sans-serif;font-size:22px;">Automotive </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">

                     <img src="{{ asset('user/img/slider/industry/i24.png') }}" alt="" >
                     <h2  style="font-family:roboto,sans-serif;font-size:22px;">Retail </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="{{ asset('user/img/slider/industry/i25.png') }}" alt="" >
                      <h2  style="font-family:roboto,sans-serif;font-size:22px;">Nonprofit </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                        <img src="{{ asset('user/img/slider/industry/i26.png') }}" alt="" >
                  <h2  style="font-family:roboto,sans-serif;font-size:22px;">Marketing & Adverting </h2>
              </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
           <img src="{{ asset('user/img/slider/industry/i31.png') }}" alt="" >
            <h2  style="font-family:roboto,sans-serif;font-size:22px;">Mechanical Engineering </h2>


            </div>

              <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="{{ asset('user/img/slider/industry/i32.png') }}" alt="" >
                <h2  style="font-family:roboto,sans-serif;font-size:22px;"> Airline </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                     <img src="{{ asset('user/img/slider/industry/i33.png') }}" alt="" >
                 <h2  style="font-family:roboto,sans-serif;font-size:22px;">Real Estate</h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">

                     <img src="{{ asset('user/img/slider/industry/i34.png') }}" alt="" >
                      <h2  style="font-family:roboto,sans-serif;font-size:22px;">Insurance </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="{{ asset('user/img/slider/industry/i35.png') }}" alt="" >
                <h2  style="font-family:roboto,sans-serif;font-size:22px;">Manufacturing </h2>
              </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
                        <img src="{{ asset('user/img/slider/industry/i36.png') }}" alt="" >
                        <h2  style="font-family:roboto,sans-serif;font-size:22px;">More </h2>
              </div>





</div> </div></div> </div>
















                           {{--  user/img/slider/blue11.PNG--}}
    <div id="about" class="about-area area-padding" style="z-index:-1;height:790px;background-image: url('user/img/slider/offerbg111.png') ; background-size:100% 790px;">
      <div class="container text-center">
      </br>
 <h2  style="font-family:'Lora',serif;font-size:48px; font-weight:700; margin-top:-30px; z-index:100; color:white;">
Our Offers</h2>
</br>
    <div class="box">
        <ul id="list1" >
           <li><img src="{{ asset('user/img/slider/Homepageoffer1.png') }}"   alt=""></li>
            <li><img src="{{ asset('user/img/slider/Homepageoffer1.png') }}"   alt=""></li>
            <li><img src="{{ asset('user/img/slider/Homepageoffer1.png') }}"   alt=""></li>
            <li><img src="{{ asset('user/img/slider/Homepageoffer1.png') }}"   alt=""></li>
           <li><img src="{{ asset('user/img/slider/Homepageoffer1.png') }}"   alt=""></li>
        </ul>
        <ol id="list2" style="padding-top:110px;">
        </ol>
        <div id="btn">
            <div class="btnLeft btn">&lt;</div>
            <div class="btnRight btn">&gt;</div>
        </div>
    </div>

            <a class="ready-btn right-btn page-scroll" href="/ouroffer" style="background-color:white; color:black; border-radius:0px; float: right; font-family:Roboto,Helvetica,Arial,sans-serif; " >Learn More</a>
 </div> </div>













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
              <h2  style="font-size:40px; margin-top:40px;">Our Service System</h2>
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





 <div id="team" class="our-team-area area-padding"  style="margin-top:-30px;">
          <div class="container">

</br></br>
                <div class=" text-center">
                       <h2  style="font-family:'Lora',serif;font-size:48px; font-weight:700; margin-top:-30px; z-index:100;">Our Partners</h2>

              </div>

            </div>
<div style="margin-top:0px;">
 <div class="container">
            <img src="{{ asset('user/img/slider/comlog1.png') }}" alt="" style="width: 100%;">
     </div> </div></div>



  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer style="margin-top:-60px;">

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
		   <script src="{{ asset('user/vendor/js/jquery-3.4.1.min.js') }}"></script>


    <script>
        $(function () {
            const $box = $(".box"),
                $ul = $box.children("ul"),
                $li = $ul.children(),
                $ol = $ul.next("ol"),
                $btn = $ol.next("#btn"),
                $btnLeft = $btn.children(".btnLeft"),
                $btnRight = $btn.children(".btnRight")

            // 获取图片张数和每张图片的宽度
            let num = $li.length
            let width = $li.eq(0).outerWidth()

            // 把第0张图片追加到最后
            $ul.append($li.eq(0).clone())

            // 给ul添加宽度
            $ul.width((num + 1) * width)

            // 自动轮播
            auto()

            /*------------------------小圆点-----------------------------*/
            //创建小圆点
            for (let i = 0; i < num; i++) {
                $("<li>").addClass(i === 0 ? "active" : "").appendTo($ol)
            }

            // 定义当前和上一张图片的索引
            let index = 0
            let lastIndex = 0

            // ul的运动状态，默认为静止
            let isMove = false

            // 点击小圆点切换图片
            // ol下的li
            let olis = $ol.children()
            olis.on("click", function () {
                if (isMove) {
                    return
                }
                isMove = true
                // 该this指向当前点击的小圆点，是原生，要转为jQuery
                // 先记录上一个索引
                lastIndex = index
                index = $(this).index()
                // 移除所有li的active
                olis.eq(lastIndex).removeClass("active")
                olis.eq(index).addClass("active")


                // 图片跟着小圆点一起切换
                $ul.animate({
                    left: -index * width
                }, 1000, function () {
                    isMove = false
                })

            })

            /*-----------------------右箭头-----------------------*/
            $btnRight.on("click", function () {
                if (isMove) {
                    return
                }
                isMove = true
                // 判断是否到最后一张图片
                lastIndex = index
                index++
                if (index > num - 1) {
                    $ul.animate({
                        left: -index * width
                    }, 1000, function () {
                        index = 0
                        $ul.css("left", 0)
                        isMove = false
                    })
                } else {
                    $ul.animate({
                        left: -index * width
                    }, 1000, function () {
                        isMove = false
                    })
                }
                olis.eq(lastIndex).removeClass("active")
                olis.eq(index).addClass("active")
            })

            /*----------------------------左箭头---------------------*/
            $btnLeft.on("click", function () {
                // 判断是否到第一张图片
                if (isMove) {
                    return
                }
                isMove = true
                lastIndex = index
                index--
                // 这时的index是一个负数
                if (index < 0) {
                    index = num - 1
                    $ul.css("left", -num * width).animate({
                        left: -index * width
                    }, 1000, function () {
                        isMove = false
                    })
                } else {
                    $ul.animate({
                        left: -index * width
                    }, 1000, function () {
                        isMove = false
                    })
                }
                olis.eq(lastIndex).removeClass("active")
                olis.eq(index).addClass("active")
            })

            /*--------------------------自动轮播-----------------------*/
            function auto() {
                $box.timer = setInterval(() => {
                    $btnRight.trigger("click")
                }, 1000)
            }

            /*--------------------------移入移出事件--------------------*/
            $box.hover(function () {
                clearInterval($box.timer)
                console.log(index)
            }, function () {
                auto()
            })
        })
    </script>
		<script>
			$('.slide').hiSlide();
		</script>


</body>

</html>
