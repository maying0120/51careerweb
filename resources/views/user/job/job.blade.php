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

<script src="{{ asset('user/job/js/vendor/jquery-2.2.4.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/vue/1.0.28/vue.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script> --}}
{{-- <script src="{{ asset('user/js/vue1.08.js') }}"></script> --}}
<script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>


<link rel="stylesheet" href="{{ asset('user/job/css/magnific-popup.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>




<script>
	function getMessage() {
		$.ajax({
			type: 'get',
			url: '{{ route('ajax') }}',
			data: filter,

			success: function (data) {
				dataset.jobs = data.jobs;

			}
		});
	}


</script>

<script>
	function setjobid(id){
		$("#jobid").val(id);
	}
</script>



<script>
	filter = {
		location: '', industry: '', exp_level: '', position:''
	}
</script>

<script>
	function feedfilter() {
		filter.location = $("#default-selects").val();
		filter.industry = $("#default-selects2").val();
		filter.exp_level = $("#default-selects3").val();
		filter.position = $("#default-search").val();
		getMessage();
	}

	function quicklocation(data){
		filter.location = data;
		getMessage();
	}
</script>

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

<style>
	#pop {
		position: relative;
		background: #FFF;
		padding: 20px;
		width: 800px;

		max-width: 800px;
		margin: 20px auto;
	}

	.job_details_area {
		background: #F5F7FA;

		margin-left: 0px;
		margin-right: 0px;


		padding-top: 0px;
		padding-left: 0px;
		padding-right: 0px;
		padding-bottom: 0px;
	}


	/* line 5, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs {
		padding: 30px;
		border-bottom: 1px solid #EAEAEA;
		-webkit-transition: 0.3s;
		-moz-transition: 0.3s;
		-o-transition: 0.3s;
		transition: 0.3s;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
	}

	@media (max-width: 800px) {
		/* line 5, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs {
			display: block !important;
		}
	}

	@media (max-width: 800px) {
		/* line 13, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs .jobs_left {
			display: block !important;
			overflow: hidden;
		}
	}

	/* line 18, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .thumb {
		float: left;
		width: 82px;
		height: 82px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		padding: 15px;
		background: #F5F7FA;
		margin-right: 25px;
		border: 1px solid #F0F0F0;
	}

	/* line 32, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .jobs_conetent {
		float: left;
	}

	/* line 34, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .jobs_conetent h4 {
		font-size: 24px;
		margin-bottom: 10px;
		font-weight: 400;
		-webkit-transition: 0.3s;
		-moz-transition: 0.3s;
		-o-transition: 0.3s;
		transition: 0.3s;
	}

	@media (max-width: 800px) {
		/* line 34, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs .jobs_left .jobs_conetent h4 {
			margin-top: 15px;
		}
	}

	/* line 42, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .jobs_conetent h4:hover {
		color: #00D363;
	}

	@media (max-width: 800px) {
		/* line 46, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat {
			display: block !important;
		}
	}

	/* line 50, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location {
		margin-right: 10px;
	}

	@media (max-width: 800px) {
		/* line 50, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location {
			margin-right: 10px;
		}
	}

	/* line 55, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location p {
		margin-bottom: 0;
		font-size: 16px;
		color: #AAB1B7;
	}

	/* line 59, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location p i {
		margin-right: 7px;
	}

	@media (max-width: 800px) {
		/* line 68, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs .jobs_right .apply_now {
			margin: 10px 0;
		}
	}

	/* line 73, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_right .apply_now a.heart_mark {
		width: 40px;
		height: 40px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		color: #00D363;
		font-size: 14px;
		line-height: 40px;
		text-align: center;
		display: inline-block;
		background: #EFFDF5;
	}

	/* line 83, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_right .apply_now a.heart_mark:hover {
		background: #00D363;
		color: #fff;
	}

	/* line 88, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_right .apply_now a.boxed-btn3 {
		padding: 9px 27px 9px 27px;
		font-size: 14px;
	}

	/* line 94, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_right .date {
		text-align: right;
		margin-top: 10px;
	}

	@media (max-width: 800px) {
		/* line 94, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .single_jobs .jobs_right .date {
			text-align: left;
		}
	}

	/* line 100, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .single_jobs .jobs_right .date p {
		margin-bottom: 0;
		font-size: 14px;
		font-style: italic;
		color: #7A838B;
	}

	/* line 110, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap {
		padding: 40px;
	}

	/* line 112, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap .single_wrap {
		margin-bottom: 30px;
	}

	/* line 114, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap .single_wrap:last-child {
		margin-bottom: 0;
	}

	/* line 117, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap .single_wrap h4 {
		font-size: 20px;
		font-weight: 500;
		color: #001D38;
		margin-bottom: 25px;
	}

	/* line 123, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap .single_wrap p {
		color: #7A838B;
		font-size: 16px;
		line-height: 28px;
		font-weight: 400;
	}

	/* line 130, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap .single_wrap ul li {
		font-size: 16px;
		line-height: 32px;
		color: #7A838B;
		font-weight: 400;
		position: relative;
		padding-left: 25px;
	}

	/* line 137, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .descript_wrap .single_wrap ul li::before {
		position: absolute;
		left: 0;
		top: 0;
		width: 7px;
		height: 7px;
		background: #7A838B;
		content: '';
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		border-radius: 50%;
		top: 12px;
	}

	/* line 152, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form {
		margin-top: 0px;
		padding: 20px;
	}

	@media (max-width: 800px) {
		/* line 152, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
		.job_details_area .apply_job_form {
			padding: 0px;
		}
	}

	/* line 158, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form h4 {
		font-size: 24px;
		font-weight: 500;
		margin-bottom: 30px;
	}

	/* line 164, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input_field input, .job_details_area .apply_job_form .input_field textarea {
		height: 60px;
		border: 1px solid #E8E8E8;
		width: 100%;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		padding-left: 20px;
		margin-bottom: 20px;
	}

	/* line 171, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input_field input::placeholder, .job_details_area .apply_job_form .input_field textarea::placeholder {
		color: #7A838B;
		font-size: 16px;
	}

	/* line 175, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input_field input:focus, .job_details_area .apply_job_form .input_field textarea:focus {
		outline: none;
	}

	/* line 179, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input_field textarea {
		height: 188px;
		padding: 20px;
	}

	/* line 184, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input_field.file_up input {
		position: relative;
	}

	/* line 186, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input_field.file_up input:before {
		position: absolute;
		left: 0;
		top: 0;
		content: 'Upload CV';
	}

	/* line 195, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input-group {
		width: 100%;
		height: 60px;
		border-radius: 5px !important;
		margin-bottom: 20px;
		border: 1px solid #ddd;
	}

	/* line 201, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input-group button {
		background: transparent;
		border: none;
		font-size: 16px;
		color: #7A838B;
		padding-left: 20px;
		margin-right: 5px;
	}

	/* line 209, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input-group .custom-file {
		margin-bottom: 0;
		height: 60px;
		border: none;
	}

	/* line 228, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
	.job_details_area .apply_job_form .input-group .custom-file-input {
		height: 100%;
	}

	.form-select {
		height: 40px;
		width: 100%;
	}

	.boxed-btn3 {
		/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#F91842+0,fd8e5e+100 */
		background: #00D363;
		color: #fff;
		display: inline-block;
		padding: 13px 29px 13px 29px;
		font-family: "Roboto", sans-serif;
		font-size: 16px;
		font-weight: 500;
		border: 0;
		border: 1px solid transparent;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		text-align: center;
		color: #fff !important;
		text-transform: capitalize;
		-webkit-transition: 0.3s;
		-moz-transition: 0.3s;
		-o-transition: 0.3s;
		transition: 0.3s;
		cursor: pointer;
	}


