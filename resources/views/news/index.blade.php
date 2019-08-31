@extends('layouts.app')

@section('title', 'News')

@section('content')
<div class="col s12">
  <section class="blue" style="padding:1px;">
    <div class="container">

      @if(Session::has('blog_created_message'))
      <div class="alert alert-success">
        {{ Session::get('blog_created_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </div>
      @endif

      @if(Session::has('contact_form_send'))
      <div class="alert alert-success">
        {{ Session::get('contact_form_send') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </div>
      @endif

      <div class="row row-noclear">
        <h1 class="header center-on-small-only white-text" style="padding-top: 30px;">News</h1>
        <h4 class="light white-text text-lighten-4 center-on-small-only">Get latest news from CADMUN 2019</h4>
        <article class="card col s12" style="animation-duration: 0.5s;" class="animated bounceInUp">
          <section class="card-content">
            <div class="card-content">
              @foreach ($blogs as $blog)
              <div class="col s12 m4">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    @if($blog->featuredImage)
                      <img class="activator" src="/img/featuredImage/{{ $blog->featuredImage ? $blog->featuredImage : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                      @else
                      <img class="activator" src="{{ asset('assets/img/featuredImgNew.jpg') }}">
                      @endif
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $blog->title }}<i class="material-icons right">more_vert</i></span>
                    <p><a href="{{ route('news.show', [$blog->slug]) }}" class="blue-text">Read more</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>{{ $blog->title }}</span>
                    <p>
                      <a href="{{ route('users.show', $blog->user->name) }}"><i class="material-icons left">people</i>{{ $blog->user->name }}</a><br><br>
                      <a href="#"><i class="material-icons left">timelapse</i>{{ $blog->created_at->diffForHumans() }}</a>
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </section>
        </article>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
</div>
@if(Auth::user())
@if(Auth::user()->role_id === 1 || Auth::user()->role_id === 2)

  <div class="fixed-action-btn">
    <a href="{{ route('news.create') }}" class="btn-floating btn-large waves-effect waves-light blue darken-4 pulse"><i class="material-icons">add</i></a>
  </div>

  @endif
  @endif

  @endsection

  @section('javascript')

  @endsection
