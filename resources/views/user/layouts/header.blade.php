<div class="container d-flex">
  <div class="mr-auto">
    <img src="{{ asset('user/img/51careerheaderlogo.png') }}" alt="" style="max-height: 50px; transform: translateY(-5px);"/>
  </div>
  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="active"><a href="/home1">Home</a></li>
      <li><a href="ourservice">Service</a></li>
      <li><a href="ourstory">Success Stories</a></li>
      <li><a href="/job">Job Board</a></li>
      <li><a href="/post">Blog</a></li>
      <li class="drop-down">
        <a href="">Our Company</a>
        <ul>
          <li><a href="aboutus">About Us</a></li>
          <li><a href="joinus">Join Us</a></li>
          <li><a href="contactus">Contact Us</a></li>
        </ul>
      </li>
      @if (Auth::guard('web')->check())
      <li style="margin-left: 10px; padding-left: 10px;">
        <a href="{{ route('profile', ['tab' => 'notification']) }}">
          @if (count(auth()->user()->unreadNotifications) > 0)
          <i class="fa fa-bell" style="transform: translateY(1px);"></i>
          <span class="badge badge-pill badge-info">
            {{ count(auth()->user()->unreadNotifications) }}
          </span>
          @else
          <i class="far fa-bell" style="padding: 5px;"></i>
          @endif
        </a>
      </li>
      @endif
      <li class="drop-down drop-down-with-arrow">
        <a href="#" class="logo">
          <img src="{{ asset('user/img/51careerlogo1.png') }}"/>
        </a>
        <ul>
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Sign up</a></li>
            @elseif (Auth::guard('web')->check())
            <li><a href="">My Reviews</a></li>
            <li><a href="">My Subscription</a></li>
           {{--  <li><a href="{{ route('/profile/notification', ['tab' => 'profile']) }}">My Profile</a></li>--}}
               <li><a href="/profile/profile">My Profile</a ></li>

            <li>
              <a href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
              <form id="logout-form" action="{{ route('user.logout') }}" method="POST">
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
<script>
  function markNotificationsAsRead() {
    $.get('/unreadNotificationsMarkAsRead');
  };
</script>