</style>


<body>
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
 	@endif
<div class="content">
<div class="container">
</br></br></br>




<div style=" float: left; ">

	
	<select class="my-select" onchange="feedfilter()" id="default-selects">
		<option value="Location">Location</option>
		<option value="New York">New York</option>
		<option value="Los Angeles">Los Angeles</option>
		<option value="Dallas">Dallas</option>
		<option value="Brooklyn">Brooklyn</option>
		<option value="Houston">Houston</option>
		<option value="Chicago">Chicago</option>
	</select>

	<select class="my-select" onchange="feedfilter()" id="default-selects2">
			<option value="Industry">Industry</option>
			<option value="Medical">Medical</option>
			<option value="Technology">Technology</option>
			<option value="Goverment">Goverment</option>
			<option value="Development">Development</option>
	</select>


	<select class="my-select" onchange="feedfilter()" id="default-selects3">
		<option value="Exp Level">Exp Level</option>
		<option value="Internship">Internship</option>
		<option value="Entry Level">Entry Level</option>
		<option value="Associate">Associate</option>
		<option value="Mid-senior level">Mid-senior level</option>
	</select>




</div>

<div style="padding-top:20px; ">

                   <input type="search" name="search" placeholder="Search..." id="default-search">
                    <button class="button" type="button" onclick="feedfilter()">
                      <i class="fa fa-search"></i>
                    </button>


</div>



