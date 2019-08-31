@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="container">
            <span class="card-title black-text">{{ __('Login') }}</span>

            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback red-text">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="password" type="password" class="validate" name="password" required>
                  <label for="password">{{ __('Password') }}</label>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback red-text">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">{{ __('Remember Me') }}</label>
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <button type="submit" class="btn blue darken-4">
                    {{ __('Login') }}
                  </button>

                  <a class="btn btn-flat" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
