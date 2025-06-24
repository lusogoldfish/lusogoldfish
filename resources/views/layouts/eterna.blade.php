<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>LusoGoldFish | Dá vida ao teu Aquário!</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('eterna/img/favicon.png') }}" rel="icon">
    <link href="{{ asset(path: 'eterna/img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <!-- Vendor CSS Files -->
    <link href="{{ asset('eterna/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eterna/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('eterna/css/main.css') }}" rel="stylesheet">




    <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contacto@lusogoldfish.pt</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+351 263 500 310</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('eterna/img/logo.png') }}" alt="" style="width = 100px">
                    <!-- <h1 class="sitename">LusoGoldFish<br></h1> -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/">Serviços</a></li>
                        <li><a href="/">Portfolio</a></li>
                        <li><a href="/">Equipa</a></li>
                        <a href="{{ route('produtos.criar') }}" class="btn btn-primary">Adicionar Novo Produto</a>
                        <li><a href="/suporte">Suporte</a></li>

                        <li>
                            @auth
                            @if(Auth::user()->role === 'admin') <!-- Verifica se o usuário tem role de admin -->
                                <a href="/dashboard">Dashboard</a>
                            @endif
                        @endauth

                        </li>
                        <li>
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                                </form>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                            @endauth
                        </li>
                        @guest

                        @endguest
                        </ul>
                        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    </nav>

                </div>

            </div>

        </header>

        <main class="main">

            {{ $slot }}

        </main>

        <footer id="footer" class="footer position-relative dark-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="/" class="d-flex align-items-center">
                            <span class="sitename" style="color:rgb(238, 106, 83)">LusoGoldFish</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Rua do Parque, 2120-092</p>
                            <p> Salvaterra de Magos</p>
                            <p class="mt-3"><strong>Tel:</strong> <span>+351 263 500 310</span></p>
                            <p><strong>Email:</strong> <span>contacto@lusogoldfish.pt</span></p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <h4 style="color: #e96b56">Segue-nos!</h4>
                        <p>Acompanha as nossas novidades, dicas e promoções. Junta-te à comunidade LusoGolFish e traz mais
                            cor ao teu aquário!</p>
                        <div class="social-links d-flex">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/lusogoldfishpt/"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Eterna</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('eterna/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('eterna/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('eterna/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('eterna/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('eterna/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('eterna/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('eterna/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('eterna/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('eterna/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('eterna/js/main.js') }}"></script>

    </body>

    </html>
