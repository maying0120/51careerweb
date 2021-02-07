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
     @include('user/layouts/head')
   @include('user/layouts/header')

  <!-- ======= Slider Section ======= -->


  <main id="main">



 <div>

          <img src="{{ asset('user/img/background/joinusbg.jpg') }}" style=" margin-top:80px;" />
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
        <li> <a style="font-family:'Lora';font-size:18px;padding-right:1px;">  OUR COMPANY &nbsp; &nbsp; |</a></li>
          <li class="active"><a href="/aboutus" style="font-family:'Lora';font-size:18px;padding-right:15px;">About Us</a></li>
          <li><a href="/joinus" style="font-family:'Lora';font-size:18px;padding-right:15px;">Join Us</a></li>
          <li><a href="/contactus" style="font-family:'Lora';font-size:18px;padding-right:15px;">Contact Us</a></li>

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
      <div id="portfolio" class="portfolio-area area-padding fix" style="margin-left:25px;">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="well-left">

                      </br>
                           <div class="text-left section-headline">

                                   <h2 style="font-family:'Lora';font-size:46px; line-height:1.5em;">About Us</h2>

 <h4  style="font-family:'roboto-thin,sans-serif'; font-size:28px;line-height:1.5em;">We're passionate about transforming clients into professionals they want to become.</h4>

</br>
                <p style="font-family:'roboto-thin,sans-serif';font-size:20px;line-height:1.5em;">
              We've been a pioneer in the career consulting industry globally since 2016. Inspired by the obstacles and challenges international students face in the United States job market, we aspired to help them transition into the American workplace and achieve their career goals. We have a global network of employers looking for qualified candidates. We combine the needs of employers and future employees to achieve the perfect fit.     </p>

                                 </div>
                      </div>
                    </div>



          <div class="col-md-5 col-sm-5 col-xs-12">
          </br> </br>  </br> </br>  </br> </br></br> </br>
            <div class="well-middle">
              <div class="single-well">

          <img src="{{ asset('user/img/about/aboutusjpg.jpg') }}" alt="" style="height:300px; ">
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












  </section>
   <section>
   <div style="z-index:-1;height:100%;background-image: url('user/img/slider/ourphilosophy.jpg') ; background-size:100% 100%;">

        		<div class="container py-xl-5 py-lg-3" style="margin-top:-30px;">
  <div class="section-headline text-left" >
                     <h2 style="font-family:'Lora';font-size:48px; z-index:10; margin-top:110px;">Our Philosophy </h2>
                  </div>
        			<div class="row ab-info second pt-lg-4">
        				<div class="col-lg-4 col-sm-4 ab-content text-center mt-lg-0 mt-4">
        					<div class="ab-content-inner" >

        						<div class="ab-info-con" style="margin:-9px;">
     <img src="{{ asset('user/img/about/growth-icon.jpg') }}" alt="" style="height:50px; margin-bottom:-20px;">
    <h4 class="text-team-w3" style="font-family:'roboto-thin,sans-serif'; font-weight:bold; font-size:30px; ">Growth</h4>
<hr style="margin-top:-20px;">

        							<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:18px; line-height:26px;">

        						We have a commitment of unlocking potential and a passion for results aligned with our members’ success. We challenge ourselves and step out of our comfort zone, creating extraordinary result.
                                    &nbsp;&nbsp;&nbsp;
        							  </p>

        						</div>
        					</div>
        				</div>
        				<div class="col-lg-4 col-sm-4 ab-content text-center mt-lg-0 mt-4">
        					<div class="ab-content-inner">

        						<div style="margin:-9px;">
       <img src="{{ asset('user/img/about/resulticon.png') }}" alt="" style="height:50px; margin-bottom:-20px;">

        							<h4 class="text-team-w3" style="font-family:'roboto-thin,sans-serif'; font-weight:bold; font-size:30px; ">Results</h4>


<hr style="margin-top:-20px;">

        								<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:18px; line-height:26px;"> We’re a solution-driven and outcome-oriented career consulting team. We tailor members’ career plans after understanding the expectations, goals and needs of each member. At heart, we’re problem solvers.
				</p>

        						</div>
        					</div>
        				</div>
        				<div class="col-lg-4 col-sm-4 ab-content text-center mt-lg-0 mt-4">
        					<div class="ab-content-inner">

        						<div class="ab-info-con" style="margin:-9px;">
        						 <img src="{{ asset('user/img/about/people-icon.png') }}" alt=""  style="height:50px; margin-bottom:-20px;">
        						<h4 class="text-team-w3" style="font-family:'roboto-thin,sans-serif'; font-weight:bold; font-size:30px; ">People</h4>

                        <hr style="margin-top:-20px;">


        								<p  align='left' style="font-family:'roboto-thin,sans-serif'; font-size:18px; line-height:26px;">
        							People are strongest assets.  The talent and diversity of our community built our success and will continue to shape our future. We have a passion for what we do, as such our work environment is open and collaborative.
        								 </p>

        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		</div>
        	</section>




  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer>

 @include('user/layouts/footer')
  </footer><!-- End  Footer -->

 @include('user/layouts/vendorjsfiles')


</body>

</html>
