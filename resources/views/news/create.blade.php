@extends('layouts.app')

@section('title', 'Create a New Post')

@section('content')
@include('partials.tinymce')

<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="container">
            <span class="card-title black-text">{{ __('New Post') }}</span>

            {!! Form::open(['method' => 'POST', 'action' => 'BlogController@store', 'files' => 'true', 'class' => 'alt']) !!}

            @include('partials.error-message')

            <div class="row">
              <div class="input-field col s12">
                <input id="title" type="text" name="title" value="{{ old('title') }}" required autofocus>
                <label for="title">{{ __('Title') }}</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="body" name="body" class="materialize-textarea my-editor">{!! old('body') !!}</textarea>
                <!--label for="body">{{ __('Body') }}</label-->
              </div>
            </div>

            <div class="row">
              @foreach($categories as $category)
              <div class="col s3">


                <input type="checkbox" class="filled-in" id="{{ $category->name }}" value="{{ $category->id }}" name="category_id[]" />
                <label for="{{ $category->name }}">{{ $category->name }}</label>
                <!--input type="checkbox" id="" value="{{ $category->id }}" name="category_id[]" class="form-check-input">
                  <label class="form-check-label btn-margin-right">{{ $category->name }}</label-->
              </div>
              @endforeach
            </div>

            <div class="file-field input-field">
              <div class="btn blue darken-4">
                <span>Featured Image</span>
                {!! Form::file('featuredImage', ['class' => '', 'type' => 'file']) !!}
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>

            <div class="row">
              <div class="col s12">
                <button type="submit" class="btn blue darken-4">
                  {{ __('Save') }}
                </button>
              </div>
            </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')

@endsection
