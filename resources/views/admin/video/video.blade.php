<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Editors</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  #<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
            <h1>Text Editors</h1>
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



   <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-hea der -->
                <!-- form start -->

                @if (count($errors)>0)
                    @foreach($errors->all() as $error)
                     <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif


                <form role="form" action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">video title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="title">



                       <div class="form-group">
                         <label for="subtitle">subtitle</label>
                           <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle">



                    <div class="form-group">
                        <label for="slug">slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                    </div>

                    <div class="form-group">
                      <label>select category </label>
                      <div class="select2-blue">
                        <select class="select2" multiple="multiple" data-placeholder="Select a vcategory" name="vcategory[]"
                        data-dropdown-css-class="select2-blue" style="width: 100%;">
                       @foreach($vcategories as $vcategory)
                     <option value="{{ $vcategory->name}}"> {{$vcategory->name}}</option>
                     @endforeach
                        </select>
                      </div>
                    </div>

                 

                    
                    <div class="form-group">
                        <label for="image">image file input</label>
                          <div class="input-group">
                             <div class="custom-file">
                              <input type="file" class="custom-file-input" id="image" name="image">
                               <label class="custom-file-label" for="image">Choose file</label>
                               </div>
                                <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>

                          <div class="form-group">
                                                 <label for="body">body</label>
                                                   <input type="text" class="form-control" id="body" name="body" placeholder="body">


                      </div>


                    <div class="form-check">
                      <input type="checkbox" name="status" value="1" class="form-check-input" id="status">
                      <label class="form-check-label" for="exampleCheck1">publish</label>
                    </div>
                  </div>
                  <!-- /.card-body -->

  {{--   <div class="form-group">
                        <label>select tags </label>
                        <div class="select2-blue">
                          <select class="select2" multiple="multiple" data-placeholder="Select a State" name="tags[]"
                          data-dropdown-css-class="select2-blue" style="width: 100%; ">
                            @foreach($tags as $tag)
                            <option value="{{ $tag->id}}"> {{$tag->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

  <div class="form-group">
                        <label>select category </label>
                        <div class="select2-blue">
                          <select class="select2" multiple="multiple" data-placeholder="Select a State" name="categories[]"
                          data-dropdown-css-class="select2-blue" style="width: 100%;">
                         @foreach($categories as $category)
                       <option value="{{ $category->id}}"> {{$category->name}}</option>
                       @endforeach
                          </select>
                        </div>
                      </div>
                      --}}

              </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        {{--  <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                此处编辑正文
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
                <textarea class="textarea" id="editor1"  name="body"  placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div> --}}
<div class="card-footer">

                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a type="button" href='{{ route('video.index') }}' class="btn btn-warning">Back</a>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
     </form>
  </div>
  <!-- /.content-wrapper -->
  @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- Summernote -->
#<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
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
