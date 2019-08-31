@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="container">
            <span class="card-title black-text">{{ __('Send Password Reset Link') }}</span>
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <button type="submit" class="btn blue darken-4">
                    {{ __('Send Password Reset Link') }}
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
