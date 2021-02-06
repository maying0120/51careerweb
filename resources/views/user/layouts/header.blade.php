<header id="header" class="fixed-top">
  <div class="container d-flex">
    <div class="mr-auto">
      <img src="{{ asset('user/img/51careerheaderlogo.png') }}" alt="" style="max-height: 50px; transform: translateY(-5px);"/>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <?php $url = URL::current(); ?>
        <?php $urls = explode('/', $url); ?>
        <?php $current = end($urls); ?>
        <li class="{{ $current == 'home' ? 'active' : ''}}"><a href="/home">Home</a></li>
        <li class="{{ $current == 'ourservice' ? 'active' : ''}}"><a href="/ourservice">Service</a></li>
        <li class="{{ $current == 'ouroffer' ? 'active' : ''}}"><a href="/ouroffer">Success Stories</a></li>
        <li class="{{ $current == 'job' ? 'active' : ''}}"><a href="/job">Job Board</a></li>
        <li class="{{ $current == 'post' ? 'active' : ''}}"><a href="/post">Resources</a></li>
        <li class="drop-down {{ (in_array($current, array('aboutus', 'joinus', 'contactus'))) ? 'active' : ''}}">
          <a href="">Our Company</a>
          <ul>
            <li class="{{ $current == 'aboutus' ? 'active' : ''}}"><a href="/aboutus">About Us</a></li>
            <li class="{{ $current == 'joinus' ? 'active' : ''}}"><a href="/joinus">Join Us</a></li>
            <li class="{{ $current == 'contactus' ? 'active' : ''}}"><a href="/contactus">Contact Us</a></li>
          </ul>
        </li>
        @if (Auth::guard('web')->check())
        <li style="margin-left: 10px; padding-left: 10px;">
          <a href="{{ route('profile', ['tab' => 'notification']) }}">
            @if (count(auth()->user()->unreadNotifications) > 0)
            <i class="fa fa-bell" style="transform: translateY(1px);"></i>
            <span class="badge badge-pill badge-secondary">
              {{ count(auth()->user()->unreadNotifications) }}
            </span>
            @else
            <i class="far fa-bell" style="padding: 4px; transform: translateY(-2px);"></i>
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
            <li><a href="{{ route('profile', ['tab' => 'profile']) }}">My Profile</a ></li>
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
</header>
