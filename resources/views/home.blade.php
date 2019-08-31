@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">

  <div class="row" id="session">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title black-text">{{ __('Dashboard') }}</span>

          @if (session('status'))
          <div class="alert alert-success" id="session">
            {{ session('status') }}
          </div>
          @endif

          You are logged in!
        </div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('javascript')

<script type="text/javascript">
  $(window).on("load", function() {
    Materialize.toast('Benvenid@ {{ Auth::user()->name }}', 4000, 'rounded green');
  });
</script>

@endsection
