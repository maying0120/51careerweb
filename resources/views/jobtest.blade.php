<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="{{ asset('user/newjob/css/bootstrap.css') }}" >
<link rel="stylesheet" type="text/css"href="{{ asset('user/newjob/css/font-awesome.min.css') }}" >
<link rel="stylesheet" href="{{ asset('user/newjob/b.tabs.css') }}"  type="text/css">
<style type="text/css">
div.menuSideBar { }
div.menuSideBar li.nav-header { font-size: 10px; padding: 3px 15px; }
div.menuSideBar .nav-list > li > a, div.menuSideBar .dropdown-menu li a { -webkit-border-radius: 0px; -moz-border-radius: 0px; -ms-border-radius: 0px; border-radius: 0px; }
</style>

</head>








<style>

.sel
{
float: left;

}

.my-select
{

height:30px;
font-family: sans-serif;
font-size:18px;
background:#EBF5FB;
border-radius:10px;
margin-right:30px;
margin-top:20px;
}

.blueb
{
    height:40px;
    width:140px;
    font-family: sans-serif;
    font-size:18px;
    margin-left:30px;
    background:#2557a7;
    border-radius:10px;
    color:white;


}

.blueb1
{   margin-top: 15px;
    height:40px;
    width:40px;
    font-family: sans-serif;
    font-size:20px;
    margin-left:30px;
    background:#2557a7;
    border-radius:10px;
    color:white;
    text-align: center;

}


.search-option
{

height:30px;
font-family: sans-serif;
font-size:18px;
padding-top:60px;

border-radius:10px;
margin-top: 60px;

margin-bottom: 30px;
}


</style>




<body>

<div class="content">
<div class="container">
</br></br></br>




<div style=" float: left; ">

    <select class="my-select">
            <option value="">Experience Level</option>
            <option value="js">JavaScript</option>
            <option value="py">Python</option>
            <option value="rb">Ruby</option>
            <option value="go">Golang</option>
        </select>

        <select class="my-select">
            <option value="">Job Type</option>
            <option value="js">JavaScript</option>
            <option value="py">Python</option>
            <option value="rb">Ruby</option>
            <option value="go">Golang</option>
        </select>


           <select class="my-select">
            <option value="">Location</option>
            <option value="js">JavaScript</option>
            <option value="py">Python</option>
            <option value="rb">Ruby</option>
            <option value="go">Golang</option>
        </select>

    <select class="my-select">
        <option value="">Company Size</option>
        <option value="js">JavaScript</option>
        <option value="py">Python</option>
        <option value="rb">Ruby</option>
        <option value="go">Golang</option>
    </select>




</div>

<div style="padding-top:20px; ">

                   <input type="search" name="search" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>


</div>





