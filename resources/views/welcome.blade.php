@extends('layouts.master')

@section('content')

<style>
    .pdfobject-container {
        height: 500px;
    }

    .pdfobject {
        border: 1px solid #666;
    }
</style>

<div id="test1" class="col s12">
    <!--section id="photo-bg" class="red lighten-4">
          <div class="container">
            <div class="row">
              <div class="col s12" style="margin-bottom: 40px">
                <h1 class="header center-on-small-only white-text">CADMUN 2019</h1>
                <h4 class="light white-text text-lighten-4 center-on-small-only">Learning about the Materialize framework.</h4>
              </div>
            </div>
          </div>
        </section-->
    <div class="slider">
        <ul class="slides">
            <li>
                <img class="grayscale" src="{{ asset('assets/img/slider1.jpg') }}">
                <div class="caption right-align">
                    <h1>DELEGATES</h1>
                    <h3 class="light grey-text text-lighten-3">WELCOME</h3>
                </div>
            </li>
            <li>
                <img class="grayscale" src="{{ asset('assets/img/slider5.JPG') }}">
                <div class="caption center-align">
                    <h1>CADMUN</h1>
                    <h3 class="light grey-text text-lighten-3">2019</h3>
                </div>
            </li>
            <li>
                <img class="grayscale" src="{{ asset('assets/img/slider3.jpg') }}">
                <div class="caption right-align">
                    <h1>March 21st, 22nd and 23rd</h1>
                    <h3 class="light grey-text text-lighten-3">Save the date!!</h3>
                </div>
            </li>
            <!--li>
        <img src="{{ asset('assets/img/slider4.jpg') }}">
        <div class="caption center-align">
          <h3>Title 4</h3>
          <h3 class="light grey-text text-lighten-3">Text</h3>
        </div>
      </li-->
        </ul>
    </div>


    <!--div class="container"-->

    <!-- Breadcrumb -->
    <!--nav class="nav-breadcrumbs-dark nav-transparent">
            <div class="nav-wrapper">
              <div class="col s12 ">
                <a href="#!" class="breadcrumb">First</a>
                <a href="#!" class="breadcrumb">Second</a>
                <a href="#!" class="breadcrumb">Third</a>
              </div>
            </div>
          </nav-->

    <div class="container">

        <!--   Icon Section   -->
        <h2 class="center-align">Welcome to CADMUN</h5>
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">record_voice_over</i></h2>
                        <h5 class="center">Communication</h5>

                        <p class="light" align="justify">Effective communication is the foundation of all human progress. That is why throughout CADMUN we are concerned with engineering effective human communication. CADMUN gives you, the students,
                            an environment in which you can challenge and improve your communication skills.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">supervisor_account</i></h2>
                        <h5 class="center">Leadership</h5>

                        <p class="light" align="justify">As we grow, we look for role models to follow. CADMUN is an excellent moment to show your greatness, to raise your hand among the rest and show the coming generations why you&#39;re one of
                            those leaders society should follow.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">verified_user</i></h2>
                        <h5 class="center">Confidence Building</h5>

                        <p class="light" align="justify">It doesn’t matter if you’re a 6th grader or a 12th grade student participating; CADMUN creates the perfect environment for students to trust in themselves and to believe they can get things
                            done regardless of their age and background.</p>
                    </div>
                </div>
            </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <!--h2 class="header col s12">Welcome to CADMUN</h5-->
                    <p class="center-align">
                        <img src="{{ asset('assets/img/cadmunLogo.png') }}" class="responsive-img" width="300px" alt="">
                    </p>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('assets/img/background1.jpg') }}" alt="Unsplashed background img 1"></div>
    </div>


    <!--div class="container">

    <p class="flow-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam in quod, explicabo consectetur amet vitae esse. Nulla ratione sit architecto accusantium molestias, nobis iure perspiciatis fugiat. Fuga
      voluptates, qui ad.</p>
    <div class="row">
      <div class="col s12">
        <div class="card-panel blue darken-4">
          <p class="white-text">
            <i class="medium material-icons white-text left">warning</i>
            <strong>Note:</strong> I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </p>
        </div>
      </div>
    </div>

  </div-->
</div>


<!--div id="test2" class="col s12"-->
<!-- Experiences -->
<!--h2 class="center-align">Experiences</h2>
  <h4 class="center-align">Coming soon...</h4>
</div-->


<div id="test3" class="col s12">
    <!-- Schedule -->
    <h2 class="center-align">Schedule</h2>
    <div class="container" id="schedule"></div>
</div>


<div id="test4" class="col s12">
    <!-- Gallery -->
    <h2 class="center-align">Gallery</h2>
    <div class="row">
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery1.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery2.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery3.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery4.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery5.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery6.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery7.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
        <div class="col s6 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('assets/img/gallery/gallery8.JPG') }}" class="materialboxed">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.js"></script>
<script>
    PDFObject.embed("assets/downloads/cadmun_schedule.pdf", "#schedule");
</script>
@endsection
