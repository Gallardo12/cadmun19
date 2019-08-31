<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="full-height">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!--  Essential META Tags -->

    <meta property="og:title" content="CADMUN 2019">
    <meta property="og:description" content="Effective communication is the foundation of all human progress. That is why throughout CADMUN we are concern with how human communication should be carried out. CADMUN gives students an environment in which they can challenge and improve their communication skills.">
    <meta property="og:image" content="{{ asset('assets/img/cadmunLogo.png') }}">
    <meta property="og:url" content="https://cadmun.net/">
    <meta name="twitter:card" content="summary_large_image">


    <!--  Non-Essential, But Recommended -->

    <meta property="og:site_name" content="CADMUN 2019">
    <meta name="twitter:image:alt" content="CADMUN 2019 Logo">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
</head>

<body>

    <header>

        <div class="navbar-fixed">
            <nav class="nav-extended">
                <div class="nav-wrapper white">
                    <a href="{{ url('/') }}" class="brand-logo logo">
                        <img style="width: 64px;" src="{{ asset('assets/img/cadmunLogo.png') }}" alt="">
                        <span class="hide-on-med-and-down black-text">{{ config('app.name', 'Laravel') }}</span>
                    </a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse black-text"><i class="material-icons">menu</i></a>


                    <ul class="right hide-on-med-and-down">
                        <li><a class="black-text modal-trigger" href="#delegate">Delegate</a></li>
                        <li><a class="black-text" href="{{ route('committees') }}">Committees</a></li>
                        <li><a class="black-text" href="{{ route('secretariat') }}">Secretariat</a></li>
                        <li><a class="black-text" href="{{ route('news') }}">News</a></li>
                        <li><a class="black-text" href="{{ route('contact-us') }}">Contact</a></li>

                    </ul>


                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="{{ asset('assets/img/background1.jpg') }}">
                                </div>
                                <a href="{{ url('/') }}"><img class="circle" src="{{ asset('assets/img/cadmunLogo.png') }}"></a>
                                <a href="{{ url('/') }}"><span class="white-text name">CADMUN 2019</span></a>
                                <a href="mailto:cadmun@cadurango.mx"><span class="white-text email">cadmun@cadurango.mx</span> </a>
                            </div>
                        </li>
                        <li><a class="waves-effect" href="{{ route('committees') }}"><i class="material-icons">view_list</i>Committees</a></li>
                        <li><a class="waves-effect" href="{{ route('secretariat') }}"><i class="material-icons">group_work</i>Secretariat</a></li>
                        <li><a class="waves-effect" href="{{ route('news') }}"><i class="material-icons">new_releases</i>News</a></li>
                        <li><a class="waves-effect" href="{{ route('contact-us') }}"><i class="material-icons">contact_mail</i>Contact</a></li>
                        <li>
                            <div class="divider"></div>
                        </li>

                    </ul>


                </div>

                <!--div class="nav-content blue darken-4">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Test 1</a></li>
            <li class="tab"><a href="#test2">Test 2</a></li>
            <li class="tab"><a href="#test3">Disabled Tab</a></li>
            <li class="tab"><a href="#test4">Test 4</a></li>
          </ul>
        </div-->
            </nav>
        </div>

        <!-- Delegate Modal Structure -->
        <div id="delegate" class="modal">
            <div class="modal-content">
                <h4 class="center-align">Delegate Info</h4>
                <p align="center">
                    <img src="https://img.nordangliaeducation.com/resources/us/_filecache/357/60a/28787-padded-w680-h435-of-1-f8f4f3-untitled-design.png" class="center-align responsive-img" alt="">
                </p>
                <div class="collection">
                    <a href="assets/downloads/delegate/how-to-write-a-PP.pdf" target="_blank" class="collection-item blue-text text-darken-4">How to write a Position Paper</a>
                    <a href="assets/downloads/cadmun_schedule.pdf" target="_blank" class="collection-item blue-text text-darken-4">Schedule</a>
                    <a href="assets/downloads/delegate/parliamentary-procedure.pdf" target="_blank" class="collection-item blue-text text-darken-4">Parliamentary Procedure</a>
                    <a href="assets/downloads/delegate/Simulation-Rules-CADMUN.pdf" target="_blank" class="collection-item blue-text text-darken-4">Simulation Rules</a>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Close</a>
            </div>
        </div>

    </header>


    <main>
        @yield('content')
    </main>


    <footer class="page-footer white z-depth-5">
        <!--div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">CADMUN 2019</h5>
          <p class="grey-text text-darken-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="black-text">Links</h5>
          <ul>
            <li><a class="grey-text text-darken-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div-->
        <div class="footer-copyright">
            <div class="container">
                <span class="grey-text text-darken-4">© CADMUN
                    @php echo date("Y");
                    @endphp </span>
                <a class="grey-text text-darken-4 right" href="{{ route('privacy') }}" target="_blank">Privacy Policy</a>
                <p class="right">&emsp;</p>
                <a class="grey-text text-darken-4 right" href="{{ route('tos') }}" target="_blank">ToS</a>
            </div>
        </div>
    </footer>

    <!-- MOBILE ONLY FLOATING ACTION BUTTON -->
    <div class="fixed-action-btn hide-on-large-only">
        <!--a class="btn-floating btn-large cyan">
        <i class="large material-icons">share</i>
      </a>
      <ul>
        <li><a href="https://www.facebook.com/cadmun.asd/" target="_blank" class="btn-floating cyan lighten-3"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/cadmun/" target="_blank" class="btn-floating cyan lighten-3"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://youtu.be/4yS4q57GOcs" target="_blank" class="btn-floating cyan lighten-3"><i class="fab fa-youtube"></i></a></li>
      </ul-->
        <a class="btn-floating btn-large cyan pulse modal-trigger" href="#delegate">
            <i class="material-icons">supervised_user_circle</i>
        </a>
    </div>


    <!-- Preloader and it's background. -->
    <!--div class="preloader-background">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    <p class="blinking">Loading</p>
  </div-->


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="assets/js/master.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider').slider();
            $('.scrollspy').scrollSpy();
            $('.parallax').parallax();
            $('.slider1').slider();
            $('.materialboxed').materialbox();
            $('#body').trigger('autoresize');
            $('.parallax').parallax();
        });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128216995-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-128216995-1');
    </script>


</body>

</html>