<h3 class="page-header"></h3>
<div class="">
  <div class="row-fluid">
    <div class="col-md-4" style="padding-left: 0px;">
      <div class="well menuSideBar" style="padding: 8px 0px;">
        <ul class="nav nav-list" id="menuSideBar">
          <li class="nav-header">All Jobs</li>
          <li class="nav-divider" ></li>


          <li mid="tab1" funurl="html.html" >

              <a href="#"  onclick="show1()">
    <h3>
          Finaical Analyst</h3>

            <h11  class="page-header">
          New York, NY</h11>


          </a>



          </li>
          <li mid="tab2" funurl="html.html" ><a href="#"  onclick="show2()">

              <h3>
          UI/UX design</h3>

            <h11  class="page-header">
          New York, NY</h11>


          </a></li>
          <li mid="tab3" funurl="html.html"><a tabindex="-1" href="javascript:void(0);">

              <h3>
          UI/UX design</h3>

            <h11  class="page-header">
          New York, NY</h11>


          </a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-8" id="mainFrameTabs" style="padding : 0px;">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active noclose"><a href="#bTabs_navTabsMainPage" data-toggle="tab">Job Details </a></li>
      </ul>

      <!-- Tab panes
      <div class="tab-content">
        <div class="tab-pane active" id="bTabs_navTabsMainPage">
          <div class="page-header">
            <h2 style="font-size: 31.5px;text-align: center;font-weight: normal;">Welcome to use</h2>
          </div>
          <div style="text-align: center;font-size: 20px;line-height: 20px;"> Welcome to use bTabs plugin! </div>
        </div>
      </div> -->


        <div class="page-header" style="display:block" id="divmain">

    <span style="font-size: 30px; font-weight: bold;" >

        Finaical Analyst
    </span >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
                <td><button class="blueb">Apply Now </button></td>
                <td><button class="blueb1">  <i class="fa fa-heart-o" style="z-index: 999;"></i> </button></td>
            </tr>




            </br>

            <h11> Industry: Financial  Service</h11>
            </br>

            <h11>Location: New York, NY</h11>

            <div>
                <hr noshade color="#F2F3F4">
                <h4 style="display:inline;"> Job: </h4>
                <h11>Associate</h11>   &nbsp;
                <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                    company size: </h4>

                <h11> 50</h11>  &nbsp;
                <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                    Employment Type: </h4>

                <h11> Full-time</h11>



                <hr noshade color="#F2F3F4">

            </div>


            <h3>Job Description:</h3>
            <p>Software Engineers in Assembly and Test Technology Development (ATTD) are expected to:
                Conduct or participate in multidisciplinary research and collaborate with design, layout and/or hardware engineers in the design, development, and utilization of productivity enhancement layout tools and design rule checkers, electronic data processing systems software.
                Determine computer user needs, advise hardware designers on machine characteristics that affect software systems such as storage capacity, processing speed, and input and/or output requirements, designs and develops compilers and assemblers, utility programs, and operating systems.
                Respond to customers' requests or events as they occur.
                Develop solutions to problems utilizing formal education, judgement and formal software process. </p>


        </div>







        <div class="page-header" style="display:none" id="div1">

    <span style="font-size: 30px; font-weight: bold;" >

        Finaical Analyst
    </span >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
                <td><button class="blueb">Apply Now </button></td>
                <td><button class="blueb1">  <i class="fa fa-heart-o" style="z-index: 999;"></i> </button></td>
            </tr>




        </br>

        <h11> Industry: Financial  Service</h11>
        </br>

        <h11>Location: New York, NY</h11>

        <div>
            <hr noshade color="#F2F3F4">
            <h4 style="display:inline;"> Job: </h4>
            <h11>Associate</h11>   &nbsp;
            <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                company size: </h4>

            <h11> 50</h11>  &nbsp;
            <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                Employment Type: </h4>

            <h11> Full-time</h11>



            <hr noshade color="#F2F3F4">

        </div>


        <h3>Job Description:</h3>
        <p>Software Engineers in Assembly and Test Technology Development (ATTD) are expected to:
            Conduct or participate in multidisciplinary research and collaborate with design, layout and/or hardware engineers in the design, development, and utilization of productivity enhancement layout tools and design rule checkers, electronic data processing systems software.
            Determine computer user needs, advise hardware designers on machine characteristics that affect software systems such as storage capacity, processing speed, and input and/or output requirements, designs and develops compilers and assemblers, utility programs, and operating systems.
            Respond to customers' requests or events as they occur.
            Develop solutions to problems utilizing formal education, judgement and formal software process. </p>


        </div>

        <div class="page-header" style="display:none" id="div2">

    <span style="font-size: 30px; font-weight: bold;" >

        UI/UX design
    </span >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
                <td><button class="blueb">Apply Now </button></td>
                <td><button class="blueb1">  <i class="fa fa-heart-o" style="z-index: 999;"></i> </button></td>
            </tr>




            </br>

            <h11> Industry: Financial  Service</h11>
            </br>

            <h11>Location: New York, NY</h11>

            <div>
                <hr noshade color="#F2F3F4">
                <h4 style="display:inline;"> Job: </h4>
                <h11>Associate</h11>   &nbsp;
                <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                    company size: </h4>

                <h11> 50</h11>  &nbsp;
                <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                    Employment Type: </h4>

                <h11> Full-time</h11>



                <hr noshade color="#F2F3F4">

            </div>


            <h3>Job Description:</h3>
            <p>Design, develop, troubleshoot and debug software programs for databases, applications, tools, networks etc.

                As a member of the software engineering division, you will assist in defining and developing software for tasks associated with the developing, debugging or designing of software applications or operating systems. Provide technical leadership to other software developers. Specify, design and implement modest changes to existing software architecture to meet changing needs.

                Duties and tasks are varied and complex needing independent judgment. Fully competent in own area of expertise. May have project lead role and or supervise lower level personnel. BS or MS degree or equivalent experience relevant to functional area. 4 years of software engineering or related experience. </p>


        </div>






    </div>
  </div>
</div>
</div>
</div>

<!--
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/b.tabs.js" ></script>
<script type="text/javascript" src="js/demo.js" ></script>
-->

<script>
    function show1(){
        document.getElementById("div1").style.display="block";
        document.getElementById("div2").style.display="none";
        document.getElementById("divmain").style.display="none";
    };
    function show2()
    {
        document.getElementById("div2").style.display="block";
        document.getElementById("div1").style.display="none";
        document.getElementById("divmain").style.display="none";
    }
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>
</html>
