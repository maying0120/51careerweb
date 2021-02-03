<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
<style>
#reset-box {
  width: 420px;
  padding-bottom: 5px;
}
</style>
<body data-spy="scroll" data-target="#navbar-example">
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>

  <div class="container entrance" style="background-image: url({{ asset('user/img/51loginsignup.jpg') }})">
    <div class="row">
      <div class="col-7">
        <div class="entrance-right-panel">
          <img id="entrance-pic" src="{{ asset('user/img/51loginsignup.jpg') }}"/>
        </div>
      </div>
      <div class="col-5" style="display: flex;">
        <div id="reset-box" class="card centered">
          <h4 class="card-header">Reset Password</h4>
          <div class="card-body">


            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
              {{ csrf_field() }}

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-Mail Address</label>

                <div >
                  <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password</label>

                <div >
                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm">Confirm Password</label>
                <div >
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                  @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div >
                  <button type="submit" class="btn btn-primary">
                    Reset Password
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<footer>
  @include('user/layouts/footer')
</footer>
</body>
</html>
