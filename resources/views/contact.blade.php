@extends('layouts.pages')

@section('title', 'Contact Us')

@section('content')
<div class="col s12">
  <section class="blue" style="padding:1px;">
    <div class="container">
      <div class="row row-noclear">
        <h1 class="header center-on-small-only white-text" style="padding-top: 30px;">Contact us</h1>
        <h4 class="light white-text text-lighten-4 center-on-small-only">Keep in touch...</h4>
        <article class="card col s12" style="animation-duration: 0.5s;" class="animated bounceInUp">
          <section class="card-content">
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <!--form class="col m8 offset-m2 s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="name" type="text">
                          <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="email" type="email" class="form-input">
                          <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea"></textarea>
                          <label for="message">Message</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col m12">
                          <p class="right-align"><button class="btn btn-large cyan" type="button" name="action">Send Message</button></p>
                        </div>
                      </div>
                    </form-->
                    {!! Form::open(['route'=>'contactus.store']) !!}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('Names:') !!}
                        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('Email:') !!}
                        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::label('Message:') !!}
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>

                        <div class="form-group">
                        <button class="btn btn-success">Contact US!</button>
                        </div>

                    {!! Form::close() !!}
                  </div>
                  <div class="row">
                    <div class="video-container">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2537.1466066471407!2d-104.66938142713174!3d23.97867168205643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc7f2b7b5262f%3A0xe7791c397c1df7b5!2sColegio+Americano+de+Durango!5e0!3m2!1sen!2smx!4v1539829169284"
                        width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </article>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
</div>
@endsection
