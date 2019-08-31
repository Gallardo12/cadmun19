@extends('layouts.app')

@section('title', 'Secretariat')

@section('content')
<div class="col s12">
    <section class="blue" style="padding:1px;">
        <div class="container">
            <div class="row row-noclear">
                <h1 class="header center-on-small-only white-text" style="padding-top: 30px;">Secretariat</h1>
                <h4 class="light white-text text-lighten-4 center-on-small-only">CADMUN 2019</h4>
                <article class="card col s12" style="animation-duration: 0.5s;" class="animated bounceInUp">
                    <section class="card-content">
                        <div class="card-content">

                            <div class="row">

                                @foreach ($secretariats as $secretariat)
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3034.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Vanessa Bravo<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Secretary General</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Vanessa Bravo<i class="material-icons right">close</i></span>
                                            <p>Info</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <!-- Secretary General -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3034.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Vanessa Bravo<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Secretary General</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Vanessa Bravo<i class="material-icons right">close</i></span>
                                            <p>Info</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vice Secretary General -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3005.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Diego Martínez<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Vice Secretary General</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Diego Martínez<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director of Logistics -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3017.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Simón Guajardo<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Logistics</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Simón Guajardo<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Assistant Director of Logistics -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3014.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Luis Fernández<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Assistant Director of Logistics</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Luis Fernández<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director of Chairs -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3021.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Rodrigo Mijares<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Chairs</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Rodrigo Mijares<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assistant Director of Chairs -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3027.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Sara Peña<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Assistant Director of Chairs</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Sara Peña<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Director of Finance -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3012.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Natalia Rodarte<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Finance</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Natalia Rodarte<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assistant Director of Finance -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3018.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Grecia Gamero<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Assistant Director of Finance</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Grecia Gamero<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director of Fundraising -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3015.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">María Rincón<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Fundraising</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">María Rincón<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Director of Marketing -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3029.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Fernanda Cásares<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Marketing</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Fernanda Cásares<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assistant Director of Marketing -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3026.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">María Mancinas<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Marketing</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">María Mancinas<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chief of Staff -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3007.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Patricio Guerrero<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Chief of Staff</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Patricio Guerrero<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Director of Delegates -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3010.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Emilia Estrada<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Delegates</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Emilia Estrada<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assistant Director of Delegates -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3028.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Andrea Holguín<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Assistant Director of Delegates</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Andrea Holguín<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director of Technology -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3016.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Jorge Maa<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Technology</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Jorge Maa<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Assistant Director of Technology -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/Image-1.jpeg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Antonio Grimaldo<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Assistant Director of Technology</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Antonio Grimaldo<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director of Hospitality -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3040.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Norma Favela<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Director of Hospitality</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Norma Favela<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assistant Director of Hospitality -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3006.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Anelí Zepeda<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Assistant Director of Hospitality</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Anelí Zepeda<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Secretariat Advisors -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3024.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Andrea Campos<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Secretariat Advisors</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Andrea Campos<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Secretariat Advisors -->
                                <div class="col s12 m4">
                                    <div class="card hoverable">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{ asset('assets/img/secretariat/IMG_3025.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Emilia Pulido<i class="material-icons right">more_vert</i></span>
                                            <p><a href="#">Secretariat Advisors</a></p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Emilia Pulido<i class="material-icons right">close</i></span>
                                            <p>Info.</p>
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

@section('javascript')

@endsection
