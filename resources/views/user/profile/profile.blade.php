<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>51Careers-Profile</title>
  @include('user/layouts/head')
  <link href="{{ asset('user/profile/style/css/select2.css') }}" rel="stylesheet">
  <style>
  input[type="checkbox"] {
    -webkit-appearance: checkbox;
  }
  .modal input {
    margin-bottom: 8px;
  }
  #body {
    line-height: 1.6;
    padding-top: 100px;
  }
  #avatar {
    border-radius: 50%;
    border: 2px outset grey;
  }
  #avatar:hover {
    border: 2px outset #3078be;
    box-shadow:
    inset 0 0 30px whitesmoke,
    inset 10px 0 40px #3078be,
    inset -10px 0 40px #0ff,
    inset 10px 0 150px #3078be,
    inset -10px 0 150px #0ff,
    0 0 25px #fff,
    -5px 0 15px #3078be,
    5px 0 15px #0ff;
  }
  #avatar:active {
    border: 3px inset #3078be;
    transform: translateX(1px) translateY(1px);
  }
  #profile {
    transition: all 1s;
  }
  .nav-tabs > li > a {
    color: #3078be;
    font-family: 'Lora', sans-serif;
    font-size: 20px;
  }
  .nav-link:not(.active):hover {
    color: #444;
  }
  .info-board {
    border-radius: 5px;
    border: 1px outset #AAA;
    box-shadow: 3px 6px 5px #666;
  }
  .left-panel i {
    transform: translateY(6px);
    color: #3078be;
  }
  .card-border {
    border-radius: 15px;
    border: 2px double #CCC;
    box-shadow: 0px 0px 5px #3078be;
  }
  .button-row {
    margin-top: 10px;
  }
  .resume-title {
    font-size: 20px;
    font-weight: bold;
  }
  .resume-date {
    font-size: 16px;
    color: grey;
    font-style: italic;
  }
  .resume-icon {
    transition: all 0.1s;
  }
  .resume-icon:hover {
    transform: translateY(5px) scale(1.1);
  }
  .resume-instruction {
    color: grey;
  }

  </style>
