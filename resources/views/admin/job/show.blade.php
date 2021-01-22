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
                  <a class='col-lg-offset-20 btn btn-success' href="{{ route('job_create') }} " > Add new job </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>job id</th>
                    <th>position</th>
                    <th>country</th>
                    <th>state</th>
                    <th>city</th>
                    <th>job type</th>
                    <th>salary</th>
                    <th>company size</th>
                    <th>company</th>
                    <th>start time</th>
                     <th>end time</th>
                     <th>hire time</th>
                     <th>major</th>
                     <th>visa status</th>
                     <th>english skill</th>
                     <th>skill</th>
                     <th>industry</th>
                     <th>exp_level</th>
                     <th>edit</th>
                     <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($jobs as $job)
                  <tr>
                     <td>{{ $job->id}}</td>
                     <td>{{ $job->position}}</td>
                     <td>{{ $job->country}}</td>
                     <td>{{ $job->state}}</td>
                     <td>{{ $job->city}}</td>
                     <td>{{ $job->job_type}}</td>
                     <td>{{ $job->salary}}</td>
                     <td>{{ $job->company_size}}</td>
                     <td>{{ $job->company}}</td>
                     <td>{{ $job->start_time}}</td>
                     <td>{{ $job->end_time}}</td>
                     <td>{{ $job->hire_time}}</td>
                     <td>{{ $job->major}}</td>
                     <td>{{ $job->visa_status}}</td>
                     <td>{{ $job->english_level}}</td>
                     <td>{{ $job->skill}}</td>
                     <td>{{ $job->industry}}</td>
                     <td>{{ $job->exp_level}}</td>

                     <td><a href="{{ route('job_edit',$job->id) }}">  <i class="fas fa-pen"> </a></td>
                     <td>
                      <a href="{{ route('job_delete',$job->id) }}">  <i class="fas fa-trash"> </a></td>
                    
                      {{-- <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      </form>
                      <a href="" onclick="
                      if(confirm('Are you sure want to delete?'))
                      {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $post->id }}').submit();
                      }
                      else
                      {
                      event.preventDefault();
                      }" >   <i class="fas fa-trash"></i></a>
                      </td> --}}
                  </tr>


                  @endforeach



                  </tbody>
                  <tfoot>
               <tr>
                <th>job id</th>
                <th>position</th>
                <th>country</th>
                <th>state</th>
                <th>city</th>
                <th>job type</th>
                <th>salary</th>
                <th>company size</th>
                <th>company</th>
                <th>start time</th>
                 <th>end time</th>
                 <th>hire time</th>
                 <th>major</th>
                 <th>visa status</th>
                 <th>english skill</th>
                 <th>skill</th>
                 <th>industry</th>
                 <th>exp_level</th>
                 <th>edit</th>
                 <th>delete</th>
                 </tr>
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
