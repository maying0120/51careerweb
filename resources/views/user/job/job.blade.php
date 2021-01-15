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
				dataset.jobdetail = dataset.jobs[0]
			}
		});
	}


</script>

<script>
	function setjobid(id){
		$("#jobid").val(id);
		dianwo();
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


body {
  font-family: "Lora", sans-serif;
  color: #444;
}

a {
  color: #4fa6d5;
}

a:hover {
  color: #45beff;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6, .font-primary {
  font-family: "Lora", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 3px;
  right: 15px;
  bottom: 15px;
  background: #68A4C4;
  color: #fff;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}

.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 8px;
  left: 8px;
}

.back-to-top:hover {
  color: #fff;
  background: #85b6cf;
  transition: background 0.2s ease-in-out;
}
.tlinks{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 20px 0;
  background: rgba(240, 255, 255, 0.8);
}

#header.header-transparent {
  background: none;
}

#header.header-scrolled {
  background: rgba(240, 255, 255, 0.8);
  height: 60px;
  padding: 10px 0;
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  padding: 4px 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

#main {
  margin-top: 80px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu a {
  display: block;
  position: relative;
  color: black;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Open Sans", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #a2cce3;
  text-decoration: none;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% - 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #68A4C4;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #68A4C4;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: 9999;
  overflow-y: auto;
  left: -260px;
  width: 260px;
  padding-top: 18px;
  background: #68A4C4;
  transition: 0.4s;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #ddecf5;
  padding: 10px 20px;
  font-weight: 500;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #a2cce3;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa0";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #fff;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: #68A4C4;
  overflow: hidden;
  display: none;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer-area {
  padding: 40px 0;
  background: #f9f9f9;
}

.footer-head p {
  color: #444;
}

.footer-head h4 {
  color: #444;
  font-size: 16px;
  letter-spacing: 2px;
  padding-bottom: 10px;
  text-transform: uppercase;
}

.footer-logo {
  padding-bottom: 20px;
}

.footer-logo h2 {
  color: #222;
  padding: 0;
  margin: 0;
  font-size: 36px;
  font-weight: bold;
  line-height: 1;
}

.footer-logo h2 span {
  color: #3ec1d5;
}

.footer-icons ul li {
  display: inline-block;
}

.footer-icons ul li a {
  border: 1px solid #444;
  color: #444;
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 38px;
  margin-right: 5px;
  text-align: center;
  width: 40px;
  border-radius: 50%;
}

.flicker-img > a {
  float: left;
  padding: 1px;
  width: 33.33%;
}

.footer-icons {
  margin-top: 30px;
}

.footer-contacts p span {
  color: #3EC1D5;
  font-weight: 700;
}

.popular-tag ul li {
  display: inline-block;
}

.footer-content {
  display: block;
  overflow: hidden;
}

.popular-tag ul li a:hover, .footer-icons ul li a:hover {
  background: #3EC1D5;
  border: 1px solid #3EC1D5;
  color: #fff;
}

.popular-tag ul li a {
  border: 1px solid #444;
  border-radius: 30px;
  color: #444;
  display: block;
  font-size: 13px;
  font-weight: 600;
  margin: 5px 3px;
  padding: 5px 10px;
  position: relative;
  text-decoration: none;
  text-transform: capitalize;
  transition: all 0.4s ease 0s;
  width: 70px;
  text-align: center;
}

.footer-area-bottom {
  background: #f1f1f1 none repeat scroll 0 0;
  padding: 15px 0;
}

.copyright-text a:hover {
  text-decoration: underline;
  color: #3EC1D5;
}

.copyright-text a {
  color: #444;
}

.copyright > p {
  margin-bottom: 0;
  color: #444;
}

.copyright a, .credits a {
  color: #3EC1D5;
}

.credits {
  padding-top: 5px;
  text-align: center;
}









.button {
	width:30px;
	height:30px;
	background: #3078be;
	color: white;
}
.sel {
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
	background:#3078be;
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
	background:#3078be;
	border-radius:10px;
	color:white;
	text-align: center;

}


.blueb1:focus{

	outline: none;

	background-color: #f00283;

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




.zhezhao{
	position: fixed;
	left: 0px;
	top: 0px;
	background:#D0D3D4 ;
	width: 100%;
	height: 100%;
	opacity: 0.95;
}
.tankuang{
	position: relative;
	background: #FDFEFE ;
	width: 40%;
	height: 50%;
	border-radius: 5px;
	margin: 5% auto;


}
#header{
	height: 40px;
}
#header-right{
	position: absolute;
	width: 25px;
	height: 25px;
	border-radius: 5px;
	background: red;
	color: #fff;
	right: 5px;
	top: 5px;
	text-align: center;
}



