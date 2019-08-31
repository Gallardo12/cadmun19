@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="container">
            <span class="card-title black-text">{{ __('Reset Password') }}</span>

            <form method="POST" action="{{ route('password.request') }}">
              @csrf

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate" name="password" required>
                  <label for="password">{{ __('Password') }}</label>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
                  @if ($errors->has('password_confirmation'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <button type="submit" class="btn blue darken-4">
                    {{ __('Reset Password') }}
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
@endsection
