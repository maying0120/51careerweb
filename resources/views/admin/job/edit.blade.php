<!DOCTYPE html>
<html>
<head>
   @include('admin.layouts.head')
   <link rel="stylesheet"  href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">


  
  <script>
    function myprint(){
      $("#country").val($("#countryId").val());
      $("#state").val($("#stateId").val());
      $("#city").val($("#cityId").val());
    }
  </script>



</head>



<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


   @include('admin.layouts.sidebar')






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Jobs</h1>

          </div>


          <div class="col-sm-6">



            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>






        <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
                  {{-- <a class='col-lg-offset-20 btn btn-success' href="{{ route('job_add') }} " > Add new job </a> --}}
              </div>

           
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tbody>
                    <form role="form" action="{{ route('job_add') }}" onsubmit="myprint()" id="editjob" method="post">
                      {{ csrf_field() }}

      
                        <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{ $job->id }}" hidden>
                      
      
                      <div class="form-group">
                        <label for="title">position:</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="position" value="{{ $job->position }}">
                      </div>

                      


                      <div class="form-group" id="location123">
                        <label for="title">location:</label>
                        <select name="countrys" onchange = "countryid()"   class="countries form-control" id="countryId">
                          {{-- <option value="">Select Country</option> --}}
                          <option id = "selectcountry" selected = "selected"  value="{{ $job->country }}">{{ $job->country }}</option>
                          <option   v-for="country in location.country" id = "selectcountry"   v-bind:value=country.id>${ country.name }</option>
                          {{-- onclick="getState(${ country.id })" --}}
                        </select>
                          
                        <select name="states"  onchange = "stateid()" class="states form-control" id="stateId">
                          {{-- <option value="">Select State</option> --}}
                          <option id = "selestate"  selected = "selected" value="{{ $job->state }}">{{ $job->state }}</option>
                          <option  v-for="state in location.state" id = "selectstate"   v-bind:value=state.id>${ state.name }</option>
                        </select>

                        <select name="citys" class="cities form-control"  id="cityId">
                          {{-- <option value="">Select City</option> --}}
                          <option id = "selecity"  selected="selected" value="{{ $job->city }}">{{ $job->city }}</option>
                          <option  v-for="city in location.city" id = "selectcity"   v-bind:value=city.name>${ city.name }</option>


                        </select>

                      </div>


                      <input type="text" class="form-control" id="country" name="country" placeholder="country" value="" hidden>
                      <input type="text" class="form-control" id="state" name="state" placeholder="state" value="" hidden>
                      <input type="text" class="form-control" id="city" name="city" placeholder="city" value="" hidden>





      
                      <div class="form-group">
                        <label for="title">job type:</label>
                        <select class="form-control" id="job_type" name="job_type" placeholder="job_type" >
                          <option value="job type" @if ($job->job_type == "job type") selected @endif>job type</option>
                          <option value="Intern" @if ($job->job_type == "Intern") selected @endif>Intern</option>
                          <option value="Part Time" @if ($job->job_type == "Part Time") selected @endif>Part Time</option>
                          <option value="Full Time" @if ($job->job_type == "Full Time") selected @endif>Full Time</option>
                        </select>                  
                      </div>
      
                      <div class="form-group">
                        <label for="title">salary:</label>
                        <select class="form-control" id="salary" name="salary" placeholder="salary" >
                          <option value="salary" @if ($job->salary == "salary") selected @endif>salary</option>
                          <option value="less than 60k" @if ($job->salary == "less than 60k") selected @endif> less than 60k </option>
                          <option value="60k to 100k" @if ($job->salary == "60k to 100k") selected @endif>60k to 100k</option>
                          <option value="100k to 150k" @if ($job->salary == "100k to 150k") selected @endif>100k to 150k</option>
                          <option value="more than 150k" @if ($job->salary == "more than 150k") selected @endif>more than 150k</option>
                        </select>
                      </div>
      
                      <div class="form-group">
                        <label for="title">company size:</label>
                        <select class="form-control" id="company_size" name="company_size" placeholder="company_size" >
                          <option value="company size" @if ($job->company_size == "company size") selected @endif>company size</option>
                          <option value="1 to 50" @if ($job->company_size == "1 to 50") selected @endif>1 to 50</option>
                          <option value="51 to 200" @if ($job->company_size == "51 to 200") selected @endif>51 to 200</option>
                          <option value="200 to 1k" @if ($job->company_size == "200 to 1k") selected @endif>200 to 1k</option>
                          <option value="more than 1k" @if ($job->company_size == "more than 1k") selected @endif>more than 1k</option>
                        </select>
                      </div>
      
                      <div class="form-group">
                        <label for="title">company:</label>
                        <input type="text" class="form-control" id="company" name="company" placeholder="company" value="{{ $job->company }}">
                      </div>
      
                      <div class="form-group">
                        <label for="title">start time:</label>
                        <input type="date" class="form-control" id="start_time" name="start_time" placeholder="start_time" value="{{ $job->start_time }}">
                      </div>
      
                      <div class="form-group">
                        <label for="title">end time:</label>
                        <input type="date" class="form-control" id="end_time" name="end_time" placeholder="end_time" value="{{ $job->end_time }}">
                      </div>
      
                      <div class="form-group">
                        <label for="title">hire time:</label>
                        <input type="date" class="form-control" id="hire_time" name="hire_time" placeholder="hire_time" value="{{ $job->hire_time }}">
                      </div>
      
                      <div class="form-group">
                        <label for="title">expire date:</label>
                        <input type="date" class="form-control" id="expire_time" name="expire_time" placeholder="expire_time" value="{{ $job->expire_time }}">
                      </div>

                      <div class="form-group">
                        <label for="title">major:</label>
                        <div class="select2-blue">
                          <select class="select2" multiple="multiple" data-placeholder="Select a major" name="major[]"
                          data-dropdown-css-class="select2-blue" style="width: 100%; ">
                            @foreach($majors as $major)
                            <option value="{{ $major->name}}" @if ($major->match == true) selected = "selected" @endif)> {{$major->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
      
                      <div class="form-group">
                        <label for="title">visa status:</label>
                        <select class="form-control" id="visa_status" name="visa_status" placeholder="visa_status" >
                          <option value="visa status" @if ($job->visa_satus == "visa status") selected @endif>visa status</option>
                          <option value="OPT" @if ($job->visa_satus == "OPT") selected @endif>OPT</option>
                          <option value="H1B" @if ($job->visa_satus == "H1B") selected @endif>H1B</option>
                          <option value="Green Card" @if ($job->visa_satus == "Green Card") selected @endif>Green Card</option>
                          <option value="Citizen" @if ($job->visa_satus == "Citizen") selected @endif>Citizen</option>
                        </select>
                      </div>
      
                      <div class="form-group">
                        <label for="title">english level:</label>
                        <select class="form-control" id="english_level" name="english_level" placeholder="english_level" >
                          <option value="english level" @if ($job->english_level == "english level") selected @endif>english level</option>
                          <option value="Beginner" @if ($job->english_level == "Beginner") selected @endif>Beginner</option>
                          <option value="Intermediate" @if ($job->english_level == "Intermediate") selected @endif>Intermediate</option>
                          <option value="Advanced" @if ($job->english_level == "Advanced") selected @endif>Advanced</option>
                          <option value="Proficient" @if ($job->english_level == "Proficient") selected @endif>Proficient</option>
                        </select>
                      </div>
      
                      <div class="form-group">
                        <label for="title">Skill:</label>
  
                          <div class="select2-blue">
                            <select class="select2" multiple="multiple" data-placeholder="Select a skill" name="skill[]"
                            data-dropdown-css-class="select2-blue" style="width: 100%; ">
                              @foreach($skills as $skill)
                              <option value="{{ $skill->name}}" @if ($skill->match == true) selected = "selected" @endif)> {{$skill->name}}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="title">industry:</label>
                        <div class="select2-blue">
                          <select class="select2" multiple="multiple" data-placeholder="Select an industry" name="industry[]"
                          data-dropdown-css-class="select2-blue" style="width: 100%; ">
                            @foreach($industries as $industry)
                            <option value="{{ $industry->name}}" @if ($industry->match == true) selected = "selected" @endif)> {{$industry->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="title">exp level:</label>
                        <select class="form-control" id="exp_level" name="exp_level" placeholder="exp_level" >
                          <option value="Exp Level" @if ($job->exp_level == "Exp Level") selected @endif>Exp Level</option>
                          <option value="Internship" @if ($job->exp_level == "Internship") selected @endif>Internship</option>
                          <option value="Entry Level" @if ($job->exp_level == "Entry Level") selected @endif>Entry Level</option>
                          <option value="Associate" @if ($job->exp_level == "Associate") selected @endif>Associate</option>
                          <option value="Mid-senior level" @if ($job->exp_level == "Mid-senior level") selected @endif>Mid-senior level</option>
                        </select>
                      </div>

                      <div class="well">
                        <label for="title">Job Description:</label>
                        <textarea id="config-text" name = "description" style="height: 300px; width: 100%; padding: 10px" >  {{$job->description}}</textarea>
                      </div>


                      <section class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">
                                  Job Detail
                                  <small>Simple and fast</small>
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                          title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                          title="Remove">
                                    <i class="fas fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body pad">
                                <div class="mb-3">
                                  <textarea class="textarea" id="editor1"  name="detail"  placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                   {{ $job->detail }}
                                  </textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                      </section>
                            
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->

            
            
            <!-- /.card -->
</div>



<footer>
  @include('admin.layouts.footer')
  </footer>
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>


<script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>

{{-- <script src="{{ asset('admin/plugins/location.js') }}"></script> --}}

<script>
	lodataset = {

		location:{
            country:[],
            state:[],
            city:[]	
        }

	}

	new Vue({
		delimiters: ['${', '}'],
			el: '#location123',
			data: lodataset
	})
	getCountry();
								


function getCountry(){
    $.ajax({
       type:'get',
       url:'{{ route('getcountry') }}', 
       dataType:'json',
       success:function(data){
          lodataset.location.country= data;
       },
       error: function(data) { console.log(data) }
    });
 }

function countryid(){
  countryid = $("#countryId").val();
  getState(countryid);
}

 function getState(id){ 
    $.ajax({
       type:'get',
       url:"{{route('getstate')}}"+"?id="+id, 
       dataType:'json',
       success:function(data){
          lodataset.location.state= data;
       },
       error: function(data) { console.log(data) }
    });
 }

 function stateid(){
  stateid = $("#stateId").val();
  getCity(stateid);
}

 function getCity(id){
    $.ajax({
       type:'get',   
       url:"{{route('getcity')}}"+"?id="+id, 
          dataType:'json',
         success:function(data){
          lodataset.location.city= data;
       },
        error: function(data) { console.log(data) }
    });
 }

  // function getlocation(){
  //   countryname = $("#countryId").val();
  //   statename = $("#stateId").val();
  //   cityname =      $("#cityId").val();
  //   alert(countryname);
  // }





</script>









{{-- <script src="{{ asset('admin/plugins/countrystatecity.js') }}"></script> --}}


<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>




<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    // Summernote
    //$('.textarea').summernote()
    CKEDITOR.replace('editor1');
    $('.textarea').wysihtml5();
  })
</script>


<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()


})
</script>




</body>
</html>
