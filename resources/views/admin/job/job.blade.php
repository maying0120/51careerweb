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
            <h1>Jobs</h1>

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
                  {{-- <a class='col-lg-offset-20 btn btn-success' href="{{ route('post.create') }} " > Add new job </a> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tbody>


                    <form role="form" action="{{ route('job_add') }}" method="post"
                    >
                    {{ csrf_field() }}
                        
    
                    <div class="form-group">
                      <label for="title">position:</label>
                      <input type="text" class="form-control" id="position" name="position" placeholder="position" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">location:</label>
                      <br>
                      {{-- <input type="text" class="form-control" id="location" name="location" placeholder="location" > --}}
                      <select class="form-control" id="location" name="location" placeholder="location" >
                        <option value="Location" >Location</option>
                        <option value="New York">New York</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="Dallas">Dallas</option>
                        <option value="Brooklyn">Brooklyn</option>
                        <option value="Houston">Houston</option>
                        <option value="Chicago">Chicago</option>
                      </select>
                    
                    
                    </div>
    
                    <div class="form-group">
                      <label for="title">job type:</label>
                      <input type="text" class="form-control" id="job_type" name="job_type" placeholder="job_type" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">salary:</label>
                      <input type="text" class="form-control" id="salary" name="salary" placeholder="salary" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">company size:</label>
                      <input type="text" class="form-control" id="company_size" name="company_size" placeholder="company_size" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">company:</label>
                      <input type="text" class="form-control" id="company" name="company" placeholder="company" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">start time:</label>
                      <input type="text" class="form-control" id="start_time" name="start_time" placeholder="start_time" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">end time:</label>
                      <input type="text" class="form-control" id="end_time" name="end_time" placeholder="end_time" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">hire time:</label>
                      <input type="text" class="form-control" id="hire_time" name="hire_time" placeholder="hire_time" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">major:</label>
                      <input type="text" class="form-control" id="major" name="major" placeholder="major" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">visa status:</label>
                      <input type="text" class="form-control" id="visa_status" name="visa_status" placeholder="visa_status" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">english level:</label>
                      <input type="text" class="form-control" id="english_level" name="english_level" placeholder="english_level" >
                    </div>
    
                    <div class="form-group">
                      <label for="title">skill:</label>
                      <input type="text" class="form-control" id="skill" name="skill" placeholder="skill" >
                    </div>

                    <div class="form-group">
                      <label for="title">industry:</label>
                      <select class="form-control" id="industry" name="industry" placeholder="industry" >
                        <option value="Industry">Industry</option>
										    <option value="Medical">Medical</option>
										    <option value="Technology">Technology</option>
										    <option value="Goverment">Goverment</option>
										    <option value="Development">Development</option>
                      </select>
                    
                    </div>

                    <div class="form-group">
                      <label for="title">exp level:</label>
                      <select class="form-control" id="exp_level" name="exp_level" placeholder="exp_levels" >
                        <option value="Exp Level">Exp Level</option>
										    <option value="Internship">Internship</option>
										    <option value="Entry Level">Entry Level</option>
										    <option value="Associate">Associate</option>
										    <option value="Mid-senior level">Mid-senior level</option>
                      </select>
                    
                    </div>
               
                    <button type="submit" class="btn btn-primary">Submit</button>



                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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



<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
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

</body>
</html>
