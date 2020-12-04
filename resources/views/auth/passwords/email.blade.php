<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
<style>
#email-box {
  width: 30%;
  max-width: 50%;
  margin-top: 5em 15em;
}
</style>
<body data-spy="scroll" data-target="#navbar-example">
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>

  <div id="email-box" class="card centered">
    <h4 class="card-header">Reset Password</h4>
    <div class="card-body">
      <p class="card-title">Enter E-Mail Address:</p>
      <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="form-group">
          <button type="submit" class="btn btn-primary">
            Send Password Reset Link
          </button>
        </div>
      </form>
    </div>
  </div>

  <footer>
    @include('user/layouts/footer')
  </footer>
</body>
</html>
