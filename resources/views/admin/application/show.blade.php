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
            <h1>Applications</h1>

          </div>





          <div class="col-sm-6">


            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('application_view')}}">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{route('application_view')}}" class="serach-form-area" method="post">
      {{ csrf_field() }}
      <div class="row justify-content-center form-wrap">

        <label for="visa_status">status:</label>
          <div class="col-lg-2 form-cols" id="visa_status">

                <div class="select2-blue">
                  <select class="select2" multiple="multiple" data-placeholder="Select visa status" name="major[]"
                  data-dropdown-css-class="select2-blue" style="width: 100%; ">
                    <option value="OPT"> OPT</option>
                    <option value="H1B"> H1B</option>
                    <option value="Green Card"> Green Card</option>
                    <option value="Citizen"> Citizen</option>
                  </select>
                </div>

          </div>

          <label for="major">major:</label>
          <div class="col-lg-2 form-cols" id="major">


            <div class="select2-blue">
              <select class="select2" multiple="multiple" data-placeholder="Select major" name="major[]"
              data-dropdown-css-class="select2-blue" style="width: 100%; ">
                @foreach($majors as $major)
                <option value="{{ $major->name}}"> {{$major->name}}</option>
                @endforeach
              </select>
            </div>
          </div>



          <label for="degree">Degree:</label>
          <div class="col-lg-2 form-cols" id="degree">
            <div class="select2-blue">
              <select class="select2" multiple="multiple" data-placeholder="Select degree" name="major[]"
              data-dropdown-css-class="select2-blue" style="width: 100%; ">
                <option value="Bachelor"> Bachelor</option>
                <option value="Master"> Master</option>
                <option value="PHD"> PHD</option>
              </select>
            </div>
          </div>



          <label for="experience">Experience:</label>
          <div class="col-lg-2 form-cols" id="experience">
            <div class="default-select">
              <select  id="default-selects" name="experience">
                  <option value="Unselected">Unselected</option>
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                  <option value="2">less than 1 year</option>
                  <option value="3">1 to 5 years</option>
                  <option value="4">more than 5 years</option>
              </select>
            </div>
          </div>

          <div class="col-lg-1 form-cols">
              <button type="submit" class="btn btn-info">
                  <span class="lnr lnr-magnifier"></span> Search
              </button>
          </div>
      </div>
  </form>






        <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>application id</th>
                    <th>job id</th>
                    <th>user name</th>
                    <th>company name</th>
                    <th>position</th>
                     <th>resume</th>
                     <th>coverletter</th>
                     <th>transcript</th>
                     <th>review</th>
                     <th>status</th>
                     <th>edit</th>
                     <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($applications as $application)
                  <tr>
                     <td>{{ $application->id}}</td>
                     <td>{{ $application->job->id}}</td>
                     <td>{{ $application->user->name}}</td>
                     <td>{{ $application->job->company}}</td>
                     <td>{{ $application->job->position}}</td>
                     <td><a href = "{{route('host')}}/uploads/{{ $application->resume_path}}"> Resume</a> </td>
                     @if($application->coverletter_path != null)
                     <td><a href="{{route('host')}}/uploads/{{ $application->coverletter_path}}"> Coverletter</a> </td>
                     @else
                     <td></td>
                     @endif
                     @if($application->transcript_path != null)
                     <td><a href="{{route('host')}}/uploads/{{ $application->transcript_path}}"> Transcript</a> </td>
                     @else
                     <td></td>
                     @endif 


                     <td>{{ $application->review}}</td>
                     <td>{{ $application->status}}</td>
                     <td>

                      {{-- <a data-toggle="modal" data-target="#myModal" > <i class="fas fa-pen"> </a>  --}}
                       <a data-toggle="modal" data-target="#myModal{{ $application->id }}"> <i class="fas fa-pen"></i> </a>

                      </td>




                     {{-- <td><a href="{{ route('job_edit',$job->id) }}">  <i class="fas fa-pen"> </a></td> --}}
                     <td>
                         <a href="{{ route('application_delete',$application->id) }}">  <i class="fas fa-trash"></i> </a></td>

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


                   <!-- 模态框（Modal） -->
 <div class="modal fade" id="myModal{{ $application->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">
          Edit Application
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>

      </div>
      <form action="{{ route('application_update') }}" method="post">
        {{ csrf_field() }}
      <div class="modal-body">


        <div class="form-group">
          <label for="title">review:</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$application->id}}"  hidden>
          <input type="text" class="form-control" name="user-id" value="{{$application->user->id}}"  hidden>
          <input type="text" class="form-control" name="company" value="{{$application->job->company}}"  hidden>
          <input type="text" class="form-control" id="review" name="review" placeholder="review" value="{{ $application->review }}">
        </div>

        <label for="title">status:</label>
        <select class="form-control" id="status" name="status" placeholder="status" >
          <option value="Pending" @if ($application->status == "Pending") selected @endif>Pending</option>
          <option value="Processing" @if ($application->status == "Processing") selected @endif>Processing</option>
          <option value="Closed" @if ($application->status == "Closed") selected @endif>Closed</option>
          <option value="Offer" @if ($application->status == "Offer") selected @endif>Offer</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close
        </button>
        <button type="submit" class="btn btn-primary">
          submit
        </button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>

                  @endforeach



                  </tbody>
                  <tfoot>
               <tr>
                <th>application id</th>
                    <th>job id</th>
                    <th>user name</th>
                    <th>company name</th>
                    <th>position</th>
                     <th>resume</th>
                     <th>coverletter</th>
                     <th>transcript</th>
                     <th>review</th>
                     <th>status</th>
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
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

{{-- <script>
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
</script> --}}
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>

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
