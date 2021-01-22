<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link" style="padding-left: 25px;">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <span class="brand-text font-weight-light" style="margin-left: 3px;">51 Careers</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="height: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="margin: auto;">
          <a href="#" class="d-block">Admin: {{ Auth::guard('admin')->user()->name }}</a>
        </div>
        <div style="margin: auto;">
          <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button class="btn btn-primary btn-sm">logout</button>
          </a>
          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul id="user" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#user" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Users</p>
            </a>
            <ul>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Basic registration Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/profile/0" class="nav-link">
                  <i class="far"></i>
                  <p>User Profile Info</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul id="job" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#job" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Jobs</p>
            </a>
            <ul>
              <li class="nav-item">
                <a href="{{ route('job_create') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Post Jobs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('job_view') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Job Management</p>
                </a>
              </li>

                  <li class="nav-item">
                              <a href="{{ route('application_view') }}" class="nav-link">
                                <i class="far"></i>
                                <p>Application Management</p>
                              </a>
                            </li>

              <li class="nav-item">
                <a href="{{ route('skill_view') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Skill Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('industry_view') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Industry Management</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('major_view') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Major Management</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>

        <ul id="post" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#post" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Posts</p>
            </a>
            <ul>

                 <li class="nav-item">
                            <a href="{{ route('post.create') }}" class="nav-link">
                              <i class="far"></i>
                              <p>Post Articles</p>
                            </a>
                          </li>

              <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Article Management </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Category Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tag.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Tag Management</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>


        <ul id="video" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#video" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Videos</p>
            </a>
            <ul>
              <li class="nav-item">
                <a href="{{ route('video.create') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Post Videos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('video.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Video Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('vcategory.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>Category Management</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>

        <ul id="admin" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>admin</p>
            </a>
            <ul>
              <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">
                  <i class="far"></i>
                  <p>admin_user</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>


      </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
  </aside>
