@extends('layouts.app')

@section('title', 'News')
@include('partials.meta_dynamic')

@section('content')
<div class="parallax-container center valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 white-text">
        <h2 class="blue-text uppercase">{{ $blog->title }}</h2>
        <p>by <a class="blue-text" href="{{ route('users.show', $blog->user->name) }}">{{ $blog->user->name }}</a> | {{ $blog->created_at->diffForHumans() }}</p>
        @foreach($blog->category as $category)
          <a class="btn blue darken-4" href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
          @endforeach
      </div>
    </div>
  </div>

  <div class="parallax">
    @if($blog->featuredImage)
      <img src="/img/featuredImage/{{ $blog->featuredImage ? $blog->featuredImage : '' }}" alt="{{ str_limit($blog->title, 50) }}" class="responsive-img blur-image"><br />
      @endif
  </div>

</div>

<div class="container">

  <div class="row">

    <article>

      <header>
        <h1 class="center-align">{{ $blog->title }}</h1>
      </header>

      <section>
        <p>{!! $blog->body !!}</p>
      </section>

      <div class="divider"></div>

      @if(Auth::user())
      @if(Auth::user()->role_id === 1 || Auth::user()->role_id === 2 && Auth::user()->id === $blog->user_id)
        <footer style="margin-top: 1em;">
          <h4 class="center-align uppercase">Actions</h4>
          <div class="row">
            <div class="col s12 m6">
              <a href="{{ route('news.edit', $blog->id) }}" class="btn blue darken-4 right">Edit </a>
            </div>
            <div class="col s12 m6">
              <form method="post" action="{{ route('news.delete', $blog->id) }}">
                {{ method_field('delete') }}
                <button type="submit" class="btn blue darken-4">Delete</button>
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </footer>
        @endif
        @endif

        <div class="divider"></div>

        <aside>
          <div id="disqus_thread"></div>
        </aside>
        
    </article>
  </div>
</div>

@endsection

@section('javascript')
<script>
  (function() {
    var d = document,
      s = d.createElement('script');
    s.src = 'https://larablog.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
  })();
</script>
@endsection