.job_details_area {
	background: #F5F7FA;

	margin-left:0px;
	margin-right:0px;


	padding-top:0px;
	padding-left:0px;
	padding-right:0px;
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

@media (max-width:800px) {
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


<script type="text/javascript">

	window.onload=function(){

		var Button = document.getElementsByClassName("blue1");

		for (i = 0; i < Button.length; i++) {

			Button[i].onclick=function(){

				for (i = 0; i < Button.length; i++) {

					Button[i].style.backgroundColor = "";

				}

				this.style.backgroundColor = "#f00283";

			}

		}

	}



</script>


  <header id="header" class="fixed-top" style="height:80px;">


    <div class="container d-flex" >
      <div class="mr-auto" style="float:left; ">
        <img src="{{ asset('user/img/51careerlogo1.png') }}" alt="" style="max-height: 50px; transform: translateY(-6px);"/>
      </div>
      <nav class="nav-menu d-none d-lg-block" style="float:right; ">
        <ul>
          <li ><a href="/home1">Home</a></li>
          <li><a href="/ourservice">Service</a></li>
          <li><a href="/ouroffer">Success Stories</a></li>
          <li class="active"><a href="/job">Job Board</a></li>
          <li><a href="/post">Blog</a></li>
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
			  </br>
			  <h11  class="page-header">
				Job id: ${ job.id }</h11>


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
							@if (auth()->user()->status != "0")
							<td><button class="blueb" data-toggle="modal" data-target="#myModal" v-on:click="setjobid(jobdetail.id)">Apply Now </button></td>
							@endif
							<td><button class="blueb1">  <i class="fa fa-heart-o" style="z-index: 999;"></i> </button></td>
            </tr>

            </br>
			<h11> Job id: ${jobdetail.id}</h11>
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
<div class="zhezhao" id='zhezhao'>
	<div class="tankuang" >
		<div id="header">
		   <div class="modal-body">
			<div class="job_details_area">
				<div class="row">
					<div class="col-md-12">
						<div class="apply_job_form white-bg">
							<h4>Quick Apply For The Job</h4>
							<form action="{{ route('application_create') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}


								<input type="hidden" class="form-control" id="jobid" name="jobid" placeholder="jobid" value=""
									   >

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

		<div id="header-right" onclick="hidder()">x</div>

		<!-- 模态框底部 -->
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>--}}
{{--                </div>--}}

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

<script>
			document.getElementById('zhezhao').style.display="none";
			function dianwo(){
				document.getElementById('zhezhao').style.display="";
			}
			function hidder(){
				document.getElementById('zhezhao').style.display="none";
			}
</script>
  <footer>

<div id='footer' class="footer-area" style="height:300px; float:bottom;">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="footer-content">
          <div class="footer-head">
            <div class="footer-logo">
              <h2><span>51</span>Careers</h2>
            </div>
            <p style="font-size: 19px;">We are a top career consulting firm <br>
              that tailors clients' needs <br>
              to achieve career ambitions.
            </p>
            <div class="footer-icons">
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-google"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end single footer -->

      <div class="col-4" style="display: flex; justify-content: center; transform: translateY(1px);">
        <div class="footer-content">
          <div class="footer-head">
            <h4>Contact</h4>
            <div class="footer-contacts">
              <p><span>Tel:</span> (+1)212-918-4477</p>
              <p><span>Email:</span> info@51careers.com</p>
              <p><span>Working Hours:</span> 9am-5pm</p>
              <p><span>Addr:</span> 48 Wall St, 11th Fl, New York, NY 10005</p>
            </div>
          </div>
        </div>
      </div>
      <!-- end single footer -->
      <div class="col-4">
        <div class="footer-content">
          <div class="footer-head" style="text-align: center;">
            <h4>Official Wechat:</h4>
            <img src="{{ asset('user/img/Mia二维码.jpg') }}" style="width: 130px; height: 130px;"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </footer><!-- End  Footer -->
</body>
</html>
