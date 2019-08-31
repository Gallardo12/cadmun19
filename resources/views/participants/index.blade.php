@extends('layouts.app')

@section('title', 'Participant')

@section('content')
<div class="col s12">
  <section class="blue" style="padding:1px;">
    <div class="container">
      <div class="row row-noclear">
        <h1 class="header center-on-small-only white-text" style="padding-top: 30px;">News</h1>
        <h4 class="light white-text text-lighten-4 center-on-small-only">Get latest news from CADMUN 2019</h4>
        <article class="card col s12" style="animation-duration: 0.5s;" class="animated bounceInUp">
          <section class="card-content">
            <div class="card-content">
              <ul class="collection">
                @foreach ($participants as $participant)
                <li class="collection-item avatar">
                  <img src="{{ asset('assets/img/cadmunLogo.png') }}" alt="" class="circle">
                  <span class="title"{{ $participant->firstName }} {{ $participant->lastName }}></span>
                  <p>First Line <br>
                    Second Line
                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
                @endforeach
              </ul>
            </div>
          </section>
        </article>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
</div>
<div class="fixed-action-btn">
  <a href="{{ route('news.create') }}" class="btn-floating btn-large waves-effect waves-light blue darken-4 pulse"><i class="material-icons">add</i></a>
</div>
@endsection

@section('javascript')

@endsection