</head>
<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->

  <div id="body">
    <div class="container" style="padding-top: 20px; margin-bottom: 15px;">
      <div class="row">
        <div class="col-2" style="text-align: center;">
          <form action="profile/avatar" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="change-avatar">
              <div style="width: 120px; height: 120px;">
                <img id="avatar" style="height: 100%; width: 100%; object-fit: cover;"
                src="@if ($profile->avatar) {{ Storage::url($profile->avatar) }}
                @else {{ asset('user/img/51defaultavatar.jpg') }} @endif">
              </div>
            </label>
            <input id="change-avatar" class="hidden" type="file" name="avatar" onchange="this.form.submit();">
          </form>
        </div>
        <div class="col-4">
          <h3>{{ $user->name }}</h3>
          <hr class="solid">
          <h6>Phone: {{ $user->phone }}</h6>
          <h6>Email: {{ $user->email }}</h6>
        </div>
      </div>
    </div>
    <!-- Nav tabs -->
    <div class="bg-white" style="width: 100%">
      <div class="container">
        <ul id="nav-tab" class="nav nav-tabs" role="tablist">
          <li class="nav-item" style="margin-left: rem">
            <a class="theme-color nav-link {{($tab != 'account' && $tab != 'notification' && $tab != 'application' && $tab != 'job') ? 'active' : '' }}" data-toggle="tab" href="#profile">
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="theme-color nav-link {{($tab == 'application') ? 'active' : '' }}" data-toggle="tab" href="#application">
              Application
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="theme-color nav-link {{($tab == 'job') ? 'active' : '' }}" data-toggle="tab" href="#job">
              Job
            </a>
          </li> -->
          <li class="nav-item">
            <a class="theme-color nav-link {{($tab == 'notification') ? 'active' : '' }}" data-toggle="tab" href="#notification">
              Notification
            </a>
          </li>
          <li class="nav-item">
            <a class="theme-color nav-link {{($tab == 'account') ? 'active' : '' }}" data-toggle="tab" href="#account">
              Account
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Tab panes -->
    <div class="tab-content" style="height: 100%; padding-bottom: 2rem; background: rgba(245, 245, 245);">
      <div id="profile" class="container tab-pane
      {{ !in_array($tab, array('account', 'notification', 'application', 'job')) ? 'active' : ''}}">
        <br>
        @if ($user->status == 0)
        <div class="col-12" style="padding: 0;">
          <div class="alert alert-info alert-dismissible fade show centered" role="alert" style="margin-bottom: 25px;">
            <strong>Notice!</strong> You'll need to fill in all the required information before applying for jobs!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
        @endif
        <div class="col-12">
          <div class="row">
            <!-- Left Panel -->
            <div class="info-board left-panel col-8 bg-white">

              <div id="basics" class="hidden">
                <div class="card-body">
                  <div id="basics-show" >
                  </div>
                  <div id="basics-edit" class="hidden">
                  </div>
                </div>
              </div>

              <div id="description">
                <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                  <span class="title-font" style="font-size: 22px">Description</span>
                  <i class="clickable resume-icon far fa-edit description-toggle"></i>
                </div>
                <div class="card-body">
                  <div id="description-show" >
                    @if ($profile->description)
                    <p>
                      {{ $profile->description }}
                    </p>
                    @else
                    <div class="description-toggle">
                      <p class="resume-instruction">
                        Add a short summary to make your profile stand out.
                      </p>
                    </div>
                    @endif
                  </div>
                  <div id="description-edit" class="hidden">
                    <form class="description-form" action="/profile/profile/description" method="POST">
                      {{ csrf_field() }}
                      @if ($profile->description)
                      <textarea class="form-control col-12" name="description" style="min-height: 100px">{{ $profile->description }}</textarea>
                      @else
                      <textarea class="form-control col-12" name="description" placeholder="Tell us more about yourself"></textarea>
                      @endif
                      <div class="button-row row justify-content-end">
                        <div class='col-3'>
                          <input class="btn btn-primary" type="submit" value="Save">
                          <a class="theme-color description-toggle btn btn-outline-secondary">Cancel</a>
                        </div>
                      </div>
                    </form><!--end .description-form-->
                  </div><!--end .description-edit-->
                </div>
              </div>

              <div id="skill">
                <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
                  <span class="title-font" style="font-size: 22px">Skills</span>
                  <i class="clickable resume-icon far fa-edit skill-toggle"></i>
                </div>
                <div class="card-body">
                  <form method="POST" action="profile/skill">
                    {{ csrf_field() }}
                    <div class="select2-blue">
                      <select class="select2" multiple="multiple" data-placeholder="Add Your Skills" name="skills[]"
                      data-dropdown-css-class="select2-blue" style="width: 100%">
                        @foreach ($skills as $skill)
                        <option value="{{ $skill->name }}" @if ($profile->skills && in_array($skill->name, $profile->skills)) selected @endif)> {{ $skill->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="button-row row justify-content-end skill-save hidden">
                      <div class='col-3'>
                        <input class="btn btn-primary" type="submit" value="Save">
                        <a class="theme-color btn skill-toggle btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div id="experience">
                <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
                  <span class="title-font" style="font-size: 22px">Work Experience</span>
                  <i class="clickable resume-icon fa fa-plus fa-lg experience-toggle"></i>
                  <i class="hidden clickable resume-icon fa fa-lg fa-minus experience-toggle"></i>
                </div>
                <div class="card-body">
                  <div id="experience-add" class="hidden">
                    <form class="experience-form" method="POST" action="{{ route('experience.store') }}">
                      {{ csrf_field() }}
                      <table>
                        <tbody>
                          <tr>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <input type="text" class="form-control" placeholder="Company name" name="companyName">
                            </td>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <input type="text" class="form-control" placeholder="Your title" name="title">
                            </td>
                            <td>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="experience-present" name="present">
                                <label class="form-check-label" for="experience-present">Present</label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <div class="fl">
                                <input type="date" class="form-control" value="" name="startDate">
                              </div>
                              <div class="clear"></div>
                            </td>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <div class="fl">
                                <input type="date" class="form-control" value="" name="endDate">
                              </div>
                              <div class="clear"></div>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top"></td>
                            <td colspan="3">
                              <textarea class="form-control" name="description" placeholder="Work description"></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td colspan="3">
                              <div class="button-row">
                                <input class="btn btn-primary" type="submit" value="Save">
                                <a class="theme-color hidden experience-toggle btn btn-outline-secondary">Cancel</a>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </form><!--end .experience-form-->
                    <hr>
                  </div><!--end .experience-edit-->
                  <div id="experience-show">
                    <ul>
                      @forelse ($companies as $company)
                      <li>
                        <div class="row">
                          <div class="col-11">
                            @if ($company->present)
                            <p class="resume-title">
                              <i class="fas fa-check-circle" style="transform: translateY(-1px);"></i>
                              {{ $company->title }} <i>(Present)</i>
                            </p>
                            @else
                            <p class="resume-title">
                              {{ $company->title }}
                            </p>
                            @endif
                          </div>
                          <div class="col-1">
                            <div class="row">
                              <a href="" data-toggle="modal" data-target="#company-{{ $company->id }}-edit">
                                <i class="far fa-edit"></i>
                              </a>
                              <form id="delete-form-{{ $company->id }}" method="post" action="{{ route('experience.destroy',$company->id) }}" style="display: none">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                              </form>
                              <span style="width: 10px"></span>
                              <a href="" onclick="
                              if(confirm('Are you sure want to delete?'))
                              {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $company->id }}').submit();
                              }
                              else
                              {
                                event.preventDefault();
                              }" >
                              <i class="far fa-trash-alt" style="color: #DC143C"></i></a>
                            </div>
                          </div>
                        </div>
                        <div>{{ $company->company }}</div>
                        <div class="resume-date">
                          {{ $company->start_date }} to
                          @if ($company->present == 1)
                          Present
                          @else
                          {{ $company->end_date }}
                          @endif
                        </div>
                        <p>{{ $company->description }}</p>
                      </li>
                      <div class="modal" id="company-{{ $company->id }}-edit" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form role="form" action="{{ route('experience.update', $company ->id) }}" method="post">
                              <div class="modal-body">
                                {{ csrf_field() }} {{ method_field('PUT') }}
                                <div class="form-group">
                                  <input type="text" class="form-control" name="companyName" value="{{ $company->company }}">
                                  <input type="text" class="form-control" name="title" value="{{ $company->title }}">
                                  <input type="date" class="form-control" name="startDate" value="{{ $company->start_date }}">
                                  <input type="date" class="form-control" name="endDate" value="{{ $company->end_date }}">
                                  <textarea type="text" class="form-control" name="description">{{ $company->description }}</textarea>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn">Submit</button>
                                <a type="button" href="" data-toggle="modal" data-target="#company-{{ $company->id }}-edit" class="btn">Back</a>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      @if (!$loop->last) <hr> @endif
                      @empty
                      <div class="experience-toggle">
                        <p class="resume-instruction">
                          Add your work experience to stand out.
                        </p>
                      </div>
                      @endforelse
                    </ul>
                  </div>
                </div>
              </div>

              <div id="education">
                <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
                  <span class="title-font" style="font-size: 22px">Educational Background</span>
                  <i class="clickable resume-icon fa fa-lg fa-plus education-toggle"></i>
                  <i class="hidden clickable resume-icon fa fa-lg fa-minus education-toggle"></i>
                </div>
                <div class="card-body">
                  <div id="education-add" class="hidden">
                    <form class="educationalForm" method="POST" action="{{ route('education.store') }}">
                      {{ csrf_field() }}
                      <table>
                        <tbody><tr>
                          <td valign="top">
                            <span class="redstar">*</span>
                          </td>
                          <td>
                            <input type="text" placeholder="School name" name="schoolName" class="form-control">
                          </td>
                        </tr>
                        <tr>
                          <td valign="top">
                            <span class="redstar">*</span>
                          </td>
                          <td>
                            <select class="form-control" name="degree">
                              <option value="" disabled selected>Degree</option>
                              <option value="Bachelor">Bachelor</option>
                              <option value="Master">Master</option>
                              <option value="Phd">Phd</option>
                              <option value="Other">Other</option>
                            </select>
                          </td>
                          <td valign="top">
                            <span class="redstar">*</span>
                          </td>
                          <td>
                            <input type="text" placeholder="Major" name="major" class="form-control">
                          </td>
                        </tr>
                        <tr>
                          <td valign="top">
                            <span class="redstar">*</span>
                          </td>
                          <td>
                            <div class="fl">
                              <input type="date" class="form-control" value="" name="startDate">
                            </div>
                          </td>
                          <td valign="top">
                            <span class="redstar">*</span>
                          </td>
                          <td>
                            <div class="fl">
                              <input type="date" class="form-control" value="" name="endDate">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td colspan="3">
                            <div class="button-row">
                              <input class="btn btn-primary" type="submit" value="Save">
                              <a class="theme-color hidden education-toggle btn btn-outline-secondary">Cancel</a>
                            </div>
                          </td>
                        </tr>
                      </tbody></table>
                      <input type="hidden" class="eduId" value="">
                    </form><!--end .educationalForm-->
                    <hr>
                  </div><!--end .educationalEdit-->
                  <div id="education-show">
                    <ul class="slist clearfix">
                      @forelse ($educations as $education)
                      <li>
                        <div class="row">
                          <div class="col-11 resume-title">
                            {{ $education->school }}
                          </div>
                          <div class="col-1">
                            <div class="row">
                              <a href="" data-toggle="modal" data-target="#education-{{ $education->id }}-edit">
                                <i class="far fa-edit"></i>
                              </a>
                              <span style="width: 10px"></span>
                              <form id="delete-form-{{ $education->id }}" method="post" action="{{ route('education.destroy',$education->id) }}" style="display: none">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure want to delete?'))
                              {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $education->id }}').submit();
                              }
                              else
                              {
                                event.preventDefault();
                              }" >
                              <i class="far fa-trash-alt" style="color: #DC143C"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="row col-12 justify-content-between">
                          <div>{{ $education->degree }} of {{ $education->major }}</div>
                          <div class="resume-date">
                            {{ date('Y', strtotime($education->start_date)) }} to {{ date('Y', strtotime($education->end_date)) }}
                          </div>
                        </div>
                      </li>
                      <div class="modal" id="education-{{ $education->id }}-edit" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form role="form" action="{{ route('education.update', $education->id) }}" method="post">
                              <div class="modal-body">
                                {{ csrf_field() }} {{ method_field('PUT') }}
                                <div class="form-group">
                                  <select class="form-control" name="degree">
                                    <option value="{{ $education->degree }}" selected>{{ $education->degree }}</option>
                                    @if ( $education->degree != 'Bachelor')
                                    <option value="Bachelor">Bachelor</option>
                                    @endif
                                    @if ( $education->degree != 'Master')
                                    <option value="Master">Master</option>
                                    @endif
                                    @if ( $education->degree != 'Phd')
                                    <option value="Phd">Phd</option>
                                    @endif
                                    @if ( $education->degree != 'Other')
                                    <option value="Other">Other</option>
                                    @endif
                                  </select>
                                  <input type="text" class="form-control " name="schoolName" value="{{ $education->school }}">
                                  <input type="text" class="form-control" name="major" value="{{ $education->major }}">
                                  <input type="date" class="form-control" name="startDate" value="{{ $education->start_date }}">
                                  <input type="date" class="form-control" name="endDate" value="{{ $education->end_date }}">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn">Submit</button>
                                <a type="button" href="" data-toggle="modal" data-target="#education-{{ $education->id }}-edit" class="btn">Back</a>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      @if (!$loop->last) <hr> @endif
                      @empty
                      <div class="education-toggle">
                        <p class="resume-instruction">
                          Update your education details to stand out.
                        </p>
                      </div>
                      @endforelse
                    </ul>
                  </div>
                </div>
              </div>

              <div id="project">
                <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
                  <span class="title-font" style="font-size: 22px">Project</span>
                  <i class="clickable resume-icon fa fa-lg fa-plus project-toggle"></i>
                  <i class="hidden clickable resume-icon fa fa-lg fa-minus project-toggle"></i>
                </div>
                <div class="card-body">
                  <div id="project-edit" class="hidden">
                    <form class="projectForm" method="POST" action="{{ route('experience.store') }}">
                      {{ csrf_field() }}
                      <table>
                        <tbody>
                          <tr>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <input type="text" placeholder="Project name" name="projectName" class="form-control">
                            </td>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <input type="text" placeholder="Your role" name="title" class="form-control">
                            </td>
                          </tr>
                          <tr>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <div class="fl">
                                <input type="date" placeholder="start_date" class="form-control" value="" name="startDate">
                              </div>
                              <div class="clear"></div>
                            </td>
                            <td valign="top">
                              <span class="redstar">*</span>
                            </td>
                            <td>
                              <div class="fl">
                                <input type="date" placeholder="end_date" class="form-control" value="" name="endDate">
                              </div>
                              <div class="clear"></div>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top"></td>
                            <td colspan="3">
                              <textarea class="form-control" name="description" placeholder="Project description"></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top"></td>
                            <td colspan="3">
                              <div class="button-row">
                                <input class="btn btn-primary" type="submit" value="Save">
                                <a class="theme-color hidden project-toggle btn btn-outline-secondary">Cancel</a>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </form><!--end .projectForm-->
                    <hr>
                  </div><!--end .projectEdit-->
                  <div id="project-show">
                    <ul>
                      @forelse ($projects as $project)
                      <li>
                        <div class="row">
                          <div class="col-11">
                            <p class="resume-title">
                              {{ $project->title }}
                            </p>
                          </div>
                          <div class="col-1">
                            <div class="row">
                              <a href="" data-toggle="modal" data-target="#project-{{ $project->id }}-edit">
                                <i class="far fa-edit"></i>
                              </a>
                              <form id="delete-form-{{ $project->id }}" method="post" action="{{ route('experience.destroy',$project->id) }}" style="display: none">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                              </form>
                              <span style="width: 10px"></span>
                              <a href="" onclick="
                              if(confirm('Are you sure want to delete?'))
                              {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $project->id }}').submit();
                              }
                              else
                              {
                                event.preventDefault();
                              }" >
                              <i class="far fa-trash-alt" style="color: #DC143C"></i></a>
                            </div>
                          </div>
                        </div>
                        <div>{{ $project->project }}</div>
                        <div class="resume-date">{{ $project->start_date }} to {{ $project->end_date }}</div>
                        <p>{{ $project->description }}</p>
                      </li>
                      <div class="modal" id="project-{{ $project->id }}-edit" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form role="form" action="{{ route('experience.update', $project ->id) }}" method="post">
                              <div class="modal-body">
                                {{ csrf_field() }} {{ method_field('PUT') }}
                                <div class="form-group">
                                  <input type="text" class="form-control" name="projectName" value="{{ $project->project }}">
                                  <input type="text" class="form-control" name="title" value="{{ $project->title }}">
                                  <input type="date" class="form-control" name="startDate" value="{{ $project->start_date }}">
                                  <input type="date" class="form-control" name="endDate" value="{{ $project->end_date }}">
                                  <textarea type="text" class="form-control" name="description">{{ $project->description }}</textarea>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn">Submit</button>
                                <a type="button" href="" data-toggle="modal" data-target="#project-{{ $project->id }}-edit" class="btn">Back</a>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      @if (!$loop->last) <hr> @endif
                      @empty
                      <div class="project-toggle">
                        <p class="resume-instruction">
                          Showcase other projects that you participated in!
                        </p>
                      </div>
                      @endforelse
                    </ul>
                  </div><!--end .projectShow-->
                </div>
              </div>

              <div id="expect">
                <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
                  <span class="title-font" style="font-size: 22px">Job Preferences</span>
                  <i class="clickable resume-icon far fa-edit expect-toggle"></i>
                </div>
                <div class="card-body">
                  <form id="expect-form" method="POST" action="profile/expect">
                    {{ csrf_field() }}
                    <table>
                      <tbody id="expect-new-add-city">
                        <tr>
                          <td>
                            <label for="work-auth-type">Work Authorization Type:</label>
                          </td>
                          <td>
                            <select id="work-auth-type" name="visa" class="form-control" class="profile_select_287 profile_select_normal" required>
                              @if ($profile->visa)
                              <option value="{{ $profile->visa }}" selected>{{ $profile->visa }}</option>
                              @else
                              <option value="" selected>-- Select --</option>
                              @endif
                              @if ($profile->visa != "OPT")
                              <option value="OPT">OPT</option>
                              @endif
                              @if ($profile->visa != "H1B")
                              <option value="H1B">H1B</option>
                              @endif
                              @if ($profile->visa != "Green Card")
                              <option value="Green Card">Green Card</option>
                              @endif
                              @if ($profile->visa != "Citizen")
                              <option value="Citizen">Citizen</option>
                              @endif
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="expect-type">Preferred Job Type:</label>
                          </td>
                          <td>
                            <select id="expect-type" name="type" class="form-control" class="profile_select_287 profile_select_normal" required>
                              @if ($profile->expected_type)
                              <option value="{{ $profile->expected_type }}" selected>{{ $profile->expected_type }}</option>
                              @else
                              <option value="" selected>-- Select --</option>
                              @endif
                              @if ($profile->expected_type != "intern")
                              <option value="intern">Intern</option>
                              @endif
                              @if ($profile->expected_type != "part-time")
                              <option value="part-time">Part time</option>
                              @endif
                              @if ($profile->expected_type != "full-time")
                              <option value="full-time">Full time</option>
                              @endif
                              @if ($profile->expected_type != "all")
                              <option value="all">Any type</option>
                              @endif
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="expect-salary">Preferred Salary:</label>
                          </td>
                          <td>
                            <select id="expect-salary" name="salary" class="form-control" class="profile_select_287 profile_select_normal" required>
                              @if ($profile->expected_salary)
                              <option value="{{ $profile->expected_salary }}" selected>{{ $profile->expected_salary }}</option>
                              @else
                              <option value="" selected>Salary</option>
                              @endif
                              @if ($profile->expected_salary != "below30k")
                              <option value="below-30k">Below 30k</option>
                              @endif
                              @if ($profile->expected_salary != "30k-40k")
                              <option value="30k-40k">30k-40k</option>
                              @endif
                              @if ($profile->expected_salary != "40k-50k")
                              <option value="40k-50k">40k-50k</option>
                              @endif
                              @if ($profile->expected_salary != "50k-60k")
                              <option value="50k-60k">50k-60k</option>
                              @endif
                              @if ($profile->expected_salary != "60k-to-100k")
                              <option value="60k-to-100k">60k to 100k</option>
                              @endif
                              @if ($profile->expected_salary != "100k-to-150k")
                              <option value="100k-to-150k">100k to 150k</option>
                              @endif
                              @if ($profile->expected_salary != "above-150k")
                              <option value="above-150k">Above 150k</option>
                              @endif
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="expect-title">Preferred Position:</label>
                          </td>
                          <td>
                            <input id="expect-title" name="title" type="text" class="form-control" placeholder="Title"
                            @if ($profile->expected_title) value="{{ $profile->expected_title }}" @else value="" @endif required>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="expect-locations">Preferred Work Locations:</label>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <div class="select2-blue">
                              <select id="expect-locations" name="locations[]" class="select2" multiple="multiple" data-placeholder="Add your preferred work locations" data-dropdown-css-class="select2-blue" style="width: 100%">
                                @foreach ($locations as $location)
                                <option value="{{ $location->city }}, {{ $location->state }}, {{ $location->country }}"
                                  @if ($profile->expect_locations && in_array($location->city. ', '. $location->state. ', '. $location->country, $profile->expect_locations))
                                  selected @endif>
                                  {{ $location->city }}, {{ $location->state }}, {{ $location->country }}
                                </option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                        </tr>
                    </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="2">
                            <div class="button-row">
                              <input class="btn btn-primary" type="submit" value="Save">
                              <a class="theme-color hidden project-toggle btn btn-outline-secondary">Cancel</a>
                            </div>
                          </td>
                        </tr>
                        <input type="hidden" id="expect-city-num" value="1"/>
                      </tfoot>
                    </table>
                  </form><!--end #expectForm-->

                </div>
              </div>
            </div>

            <!-- Right Panel -->
            <div class="col-4">
              <!-- Resume -->
              <div class="card mb-3 card-border" style="margin-left: 20px;">
                <div class="card-header bg-transparent border-primary title-font" style="font-size: 22px;">My Resume</div>
                <div class="card-body">
                  @if ($profile->resume)
                  <form action="{{ route('download_resume') }}" method="POST">
                    {{ csrf_field() }}
                    <button for="download-resume" class="btn btn-block btn-light" style="border-radius: 20px;">
                      <?php
                      $filenameSplits = explode("/", $profile->resume);
                      $filenameResume = end($filenameSplits);
                      $filenameSplits = explode(".", $filenameResume);
                      $fileExtRes = end($filenameSplits);
                      ?>
                      @if ($fileExtRes == "doc" || $fileExtRes == "docx")
                      <i class="far fa-file-word fa-lg"></i>
                      @elseif ($fileExtRes == "pdf")
                      <i class="far fa-file-pdf fa-lg"></i>
                      @else
                      <i class="far fa-file-alt fa-lg"></i>
                      @endif
                      &nbsp;{{ $filenameResume }}
                    </button>
                    <input class="hidden" type="text" name="path" value="{{ $profile->resume }}"/>
                    <input id="download-resume" class="hidden" type="submit"/>
                  </form>
                  <form action="{{ route('upload_resume') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="hidden" id="upload-resume" type="file" name="resume" onchange="this.form.submit();" required>
                  </form>
                  <p class="card-text"> Download to view your resume or
                    <label for="upload-resume">
                      <a class="theme-color" style="cursor: pointer">use another resume</a>
                    </label>.
                  </p>
                  @else
                  <form action="{{ route('upload_resume') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="upload-resume" class="btn btn-block btn-light" style="display: inline-block; width: 100%; border-radius: 20px;">
                      <i class="fas fa-file-upload fa-lg"></i>&nbsp;Upload Resume
                    </label>
                    <input class="hidden" id="upload-resume" type="file" name="resume" onchange="this.form.submit();" required>
                  </form>
                  <p class="card-text"> Click to upload your resume to 51Careers. </p>
                  @endif
                </div>
              </div>

              <!-- Transcript -->
              <div class="card mb-3 card-border" style="margin-left: 20px;">
                <div class="card-header bg-transparent border-primary title-font" style="font-size: 22px;">My Transcript</div>
                <div class="card-body">
                  @if ($profile->transcript)
                  <form action="{{ route('download_transcript') }}" method="POST">
                    {{ csrf_field() }}
                    <button for="download-transcript" class="btn btn-block btn-light" style="border-radius: 20px;">
                      <?php
                      $filenameSplits = explode("/", $profile->transcript);
                      $filenameTrans = end($filenameSplits);
                      $filenameSplits = explode(".", $filenameTrans);
                      $fileExtTrans = end($filenameSplits);
                      ?>
                      @if ($fileExtTrans == "doc" || $fileExtTrans == "docx")
                      <i class="far fa-file-word fa-lg"></i>
                      @elseif ($fileExtTrans == "pdf")
                      <i class="far fa-file-pdf fa-lg"></i>
                      @else
                      <i class="far fa-file-alt fa-lg"></i>
                      @endif
                      &nbsp;{{ $filenameTrans }}
                    </button>
                    <input class="hidden" type="text" name="path" value="{{ $profile->transcript }}"/>
                    <input id="download-transcript" class="hidden" type="submit"/>
                  </form>
                  <form action="{{ route('upload_transcript') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="hidden" id="upload-transcript" type="file" name="transcript" onchange="this.form.submit();" required>
                  </form>
                  <p class="card-text"> Download to view your transcript or
                    <label for="upload-transcript">
                      <a class="theme-color" style="cursor: pointer">use another transcript</a>
                    </label>.
                  </p>
                  @else
                  <form action="{{ route('upload_transcript') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="upload-transcript" class="btn btn-block btn-light" style="display: inline-block; width: 100%; border-radius: 20px;">
                      <i class="fas fa-file-upload fa-lg"></i>&nbsp;Upload Transcript
                    </label>
                    <input class="hidden" id="upload-transcript" type="file" name="transcript" onchange="this.form.submit();" required>
                  </form>
                  <p class="card-text"> Click to upload your transcript to 51Careers. </p>
                  @endif
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div id="application" class="container tab-pane {{($tab == 'application') ? 'active' : '' }}">
        <div class="col-12" style="height: 100%;">
          <br>
          <div class="info-board bg-white card-body text-primary">
            <div class="row">
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Status:</p>
              </div>
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Position:</p>
              </div>
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Files:</p>
              </div>
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Review:</p>
              </div>
            </div>
            <hr/>
            @foreach ($applications->sortBy('status') as $application)
            <div class="row">
              <div class="col-3">
                <p class="card-text">
                  {{ $application->status }}
                </p>
              </div>
              <div class="col-3">
                <p class="card-text">
                  {{ $application->job->position }}
                </p>
              </div>
              <div class="col-3">
                <a href = "{{route('host')}}/uploads/{{ $application->resume_path}}">Resume</a>
                <a  @if($application->coverletter_path == null) href=# @else href = "{{route('host')}}/uploads/{{ $application->coverletter_path}}" @endif >Coverletter</a>
                <a  @if($application->transcript_path == null) href=# @else href = "{{route('host')}}/uploads/{{ $application->transcript_path}}" @endif >Transcript</a>
              </div>
              <div class="col-3">
                <p class="card-text">
                  {{ $application->review }}
                </p>
              </div>
            </div>
            @if (!$loop->last) <hr /> @endif
            @endforeach
          </div>
        </div>
      </div>

      <!-- <div id="job" class="container tab-pane {{($tab == 'job') ? 'active' : '' }}">
        <br>
        <div class="row col-12">
          <div class="info-board left-panel col-8 bg-white ">
            <div id="expect">
              <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
                <span class="title-font" style="font-size: 22px">Target Jobs</span>
                <i class="clickable resume-icon fa fa-plus fa-lg experience-toggle"></i>
                <i class="hidden clickable resume-icon fa fa-lg fa-minus experience-toggle"></i>
              </div>
              <div class="card-body">

              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card mb-3 card-border" style="margin-left: 20px;">
              <div class="card-header bg-transparent border-primary">Saved Jobs</div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div id="notification" class="container tab-pane {{($tab == 'notification') ? 'active' : '' }}">
        <div class="col-12">
          <br>
          <div class="info-board bg-white card-body text-primary">
            <h6 class="card-title">
              <a href="" onclick="markNotificationsAsRead()">
                Mark all as read
              </a>
            </h6>
            <div class="row">
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Title:</p>
              </div>
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Opened:</p>
              </div>
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Sent:</p>
              </div>
              <div class="col-3">
                <p class="card-text" style="font-size: 19px">Message:</p>
              </div>
            </div>
            <hr/>
            @forelse (auth()->user()->notifications as $note)
            <?php $types = explode("\\", $note->type); $type = end($types) ?>
            <div class="row">
              <div class="col-3">
                <p class="card-text">
                  {{ $type }}
                </p>
              </div>
              <div class="col-3">
                <p class="card-text">
                  {{ $note->read_at }}
                </p>
              </div>
              <div class="col-3">
                <p class="card-text">
                  {{ $note->created_at }}
                </p>
              </div>
              <div class="col-3">
                <p class="card-text">
                  @if ($type == 'ApplicationStatus')
                  <a>Your application to {{ $note->data['company'] }} is {{ $note->data['review'] }}</a>
                  @elseif ($type == 'JobsRecommend')
                  <a href='{{ $note->data['link'] }}'>Some jobs were recommended for you to check out!</a>
                  @endif
                </p>
              </div>
            </div>
            @if (!$loop->last) <hr /> @endif
            @empty
            <a>No unread notifications</a>
            @endforelse
          </div>
        </div>
      </div>

      <div id="account" class="container tab-pane {{($tab == 'account') ? 'active' : '' }}">
        <br>
        <div class="col-12 info-board bg-white">
          <div class="card-header bg-transparent border-primary d-flex justify-content-between" >
            <span style="font-size: 18px">Email Preferences</span>
          </div>
          <div class="card-body">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">
                Subscribe to promotional emails from 51 Careers
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">
                Receive notification emails from 51 Careers
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
  </div>

  <footer>
    @include('user/layouts/footer')
  </footer>

  <!-- Backstage Chatbox -->
  <script>
      (function(d, w, c) {
          w.ChatraID = 'TjSQeyfYP6ipurbem';
          var s = d.createElement('script');
          w[c] = w[c] || function() {
              (w[c].q = w[c].q || []).push(arguments);
          };
          s.async = true;
          s.src = 'https://call.chatra.io/chatra.js';
          if (d.head) d.head.appendChild(s);
      })(document, window, 'Chatra');
  </script>
  @include('user/layouts/vendorjsfiles')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="{{ asset('user/profile/style/js/profile.js') }}"/></script>
</body>
</html>
