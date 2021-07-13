<!DOCTYPE html>
<html lang="en">

<head>
    @yield('fb-plugin')
    <meta charset="utf-8">
    <title>Pecan Urbano</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Pagina dedicad al seguimiento del movimiento urbano, siempre con las ultimas actualidades">
    <meta name="keywords" content="">
    <meta name="author" content="Pecan Urbano">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-color.css" rel="stylesheet">

    {{-- Css para usar el select multiple NO BORRAR! --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/logo/logo.png">
</head>

<body>

    <div class="wrapper" id="home">
        <header>
            <!-- secondary menu -->
            <nav class="secondary-menu">
                <div class="container">
                    <!-- secondary menu left link area -->
                    <div class="sm-left">
                        <strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>E-mail</strong>:&nbsp; <a href="#">PecanUrbano@pecan.com</a>
                    </div>
                    <!-- secondary menu right link area -->
                    <div class="sm-right">
                        <!-- social link -->
                        <div class="sm-social-link">
                            <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </nav>
            <!-- primary menu -->
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- logo area -->
                        <a class="navbar-brand" href="/#home">
                            <!-- logo image -->
                            <img class="img-responsive" src="../img/logo/logo.png" alt="" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/#home">Inicio</a></li>
                            <li><a href="/#latestalbum">Ultima Cancion</a></li>
                            <li><a href="/#portfolio">Videos Calientes</a></li>
                            <li><a href="/#events">Noticias</a></li>
                            <li><a href="/#contact">Contacto</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--/ header end -->

        
        @yield('content')
        
        <!-- footer -->
        <footer>
            <div class="container">
                <!-- social media links -->
                <div class="social">
                    <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <!-- copy right -->
                <p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
        </footer>
        <!-- footer end -->

        <!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

    </div>

    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- WayPoints JS -->
    <script src="../js/waypoints.min.js"></script>
    <!-- Include js plugin -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- One Page Nav -->
    <script src="../js/jquery.nav.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="../js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="../js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="../js/custom.js"></script>

    {{-- Script para hacer uso del select multiple NO BORRAR! --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('').select2();
            });
        });
    </script>

</body>

</html>