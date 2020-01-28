<!doctype html>
<html lang="en">

<head>
    <title>Careery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/custom-bs.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/fonts/line-icons/style.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <header class="site-navbar mt-3" id="top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="index.html">Careery</a></div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            @guest
                            <li><a class="login" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li><a class="register" href="{{ route('register') }}">Register</a></li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </nav>

                    <div class="col-6 site-burger-menu d-block d-lg-none text-right">
                        <a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>
        </header>

        <!-- HOME -->
        <section class="home-section section-hero overlay slanted" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>We Are Careery</h1>
                        <div class="mx-auto w-75">
                            <p>Careery is your gate to see the world and discover yourself to won your life.</p>
                        </div>
                        <p class="mt-5"><a href="/about" class="btn btn-outline-white btn-md ">Get in touch</a></p>
                    </div>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="video-container">
                <video autoplay loop="true">
                    <source type="video/mp4" src="/videos/video.mp4">
                </video>
            </div>
        </section>
    </div>

    <!-- SCRIPTS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/stickyfill.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>