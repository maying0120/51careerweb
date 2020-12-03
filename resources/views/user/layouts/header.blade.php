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
      @if (Auth::guard('web')->check())
      <li class="drop-down">
        <a onclick="markNotificationsAsRead()">Notifications
          @if (count(auth()->user()->unreadNotifications) > 0)
          <span class="badge badge-info">{{ count(auth()->user()->unreadNotifications) }}</span>
          @endif
        </a>
        <ul>
          @forelse (auth()->user()->unreadNotifications as $note)
            @if ($note->type == 'App\Notifications\ApplicationStatus')
              <li>
                <a>Your application to {{ $note->data['company'] }} is {{ $note->data['review'] }}</a>
              </li>
            @elseif ($note->type == 'App\Notifications\JobsRecommend')
              <li onclick="markNotificationsAsRead()" >
                <a href='{{ $note->data['link'] }}'>Some jobs were recommended for you to check out!</a>
              </li>
            @endif
            @if ($loop->last) <a>View all notifications</a> @endif
            @empty
            <a>No unread notifications</a>
          @endforelse
        </ul>
      </li>
      @endif
      <li class="drop-down">
        <a href="#">User</a>
        <ul>
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Sign up</a></li>
            @elseif (Auth::guard('web')->check())
            <li><a href="profile">Profile</a></li>
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
