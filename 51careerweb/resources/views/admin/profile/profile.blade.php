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
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>education datatable</h1>
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
    <div class="education card">
      <!-- /.card-header -->
      <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>id</th>
              <th>user</th>
              <th>school</th>
              <th>degree</th>
              <th>major</th>
              <th>start_date</th>
              <th>end_date</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($educations as $education)
            <tr>
              <td>{{ $education->id }}</td>
              <td>{{ $education->user }}</td>
              <td>{{ $education->school }}</td>
              <td>{{ $education->degree }}</td>
              <td>{{ $education->major }}</td>
              <td>{{ $education->start_date}}</td>
              <td>{{ $education->end_date }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>project datatable</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>user</th>
                <th>project</th>
                <th>title</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>description</th>
                <!-- <th>edit</th>
                <th>delete</th> -->
              </tr>
              </thead>
              <tbody>
              @foreach ($projects as $project)
              <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->user }}</td>
                <td>{{ $project->project }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->start_date}}</td>
                <td>{{ $project->end_date }}</td>
                <td>{{ $project->description }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>work datatable</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>user</th>
                <th>company</th>
                <th>title</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>description</th>
                <!-- <th>edit</th>
                <th>delete</th> -->
              </tr>
              </thead>
              <tbody>
              @foreach ($works as $work)
              <tr>
                <td>{{ $work->id }}</td>
                <td>{{ $work->user }}</td>
                <td>{{ $work->project }}</td>
                <td>{{ $work->title }}</td>
                <td>{{ $work->start_date}}</td>
                <td>{{ $work->end_date }}</td>
                <td>{{ $work->description }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>showcase datatable</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>id</th>
              <th>user</th>
              <th>link</th>
              <th>description</th>
              <!-- <th>edit</th>
              <th>delete</th> -->
            </tr>
            </thead>
            <tbody>
            @foreach ($showcases as $showcase)
            <tr>
              <td>{{ $showcase->id }}</td>
              <td>{{ $showcase->user }}</td>
              <td><a href="http://{{ $showcase->link }}">{{ $showcase->link }}</a></td>
              <td>{{ $showcase->description }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

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
  });
</script>

</body>
</html>
