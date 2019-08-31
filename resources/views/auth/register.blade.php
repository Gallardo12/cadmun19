@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="container">
            <span class="card-title black-text">{{ __('Register') }}</span>

            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="row">
                <div class="input-field col s12">
                  <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                  <label for="name">{{ __('Name') }}</label>
                  @if ($errors->has('name'))
                  <span class="invalid-feedback red-text">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
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
                <div class="input-field col s12">
                  <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <button type="submit" class="btn blue darken-4">
                    {{ __('Register') }}
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
