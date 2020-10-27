<div class="container d-flex">
  <div class="logo mr-auto">
    <a href="/"><img src="{{ asset('user/img/51careerlogo.png') }}" alt="" class="img-fluid"></a>
  </div>
  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="active"><a href="home">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="post">Post</a></li>
      <li><a href="job">Jobs</a></li>
      <li><a href="video">Blog</a></li>
      <li class="drop-down"><a href="">Drop Down</a>
        <ul>
          <li><a href="#">Drop Down 1</a></li>
          <li class="drop-down"><a href="#">Drop Down 2</a>
            <ul>
              <li><a href="#">Deep Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
              <li><a href="#">Deep Drop Down 3</a></li>
              <li><a href="#">Deep Drop Down 4</a></li>
              <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#">Drop Down 3</a></li>
          <li><a href="#">Drop Down 4</a></li>
          <li><a href="#">Drop Down 5</a></li>
        </ul>
      </li>
      <li class="drop-down"><a href="#">User</a>
        <ul>
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Sign up</a></li>
            @elseif(Auth::guard('web')->check())
            <li><a href="profile">Profile</a></li>
            <li>
              <a href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout {{ Auth::user()->name }}</a>
              <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
            @endif
          </li>
        </ul>
      </li>
    </ul>
  </nav><!-- .nav-menu -->
</div>
