<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CADMUN20</title>

    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="/">CADMUN<span>20</span></a></h1>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#speakers">Speaker</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#venue">Venue</a></li>
                    <li><a href="#hotels">Hotels</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#supporters">Sponsors</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="intro">
        <div class="intro-container wow fadeIn">
            <img class="img-fluid" width="20%" src="img/cadmunLogo.png" alt="CADMUN Logo" />
            <h1 class="mb-4 pb-0">Welcome to<br><span>CADMUN</span>20</h1>
            <p class="mb-4 pb-0">27-29 February, American School of Durango, Durango Mex</p>
            <a href="https://youtu.be/4yS4q57GOcs" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <a href="#about" class="about-btn scrollto">About The Event</a>
        </div>
    </section>

    <main id="main">

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>About The Event</h2>
                        <p>CADMUN is the most important event of the American School of Durango. CADMUN gives students the opportunity to develop skills such as debating, public speaking, team building and critical thinking. Its main goal is to create respectful awareness for different ways of thinking that can be found all over the world.
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Where</h3>
                        <p>American School of Durango, Durango, Mex</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p>Thursday to Saturday<br>27-29 February</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="buy-tickets" class="section-with-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h2>Committees</h2>
                    <p>Here are our committees for CADMUN20</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Mexican Cabinet</h5>
                                <img src="img/committees/MC.png" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Enfrentar la corrupción en farmacéuticas y hospitales</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Alcanzar el poder político sobre el crimen organizado en el gobierno</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#mexican-cabinet" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">General Assembly</h5>
                                <img src="img/committees/GA.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Reforming immigrant policy worldwide</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#general-assembly" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Security Council</h5>
                                <img src="img/committees/SC.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Measures to ensure responsible military intervention in transnational conflicts</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Moderating the proliferation of chemical and biological weapons to prevent bioterrorism</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#security-council" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">World Trade Organization</h5>
                                <img src="img/committees/WTO.png" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) The trade war between China and the USA and its future consequences</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) The breakdown of dollarization in the global economy</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#world-trade-organization" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Organisation of Outer Space Affairs</h5>
                                <img src="img/committees/UNOOSA.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) International policy on the future colonization of Mars & the Moon</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) The management and restriction of the use of outer space resources</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#outer-space" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">UN Women</h5>
                                <img src="img/committees/UNWOMEN.png" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Protecting women from human trafficking and sexual slavery</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) The role of women in post-conflict recovery</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#unwomen" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <br>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">United Nations Office on Drugs and Crime</h5>
                                <img src="img/committees/UNODC.png" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Eliminating opium exportation from the Golden Crescent</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Money laundering and its role in financing terrorism</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#unodc" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">United Nations Economic and Social Council</h5>
                                <img src="img/committees/ECOSOC.png" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Proposals to change the economic global system in order to prevent mass pollution and contamination</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) The prevention of a future global economic recession</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#ecosoc" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Human Rights</h5>
                                <img src="img/committees/HR.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Addressing the separation of families at borders and unaccompanied children</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Improving labor conditions to avoid modern slavery</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#hr" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <br>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">World Health Organization</h5>
                                <img src="img/committees/WHO.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Ensuring the adherence to vaccine policies and combating vaccine hesitancy</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Solving the extensive emergency health situation in Yemen</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#who" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">United Nations Children's Fund</h5>
                                <img src="img/committees/UNICEF.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Eliminar la extorsión y la trata de menores en el mercado negro</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Providing mental health resources and reducing trauma aggravation for children in humanitarian crises</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#unicef" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">United Nations Environment Programme</h5>
                                <img src="img/committees/UNEP.jpg" class="img-fluid" alt="">
                                <hr>
                                <h6 class="text-uppercase text-center">Topics</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>A) Promoting the Responsible Disposal of Electronic and Hazardous Waste</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>B) Ensuring Global Participation in Climate Change Mitigation</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#unep" data-ticket-type="standard-access">More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div id="mexican-cabinet" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Mexican Cabinet</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/MC.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: José Pablo Castro</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Kamila Medina</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/MC_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/MC_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="general-assembly" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">General Assembly</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/GA.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Aisha Majul</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Gabino Martínez</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/GA_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <!--li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/MC_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="security-council" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Security Council</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/SC.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Cynthia Baltiérrez</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Emilio Rios</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/SC_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/SC_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="world-trade-organization" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">World Trade Organization</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/WTO.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Lia Martínez</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Aldo Peña</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/WTO_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/WTO_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="outer-space" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Organisation of Outer Space Affairs</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/UNOOSA.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Regina Cardosa</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Zack Redak</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNOOSA_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNOOSA_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="unwomen" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">UN Women</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/UNWOMEN.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Yarleth García</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Fernanda Garza</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNWOMEN_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNWOMEN_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="unodc" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">United Nations Office on Drugs and Crime</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/UNODC.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Jacqueline Gonzalez</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Jesus Fuentes</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNODC_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNODC_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ecosoc" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">United Nations Economic and Social Council</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/ECOSOC.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Ximena Silerio</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Alejandra Borda</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/ECOSOC_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/ECOSOC_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hr" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Human Rights</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/HR.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Aneli Zepeda</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Grecia Gallegos</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/HR_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/HR_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="who" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">World Health Organization</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/WHO.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Pamela Lopez Yañez</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Alexandra Vazquez</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/WHO_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/WHO_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="unicef" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">United Nations Children's Fund</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/UNICEF.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Ana Hinojosa</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Fryda Olvera</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNICEF_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNICEF_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="unep" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">United Nations Environment Programme</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="img/chairs/UNEP.jpeg" class="img-fluid" alt="">
                            <br><br>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Director: Liliana Borda</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Moderator: Valeria Espinosa</li>
                                <br><br>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNEP_TopicA.pdf" target="_blank">Background Paper - Topic A</a></li>
                                <li><span class="fa-li"><i class="fa fa-file"></i></span><a href="pdf/UNEP_TopicB.pdf" target="_blank">Background Paper - Topic B</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="speakers" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Event Speaker</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="speaker">
                            <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3><a href="#!">JONATHAN SÁNCHEZ PÉREZ</a></h3>
                                <p>Featured Mexican talent in the space industry</p>
                                <div class="social">
                                    <a href="https://twitter.com/Mexican_Space" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/MXespacial/" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Event Schedule</h2>
                    <p>Here is our event schedule</p>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
                    </li>
                </ul>

                <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius necessitatibus voluptatem quis labore perspiciatis quia.</h3>

                <div class="tab-content row justify-content-center">

                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>09:30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Registration</h4>
                                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Keynote <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 1 -->

                    <!-- Schdule Day 2 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 2 -->

                    <!-- Schdule Day 3 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 2 -->

                </div>

            </div>

        </section>


        <section id="venue" class="wow fadeInUp">

            <div class="container-fluid">

                <div class="section-header">
                    <h2>Event Venue</h2>
                    <p>Event venue location info and gallery</p>
                </div>

                <div class="row no-gutters">
                    <div class="col-lg-6 venue-map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3065.48495735946!2d-104.67013688679863!3d23.978237638924302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc7f2b7b5262f%3A0xe7791c397c1df7b5!2sColegio%20Americano%20de%20Durango!5e0!3m2!1sen!2smx!4v1575301744002!5m2!1sen!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    </div>

                    <div class="col-lg-6 venue-info">
                        <div class="row justify-content-center">
                            <div class="col-11 col-lg-8">
                                <h3>American School of Durango</h3>
                                <p>The American School of Durango (ASD) is a private, non-profit, K-12 college preparatory school located in Durango, Mexico, and established in 1954 with the cooperation of the American Schools Offices of the Department of Education.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid venue-gallery-container">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <section id="hotels" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Hotels</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="hotel">
                            <div class="hotel-img">
                                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
                            </div>
                            <h3><a href="https://hotelplazavizcaya.com/" target="_blank">Hotel Best Western Plus Plaza Vizcaya</a></h3>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>4.84 Mile from the Venue</p>
                            <p><a href="pdf/cadmun20hotel.pdf" target="_blank">Click here to read important info</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="gallery" class="wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our gallery from the recent events</p>
                </div>
            </div>

            <div class="owl-carousel gallery-carousel">
                <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
                <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
                <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
                <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
                <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
                <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
                <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
                <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
            </div>

        </section>


        <section id="supporters" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Sponsors</h2>
                </div>

                <div class="row no-gutters supporters-wrap clearfix">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/5.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/6.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <section id="faq" class="wow fadeInUp">

            <div class="container">

                <div class="section-header">
                    <h2>F.A.Q </h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <ul id="faq-list">

                            <li>
                                <a data-toggle="collapse" class="collapsed" href="#faq1">What is CADMUN?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq1" class="collapse" data-parent="#faq-list">
                                    <p>
                                        CADMUN is the most important event of the American School of Durango. CADMUN gives students the opportunity to develop skills such as debating, public speaking, team building and critical thinking. Its main goal is to create respectful awareness for different ways of thinking that can be found all over the world.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq2" class="collapsed">What are the benefits of CADMUN?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq2" class="collapse" data-parent="#faq-list">
                                    <p>
                                        CADMUN gives students an environment in which they can challenge and improve their communication skills. <br>
                                        It is the appropriate moment to demonstrate your greatness and leadership. <br>
                                        CADMUN creates the perfect environment for students to trust in themselves and to believe they can get things done regardless of their age and background.

                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq4" class="collapsed">What skills does the delegate develop through CADMUN?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq4" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Leadership, public speaking, research, team building, writing, debating, confidence and communication.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq5" class="collapsed">What is a position paper?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq5" class="collapse" data-parent="#faq-list">
                                    <p>
                                        A position paper is a three paragraph essay in which the delegate explains the history or basic facts about the topic, states their country’s position on the matter, and explains their country’s proposed solutions. The purpose of the position paper is to effectively present a country’s stance on an issue and allow the delegation to propose its solutions to the committee.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq6" class="collapsed">What do you have to do to enter CADMUN?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq6" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Select a country and committee, practice in mock debates, do your research to make the 1st and 2nd draft of your position paper, make corrections and start 3rd (final) draft, and you are ready to debate!
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq7" class="collapsed">How will you practice?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq7" class="collapse" data-parent="#faq-list">
                                    <p>
                                        One month before CADMUN, each grade will have mock debates directed by the chairs, so both the delegates and chairs can practice. This will provide students confidence, curiosity, critical thinking, communication, control, creativity ,leadership and self- motivation.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>


        <section id="contact" class="section-bg wow fadeInUp">

            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>Keep in touch...</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>Av. Tec. Milenio #201 El Nayar, Durango, Dgo.</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+526188133636">+52 (618) 8133636</a></p>
                            <p><a href="tel:+526181767196">+52 (618) 1767196</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:cadmun@cadurango.mx">cadmun@cadurango.mx</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section>

    </main>


    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>CADMUN20</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="contactform/contactform.js"></script>

    <script src="js/main.js"></script>
</body>

</html>