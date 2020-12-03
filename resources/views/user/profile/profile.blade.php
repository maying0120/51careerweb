<html>
<head>
  @include('user/layouts/head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>51Careers-Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- summernote -->
    <link href="user/profile/style/css/style2.css" rel="stylesheet">
    <link href="user/profile/style/css/external.min.css"  rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
    <link href="user/profile/style/css/select2.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->

</br>
</br>
</br>
</br>
<div id="body">
  <div id="container">
    <div class="clearfix">
        <div class="content_l">

          <div class="profile_box" id="basicInfo">
            <h2>基本信息</h2>
            <span class="c_edit profile-toggle"></span>
            <div class="basicShow">
              <span>User: {{ $user->name }}</span><br>
              <span>Phone: {{ $user->phone }}</span><br>
              <span>Email: {{ $user->email }}</span><br>
              <div class="m_portrait">
                <div></div>
                @if ($profile->avatar)
                <img width="120" height="120" src="{{ Storage::url($profile->avatar) }}">
                @endif
              </div>
            </div>
            <div class="basicEdit dn">
              <form id="profileForm">
                <table><tbody>
                  <tr>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td>
                      <input type="text" placeholder="姓名" value="" name="name" id="name">
                    </td>
                    <td valign="top"></td>
                    <td>
                      <ul class="profile_radio clearfix reset">
                        <li class="current">
                          男<em></em>
                          <input type="radio" name="gender" value="男">
                        </li>
                        <li>
                          女<em></em>
                          <input type="radio" checked="checked" name="gender" value="女">
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td colspan="3">
                      <input type="text" placeholder="手机号码" value="" name="tel" id="tel">
                    </td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td colspan="3">
                      <input type="text" placeholder="接收面试通知的邮箱" value="" name="email" id="email">
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">
                      <input type="submit" value="Save" class="btn_profile_save">
                      <a class="btn_profile_cancel profile-toggle">Cancel</a>
                    </td>
                  </tr>
                </tbody></table>
              </form><!--end #profileForm-->
              <div class="new_portrait">
                <form action="profile/avatar" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @if ($profile->avatar)
                  <div class="portraitShow" id="portraitShow">
                    <img width="120" height="120" src="{{ Storage::url($profile->avatar) }}">
                    <span>Change profile pic</span>
                  </div>
                  @else
                  <div class="portrait_upload" id="portraitNo">
                    <span>Upload profile pic</span>
                  </div>
                  @endif
                  <input type="file" title="支持jpg、jpeg、gif、png格式，文件小于5M" name="avatar" onchange="this.form.submit();">
                  <!-- <input type="hidden" id="headPicHidden" /> -->
                  <em>
                    Size：120*120px <br>
                  </em>
                </form>
                <span style="display:none;" id="headPic_error" class="error"></span>
              </div><!--end .new_portrait-->
            </div><!--end .basicEdit-->
            <input type="hidden" id="nameVal" value="" >
            <input type="hidden" id="genderVal" value="">
            <input type="hidden" id="topDegreeVal" value="">
            <input type="hidden" id="workyearVal" value="">
            <input type="hidden" id="currentStateVal" value="">
            <input type="hidden" id="emailVal" value="">
            <input type="hidden" id="telVal" value="">
            <input type="hidden" id="pageType" value="1">
          </div><!--end #basicInfo-->

          <div class="profile_box" id="selfDescription">
            <h2>自我描述</h2>
            <span class="c_edit description-toggle"></span>
            <div class="descriptionShow">
              @if ($profile->description)
              {{ $profile->description }}
              @endif
            </div>
            <div class="descriptionEdit dn">
              <form class="descriptionForm" action="profile/description" method="POST">
                {{ csrf_field() }}
                <table>
                  <tbody><tr>
                    <td colspan="2">
                      @if ($profile->description)
                      <textarea class="selfDescription s_textarea" name="description" placeholder="">{{ $profile->description }}</textarea>
                      @else
                      <textarea class="selfDescription s_textarea" name="description" placeholder=""></textarea>
                      @endif
                      <div class="word_count">你还可以输入 <span>500</span> 字</div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="submit" value="Save" class="btn_profile_save">
                      <a class="btn_profile_cancel description-toggle">Cancel</a>
                    </td>
                  </tr>
                </tbody></table>
              </form><!--end .descriptionForm-->
            </div><!--end .descriptionEdit-->
          </div><!--end #selfDescription-->

          <div class="profile_box" id="expectJob">
            <h2>期望工作</h2>
            <span class="c_edit expect-toggle"></span>
            <div class="expectShow dn">
              <span></span>
            </div><!--end .expectShow-->
            <div class="expectEdit dn">
              <form id="expectForm" method="POST" action="profile/expect">
                {{ csrf_field() }}
                <table>
                  <tbody id="expect-new-add-city">
                    <tr>
                      <td>
                        <select class="profile_select_287 profile_select_normal" name="type" required>
                          @if ($profile->expected_type)
                          <option value="{{ $profile->expected_type }}" selected>{{ $profile->expected_type }}</option>
                          @else
                          <option value="" selected>Job Type</option>
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
                      <td>
                        <select class="profile_select_287 profile_select_normal" name="salary" required>
                          @if ($profile->expected_salary)
                          <option value="{{ $profile->expected_salary }}" selected>{{ $profile->expected_salary }}</option>
                          @else
                          <option value="" selected>Salary</option>
                          @endif
                          @if ($profile->expected_salary != "below-60k")
                          <option value="below-60k">Below 60k</option>
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
                        <input type="text" name="title" placeholder="Title" @if ($profile->expected_title) value="{{ $profile->expected_title }}" @else value="" @endif required>
                      </td>
                      <td>
                        <div class="select2-blue">
                          <select class="select2" multiple="multiple" data-placeholder="Skills" name="skills[]"
                          data-dropdown-css-class="select2-blue" >
                          @foreach ($skills as $skill)
                          <option value="{{ $skill->name }}" @if ($skill->match == true) selected @endif)> {{ $skill->name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </td>
                    </tr>

                    @if (!$profile->expected_cities)
                    <tr>
                      <td>
                        <select name="countries[]" class="countries form-control profile_select_287 profile_select_normal" id="countryId">
                          <option id = "selecountry" selected = "selected" ></option>
                          <option v-for="country in location.country" id = "selectcountry"   v-bind:value=country.id></option>
                        </select>
                      </td>
                      <td>
                        <select name="states[]" class="states form-control profile_select_287 profile_select_normal" id="stateId">
                          <option id = "selestate"  selected = "selected" ></option>
                          <option v-for="state in location.state" id = "selectstate"   v-bind:value=state.id></option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <select name="cities[]" class="cities form-control profile_select_287 profile_select_normal" id="cityId">
                          <option id = "selecity"  selected="selected" ></option>
                          <option v-for="city in location.city" id = "selectcity"   v-bind:value=city.name></option>
                        </select>
                      </td>
                      <td>
                        <a id="expect-new-add">Add another city</a>
                      </td>
                    </tr>
                    @else
                    @foreach ($profile->expected_cities as $city)
                    <tr>
                      <td>
                        <select name="countries[]" class="countries form-control profile_select_287 profile_select_normal" id="countryId">
                          <option id = "selecountry" selected="selected" value="{{ $profile->expected_countries[$loop->index] }}">{{ $profile->expected_countries[$loop->index] }}</option>
                          <option   v-for="country in location.country" id = "selectcountry"   v-bind:value=country.id>{{ $profile->expected_countries[$loop->index] }}</option>
                        </select>
                      </td>
                      <td>
                        <select name="states[]" class="states form-control profile_select_287 profile_select_normal" id="stateId">
                          <option id = "selestate"  selected>{{ $profile->expected_states[$loop->index] }}</option>
                          <option  v-for="state in location.state" id = "selectstate"   v-bind:value=state.id></option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <select name="cities[]" class="cities form-control profile_select_287 profile_select_normal"  id="cityId">
                          <option id = "selecity"  selected>{{ $city }}</option>
                          <option  v-for="city in location.city" id = "selectcity"   v-bind:value=city.name></option>
                        </select>
                      </td>
                      <td>
                        @if ($loop->last) <a id="expect-new-add">Add another city</a> @endif
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2">
                        <input id="expect-save" type="submit" value="Save" class="btn_profile_save">
                        <a class="btn_profile_cancel expect-toggle">Cancel</a>
                      </td>
                    </tr>
                    <input type="hidden" id="expect-city-num" value="1"/>
                  </tfoot>
                </table>
              </form><!--end #expectForm-->
            </div><!--end .expectEdit-->
            <div class="expectAdd pAdd expect-toggle">
              填写准确的期望工作能大大提高求职成功率哦…<br>
              快来添加期望工作吧！
              <span>添加期望工作</span>
            </div><!--end .expectAdd-->

            <input type="hidden" id="expectJobVal" value="">
            <input type="hidden" id="expectCityVal" value="">
            <input type="hidden" id="typeVal" value="">
            <input type="hidden" id="expectPositionVal" value="">
            <input type="hidden" id="expectSalaryVal" value="">
          </div><!--end #expectJob-->

          <div class="profile_box" id="educationalBackground">
            <h2>教育背景<span>（required）</span></h2>
            <span class="c_add education-toggle"></span>
            <div class="educationalShow">
              <ul class="slist clearfix">
                @foreach ($educations as $education)
                <li>{{ $education->school }} | {{ $education->degree }} | {{ $education->major }} | {{ $education->start_date }} | {{ $education->end_date }} |
                  <a data-toggle="modal" data-target="#education-{{ $education->id }}-edit">
                    <i class="fas fa-pen"></i>
                  </a> |
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
                  <i class="fas fa-trash"></i></a>
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
                @endforeach
              </ul>
            </div>
            <div class="educationalEdit dn">
              <form class="educationalForm" method="POST" action="{{ route('education.store') }}">
                {{ csrf_field() }}
                <table>
                  <tbody><tr>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td>
                      <input type="text" placeholder="School name" name="schoolName" class="schoolName">
                    </td>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td>
                      <select class="degree profile_select_139 profile_select_normal" name="degree">
                        <option value="" disabled selected>Degree</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Phd">Phd</option>
                        <option value="Other">Other</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td>
                      <input type="text" placeholder="Major" name="major" class="major">
                    </td>
                    <td valign="top">
                      <span class="redstar">*</span>
                    </td>
                    <td>
                      <div class="fl">
                        <input type="date" class="schoolStartDate" value="" name="startDate">
                      </div>
                      <div class="fl">
                        <input type="date" class="schoolEndDate" value="" name="endDate">
                      </div>
                      <div class="clear"></div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">
                      <input type="submit" value="Save" class="btn_profile_save">
                      <a class="btn_profile_cancel education-toggle">Cancel</a>
                    </td>
                  </tr>
                </tbody></table>
                <input type="hidden" class="eduId" value="">
              </form><!--end .educationalForm-->
            </div><!--end .educationalEdit-->
            <div class="educationalAdd pAdd education-toggle">
              教育背景可以充分体现你的学习和专业能力，<br>
              且完善后才可投递简历哦！
              <span>添加教育经历</span>
            </div>
            <!--end .educationalAdd-->
          </div><!--end #educationalBackground-->

          <div class="profile_box" id="workExperience">
            <h2>工作经历  <span> （required）</span></h2>
            <span class="c_add experience-toggle"></span>
            <div class="experienceShow">
              <ul class="slist clearfix">
                @foreach ($companies as $company)
                <li>{{ $company->company }} | {{ $company->title }} | {{ $company->start_date }} | {{ $company->end_date }} | {{ $company->description }} |
                  <a data-toggle="modal" data-target="#company-{{ $company->id }}-edit">
                    <i class="fas fa-pen"></i>
                  </a> |
                  <form id="delete-form-{{ $company->id }}" method="post" action="{{ route('experience.destroy',$company->id) }}" style="display: none">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                  </form>
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
                  <i class="fas fa-trash"></i></a>
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
                @endforeach
              </ul>
            </div>
            <div class="experienceEdit dn">
              <form class="experienceForm" method="POST" action="{{ route('experience.store') }}">
                {{ csrf_field() }}
                <table>
                  <tbody>
                    <tr>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <input type="text" placeholder="Company name" name="companyName" class="companyName">
                      </td>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <input type="text" placeholder="Your title" name="title" class="companyTitle">
                      </td>
                    </tr>
                    <tr>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <div class="fl">
                          <input type="date" class="companyStartDate" value="" name="startDate">
                        </div>
                        <div class="clear"></div>
                      </td>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <div class="fl">
                          <input type="date" class="companyEndDate" value="" name="endDate">
                        </div>
                        <div class="clear"></div>
                      </td>
                    </tr>
                    <tr>
                      <td valign="top"></td>
                      <td colspan="3">
                        <textarea class="workDescription s_textarea" name="description" placeholder="Work description"></textarea>
                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="3">
                        <input type="submit" value="Save" class="btn_profile_save">
                        <a class="btn_profile_cancel experience-toggle" >Cancel</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form><!--end .experienceForm-->
            </div><!--end .experienceEdit-->
            <div class="experienceAdd pAdd experience-toggle">
              工作经历最能体现自己的工作能力，<br>
              且完善后才可投递简历哦！
              <span>添加工作经历</span>
            </div>
            <!--end .experienceAdd-->
          </div><!--end #workExperience-->

          <div class="profile_box" id="projectExperience">
            <h2>项目经验</h2>
            <span class="c_add project-toggle"></span>
            <div class="projectShow">
              <ul class="slist clearfix">
                @foreach ($projects as $project)
                <li>{{ $project->project }} | {{ $project->title }} | {{ $project->start_date }} | {{ $project->end_date }} | {{ $project->description }} |
                  <a data-toggle="modal" data-target="#project-{{ $project->id }}-edit">
                    <i class="fas fa-pen"></i>
                  </a> |
                  <form id="delete-form-{{ $project->id }}" method="post" action="{{ route('experience.destroy',$project->id) }}" style="display: none">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                  </form>
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
                  <i class="fas fa-trash"></i></a>
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
                      <form role="form" action="{{ route('experience.update', $project->id) }}" method="post">
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
                @endforeach
              </ul>
            </div><!--end .projectShow-->
            <div class="projectEdit dn">
              <form class="projectForm" method="POST" action="{{ route('experience.store') }}">
                {{ csrf_field() }}
                <table>
                  <tbody>
                    <tr>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <input type="text" placeholder="Project name" name="projectName" class="projectName">
                      </td>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <input type="text" placeholder="Your role" name="title" class="projectTitle">
                      </td>
                    </tr>
                    <tr>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <div class="fl">
                          <input type="date" placeholder="start_date" class="projectStartDate" value="" name="startDate">
                        </div>
                        <div class="clear"></div>
                      </td>
                      <td valign="top">
                        <span class="redstar">*</span>
                      </td>
                      <td>
                        <div class="fl">
                          <input type="date" placeholder="end_date" class="projectEndDate" value="" name="endDate">
                        </div>
                        <div class="clear"></div>
                      </td>
                    </tr>
                    <tr>
                      <td valign="top"></td>
                      <td colspan="3">
                        <textarea class="projectDescription s_textarea" name="description" placeholder="Project description"></textarea>
                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                      </td>
                    </tr>
                    <tr>
                      <td valign="top"></td>
                      <td colspan="3">
                        <input type="submit" value="Save" class="btn_profile_save">
                        <a class="btn_profile_cancel project-toggle" >Cancel</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form><!--end .projectForm-->
            </div><!--end .projectEdit-->
            <div class="projectAdd pAdd project-toggle">
              项目经验是用人单位衡量人才能力的重要指标哦！<br>
              来说说让你难忘的项目吧！
              <span>添加项目经验</span>
            </div><!--end .projectAdd-->
          </div><!--end #projectExperience-->

          <div class="profile_box" id="worksShow">
            <h2>作品展示</h2>
            <span class="c_add showcase-toggle"></span>
            <div class="workShow">
              <ul class="slist clearfix">
                @foreach ($showcases as $showcase)
                <li>
                  <a href="{{ $showcase->link }}" text-decoration="none"> {{ $showcase->link }}</a> | {{ $showcase->description }} |
                  <a data-toggle="modal" data-target="#showcase-{{ $showcase->id }}-edit" text-decoration="none">
                    <i class="fas fa-pen"></i>
                  </a> |
                  <form id="delet e-form-{{ $showcase->id }}" method="post" action="{{ route('showcase.destroy',$showcase->id) }}" style="display: none">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                  </form>
                  <a href="" onclick="
                  if(confirm('Are you sure want to delete?'))
                  {
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $showcase->id }}').submit();
                  }
                  else
                  {
                    event.preventDefault();
                  }" >
                  <i class="fas fa-trash"></i></a>
                </li>
                <div class="modal" id="showcase-{{ $showcase->id }}-edit" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form role="form" action="{{ route('showcase.update', $showcase->id) }}" method="post">
                        <div class="modal-body">
                          {{ csrf_field() }} {{ method_field('PUT') }}
                          <div class="form-group">
                            <input type="url" class="form-control" name="link" value="{{ $showcase->link }}">
                            <textarea type="text" class="form-control" name="description">{{ $showcase->description }}</textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn">Submit</button>
                          <a type="button" href="" data-toggle="modal" data-target="#showcase-{{ $showcase->id }}-edit" class="btn">Back</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @endforeach
              </ul>
            </div><!--end .workShow-->
            <div class="workEdit dn">
              <form class="workForm" method="POST" action="{{ route('showcase.store') }}">
                {{ csrf_field() }}
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <input type="text" placeholder="Enter full link to your work" name="link" class="showcase-link">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <textarea maxlength="100" class="showcaseDescription s_textarea" name="description" placeholder="Enter description of the work"></textarea>
                        <div class="word_count">你还可以输入 <span>100</span> 字</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="submit" value="Save" class="btn_profile_save">
                        <a class="btn_profile_cancel showcase-toggle">Cancel</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <input type="hidden" class="showId" value="">
              </form><!--end .workForm-->
            </div><!--end .workEdit-->
            <div class="workAdd pAdd showcase-toggle">
              好作品会说话！<br>
              快来秀出你的作品打动企业吧！
              <span>添加作品展示</span>
            </div>
            <!--end .workAdd-->
          </div><!--end #worksShow-->



        </div><!--end .content_l-->


        <div class="content_r">
          <div class="mycenterR" id="myInfo">
            <h2>我的信息</h2>
            <a target="_blank" href="collections001.html">我收藏的职位</a>
            <br>
            <a target="_blank" href="subscribe001.html">我订阅的职位</a>
          </div><!--end #myInfo-->

          <div class="mycenterR" id="myResume">
            <h2>My Resume</h2><br />
            @if ($profile->resume)
            <form action="{{ route('download_resume') }}" method="POST">
              {{ csrf_field() }}
              <label for="download-resume">
                <a>{{ $profile->resume }}</a>
              </label>
              <input type="text" name="filename" value="{{ $profile->resume }}" class="dn"/>
              <input id="download-resume" type="submit" class="dn"/>
            </form>
            <label for="upload-resume">
              <a>Choose another resume</a>
            </label>
            @else
            <label for="upload-resume">
              <a>Upload resume</a>
            </label>
            @endif
            <div class="dn">
              <form action="{{ route('upload_resume') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input id="upload-resume" type="file" name="resume" onchange="this.form.submit();" required>
              </form>
            </div>
          </div><!--end #myResume-->

          <div class="mycenterR" id="myApplications">
            <h2>My Applications</h2><br />
            <ul>
              @foreach ($applications->sortBy('review') as $application)
              <li>
                <span>
                  <div>
                    <b><i>Status: {{ $application->review }}</i></b>
                  </div>
                  Company: {{ $application->job->company }} | Position: {{ $application->job->position }}
                </span>
                <div>
                  Files:
                  <a href = "{{route('host')}}/uploads/{{ $application->resume_path}}"> Resume</a>
                  <a  @if($application->coverletter_path == null) href=# @else href = "{{route('host')}}/uploads/{{ $application->coverletter_path}}" @endif > Coverletter</a>
                  <a  @if($application->transcript_path == null) href=# @else href = "{{route('host')}}/uploads/{{ $application->transcript_path}}" @endif > Transcript</a>
                </div>
              </li>
              @endforeach
            </ul>
          </div><!--end #myApplications-->
        </div>


        <input type="hidden" id="userid" name="userid" value="314873">


        <div style="display:none;">
          <!-- 上传简历 -->
          <div class="popup" id="uploadFile">
            <table width="100%">
              <tbody><tr>
                <td align="center">
                  <form>
                    <a class="btn_addPic">
                      <span>选择上传文件</span>
                      <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')" class="filePrew" id="resumeUpload" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" tabindex="3">
                    </a>
                  </form>
                </td>
              </tr>
              <tr>
                <td align="left">支持word、pdf格式文件<br>文件大小需小于10M</td>
              </tr>
              <tr>
                <!--	<td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>-->
              </tr>
              <tr>
                <td align="center"><img width="55" height="16" alt="loading" style="visibility: hidden;" id="loadingImg" src="style/images/loading.gif"></td>
              </tr>
            </tbody></table>
          </div><!--/#uploadFile-->

          <!-- 简历上传成功 -->
          <div class="popup" id="uploadFileSuccess">
            <h4>简历上传成功！</h4>
            <table width="100%">
              <tbody><tr>
                <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
              </tr>
              <tr>
                <td align="center"><a class="btn_s">确&nbsp;定</a></td>
              </tr>
            </tbody></table>
          </div><!--/#uploadFileSuccess-->

          <!-- 没有简历请上传 -->
          <div class="popup" id="deliverResumesNo">
            <table width="100%">
              <tbody><tr>
                <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
              </tr>
              <tr>
                <td align="center">
                  <form>
                    <a class="btn_addPic" >
                      <span>选择上传文件</span>
                      <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')" class="filePrew" id="resumeUpload1" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                    </a>
                  </form>
                </td>
              </tr>
              <tr>
                <td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
              </tr>
            </tbody></table>
          </div><!--/#deliverResumesNo-->

          <!-- 上传附件简历操作说明-重新上传 -->
          <div class="popup" id="fileResumeUpload">
            <table width="100%">
              <tbody><tr>
                <td>
                  <div class="f18 mb10">请上传标准格式的word简历</div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="f16">
                    操作说明：<br>
                    打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
                </td>
              </tr>
            </tbody></table>
          </div><!--/#fileResumeUpload-->
        </div>


        <div class="" id="qr_cloud_resume" style="display: none;">
          <div class="cloud">
            <img width="134" height="134" src="">
            <a class="close"></a>
          </div>
        </div>

        <div class="clear"></div>
        <input type="hidden" value="97fd449bcb294153a671f8fe6f4ba655" id="resubmitToken">
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
      </div>
    </div>

    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- <script src="{{ asset('admin/plugins/countrystatecity.js') }}"></script> -->
    <script src="{{ asset('admin/plugins/location.js') }}"></script>
    <script src="user/profile/style/js/profile.js"/></script>

    <!-- <script src="user/profile/style/js/profile.min.js"></script>
    <script async="" src="user/profile/style/js/conversion.js"></script>
    <script src="user/profile/style/js/jquery.1.10.1.min.js"></script>
    <script src="user/profile/style/js/jquery.lib.min.js" ></script>
    <script  src="user/profile/style/js/ajaxfileupload.js"></script>
    <script src="user/profile/style/js/additional-methods.js" ></script>
    <script type="text/javascript" src="user/profile/style/js/excanvas.js"></script>
    <script src="user/profile/style/js/conv.js"></script>
    <script src="user/profile/style/js/ajaxCross.json" charset="UTF-8"></script>
    <script src="user/profile/style/js/Chart.min.js"></script>
    <script src="user/profile/style/js/core.min.js"></script>
    <script src="user/profile/style/js/popup.min.js"></script> -->
    <script>
      $(document).ready(function(){
        //Initialize Select2 Elements
        $('.select2').select2()
    })
    </script>
</div>

</body>
<footer>
  @include('user/layouts/footer')
</footer>
</html>