<div id="jobdetails">
<h3 class="page-header"></h3>
<div class="">
  <div class="row-fluid">
    <div class="col-md-4" style="padding-left: 0px;">
      <div class="well menuSideBar" style="padding: 8px 0px;">
        <ul class="nav nav-list" id="menuSideBar">
          <li class="nav-header">All Jobs</li>
          <li class="nav-divider" ></li>

	
		<div v-for="(job, index) in jobs">
			<li mid="tab2" funurl="html.html" ><a href="#"  v-on:click="display">
				
				<h3 v-bind:id=index>
				${ job.position }</h3>
  
			  <h11  class="page-header">
				${ job.city }, ${ job.state }</h11>
  
  
			</a></li>


		</div>
	
		
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

			${jobdetail.position}
			</span >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
                <td><button class="blueb" data-toggle="modal" data-target="#myModal" v-on:click="setjobid(jobdetail.id)">Apply Now </button></td>
                <td><button class="blueb1">  <i class="fa fa-heart-o" style="z-index: 999;"></i> </button></td>
            </tr>

            </br>

            <h11> Industry: ${jobdetail.industry}</h11>
            </br>

            <h11>Location: ${jobdetail.city}  ${jobdetail.state}</h11>

            <div>
                <hr noshade color="#F2F3F4">
                <h4 style="display:inline;"> Job: </h4>
                <h11>${jobdetail.exp_level}</h11>   &nbsp;
                <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                    company size: </h4>

                <h11> ${jobdetail.company_size}</h11>  &nbsp;
                <h4 style="display:inline; height:10px; width:1px; border-left:1px #000 solid; padding-left: 20px;">
                    Employment Type: </h4>

                <h11> ${jobdetail.job_type}</h11>



                <hr noshade color="#F2F3F4">

            </div>


            <h3>Job Description:</h3>
			<span v-html="jobdetail.detail">
			</span>


        </div>







    </div>
  </div>
</div>
</div>
</div>
</div>


           <!-- 模态框主体 -->
		   <div class="modal-body">
			<div class="job_details_area">
				<div class="row">
					<div class="col-md-12">
						<div class="apply_job_form white-bg">
							<h4>Quick Apply For The Job</h4>
							<form action="{{ route('application_create') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}

								<input type="text" class="form-control" id="jobid" name="jobid" placeholder="jobid" value=""
									   hidden>

								<h5> 1: Upload your Resume</h5>

								<div class="col-md-12">
									
									<div class="input-group">
										<input type = checkbox name="useprev_resume" value ="1">
										
										<td><a href = "{{route('host')}}/uploads/{{ Auth::guard('web')->user()->resume }}"> Use your previous resume</a> </td>


									</div>

									
									<div class="input-group">

										<div class="custom-file">
											<label> <input name="resume" id="resume" type="file"
														   accept=".pdf, .doc, .docx"   /> accept .pdf, .doc, .docx </label>
										</div>

									</div>
								</div>
								



								<h5> 2: Upload your Coverletter</h5>

								<div class="col-md-12">
									<div class="input-group">
										<div class="custom-file">
											<label> <input name="coverletter" id="coverletter" type="file"
														   accept=".pdf, .doc, .docx"/>accept .pdf, .doc, .docx </label>
										</div>

									</div>
								</div>


								<h5> 3: Upload your Transcript</h5>

								<div class="col-md-12">
									<div class="input-group">
										<div class="custom-file">
											<label> <input name="transcript" id="transcript" type="file"
														   accept=".pdf, .doc, .docx"/>accept .pdf, .doc, .docx </label>
										</div>

									</div>
								</div>


								<div class="col-md-12">
									<div class="submit_btn">
										<button class="boxed-btn3 w-100" type="submit">Apply Now</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- 模态框底部 -->
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>--}}
{{--                </div>--}}

	</div>
</div>
</div>
<!--
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/b.tabs.js" ></script>
<script type="text/javascript" src="js/demo.js" ></script>
-->



<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>


<script>
	dataset = {
		jobs: [

		],

		jobdetail: 
			{id:'' ,position: '',industry: '', city: '', state: '', exp_level: '',company_size: '', job_type: '', detail: '', salary: '', start_time: ''},
		

	}
	$(document).ready(function () {
	new Vue({
		delimiters: ['${', '}'],
		el: '#jobdetails',
		data: dataset,
		methods: {
			display: function(event) {
				if (event) {
					dataset.jobdetail = dataset.jobs[event.target.id]
      			}
			}
		}
	})
	})
	@if ($rec_jobs == "null") {
		getMessage();
	} @else {
		$(document).ready(function () {
			dataset.jobs = {!! $rec_jobs !!};
		});

	}@endif
	


</script>

</body>
</html>