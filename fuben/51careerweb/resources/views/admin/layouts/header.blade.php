<header class="main-header">
    <!-- Logo -->

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" >



                        @if(Auth::guard('admin')->check())
                         <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <span> </span>

                          {{Auth::guard('admin')->user()->name}}

                              <button class="btn btn-primary btn-sm">
                                  logout</button>
                                </div>
                          </a>
                   <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                       {{ csrf_field() }}
                    </form>




@endif

            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">



              </li>
              <!-- Menu Footer-->
            /*  <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="btn btn-default pull-right">*/
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
