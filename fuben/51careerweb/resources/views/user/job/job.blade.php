<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Job Listing</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('user/job/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/job/css/main.css') }}">
	<script src="{{ asset('user/job/js/vendor/jquery-2.2.4.min.js') }}"></script>

{{--    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>--}}

{{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> --}}
{{-- </script> --}}

<!-- Magnific Popup core js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
	<script src="{{ asset('user/job/js/vendor/bootstrap.min.js') }}"></script>
	<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

	<script src="{{ asset('user/job/js/easing.min.js') }}"></script>
	<script src="{{ asset('user/job/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('user/job/js/superfish.min.js') }}"></script>
	<script src="{{ asset('user/job/js/jquery.ajaxchimp.min.js') }}"></script>
	{{-- <script src="{{ asset('user/job/js/jquery.magnific-popup.min.js') }}"></script> --}}
	<script src="{{ asset('user/job/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('user/job/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('user/job/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('user/job/js/parallax.min.js') }}"></script>
	<script src="{{ asset('user/job/js/mail-script.js') }}"></script>
	<script src="{{ asset('user/job/js/main.js') }}"></script>




    <script>
        $(document).ready(function () {
            $('#btn').magnificPopup({
                type: 'inline',         // 行内的类型，类比图片的模式
                closeBtnInside: true,   // 显示关闭按钮
                closeonBgClick: false  // 点击遮罩透明背景关闭弹出层
            });
        });

    </script>


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



    <script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>

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
            location: '', industry: '', exp_level: ''
        }
    </script>

    <script>
        function feedfilter() {
            filter.location = $("#default-selects").val();
            filter.industry = $("#default-selects2").val();
            filter.exp_level = $("#default-selects3").val();
            getMessage();
        }
    </script>




</head>





<body>


<section class="post-area section-gap">


    <div class="container">

        <form action="search.html" class="serach-form-area">
            <div class="row justify-content-center form-wrap">
                <div class="col-lg-3 form-cols">
                    <input type="text" class="form-control" name="search" placeholder="what are you looging for?">
                </div>

                <div class="col-lg-2 form-cols">
                    <div class="default-select">
                        <select onchange="feedfilter()" id="default-selects">
                            <option value="Location">Location</option>
                            <option value="New York">New York</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="Dallas">Dallas</option>
                            <option value="Brooklyn">Brooklyn</option>
                            <option value="Houston">Houston</option>
                            <option value="Chicago">Chicago</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 form-cols">
                    <div class="default-select">
                        <select onchange="feedfilter()" id="default-selects2">
                            <option value="Industry">Industry</option>
                            <option value="Medical">Medical</option>
                            <option value="Technology">Technology</option>
                            <option value="Goverment">Goverment</option>
                            <option value="Development">Development</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 form-cols">
                    <div class="default-select">
                        <select onchange="feedfilter()" id="default-selects3">
                            <option value="Exp Level">Exp Level</option>
                            <option value="Internship">Internship</option>
                            <option value="Entry Level">Entry Level</option>
                            <option value="Associate">Associate</option>
                            <option value="Mid-senior level">Mid-senior level</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-1 form-cols">
                    <button type="button" class="btn btn-info">
                        <span class="lnr lnr-magnifier"></span> Search
                    </button>
                </div>
            </div>
        </form>


        <div class="row justify-content-center d-flex" id='jobdetails'>
            <div class="col-lg-8 post-list">
                <ul class="cat-list">
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Full</a></li>
                    <li><a href="#">Intern</a></li>
                    <li><a href="#">Part</a></li>
                </ul>

                <div v-for="job in jobs">
                    <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img src="img/post.png" alt="">
                            <ul class="tags">
                                <li>
                                    <a href="#">web</a>
                                </li>
                                <li>
                                    <a href="#">app</a>
                                </li>
                                <li>
                                    <a href="#">game</a>
                                </li>
                            </ul>
                        </div>
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="single.html"><h4>${ job.position }</h4></a>
                                    <h6>${ job.job_type }</h6>
                                </div>
                                <ul class="btns">
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>



                                    <li>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" v-on:click="setjobid(job.id)">
                                        Apply
                                    </button></li>
                                </ul>
                            </div>
                            <p>
                                ${ job.description}
                            </p>

                            <h5>Job Nature: ${ job.job_type }</h5>
                            <p class="address"><span class="lnr lnr-map"></span>location: ${ job.city }</p>
                            <p class="address"><span class="lnr lnr-database"></span> ${ job.salary }</p>
                            <p class="address">
                                <span class="lnr lnr-clock"></span>
                                ${ job.start_time }
                            </p>
                            <span v-html="job.detail">
									</span>

                        </div>
                    </div>
                </div>


                <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                    <h4>Jobs by Location</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="cat4egory.html"><p>New York</p>
                                <span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="cat4egory.html"><p>Los Angeles</p>
                                <span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="cat4egory.html"><p>Dallas</p><span>33</span></a>
                        </li>

                        <li><a class="justify-content-between d-flex" href="cat4egory.html"><p>Brooklyn</p>
                                <span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="cate4gory.html"><p>Houston</p>
                                <span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="cat4egory.html"><p>Chicago</p>
                                <span>17</span></a></li>
                    </ul>
                </div>


                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p>
                                <span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p>
                                <span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p>
                                <span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a>
                        </li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p>
                                <span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p>
                                <span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p>
                                <span>17</span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- 申请工作弹窗 --}}
    <!-- 按钮：用于打开模态框 -->
{{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">--}}
{{--        Apply--}}
{{--    </button>--}}

    <!-- 模态框 -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- 模态框头部 -->
                <div class="modal-header">
{{--                    <h4 class="modal-title">Upload documents</h4>--}}
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                <div class="custom-file">
                                                    <label> <input name="resume" id="resume" type="file"
                                                                   accept=".pdf, .doc, .docx"/> accept .pdf, .doc, .docx </label>
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




{{--    <div id="pop" class="mfp-hide">--}}

{{--        <div class="job_details_area">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="apply_job_form white-bg">--}}
{{--                        <h4>Quick Apply For The Job</h4>--}}
{{--                        <form action="{{ route('application_create') }}" method="POST" enctype="multipart/form-data">--}}
{{--                            {{ csrf_field() }}--}}

{{--                            <input type="text" class="form-control" id="jobid" name="jobid" placeholder="jobid" value=""--}}
{{--                                   hidden>--}}

{{--                            <h5> 1: Upload your Resume</h5>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <label> <input name="resume" id="resume" type="file"--}}
{{--                                                       accept=".pdf, .doc, .docx"/> accept .pdf, .doc, .docx </label>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <h5> 2: Upload your Coverletter</h5>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <label> <input name="coverletter" id="coverletter" type="file"--}}
{{--                                                       accept=".pdf, .doc, .docx"/>accept .pdf, .doc, .docx </label>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <h5> 3: Upload your Transcript</h5>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <label> <input name="transcript" id="transcript" type="file"--}}
{{--                                                       accept=".pdf, .doc, .docx"/>accept .pdf, .doc, .docx </label>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="col-md-12">--}}
{{--                                <div class="submit_btn">--}}
{{--                                    <button class="boxed-btn3 w-100" type="submit">Apply Now</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}


    <script>
        dataset = {
            jobs: [
                {position: '', location: '', salary: '', start_time: '', job_type: ''},

            ]
        }

        new Vue({
            delimiters: ['${', '}'],
            el: '#jobdetails',
            data: dataset
        })
        getMessage();


    </script>
</section>

</body>



</html>



