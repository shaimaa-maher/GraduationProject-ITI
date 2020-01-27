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
    
    <script src="https://kit.fontawesome.com/118c5002ee.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
 
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- 
  <div id="overlayer"></div> -->
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
        <header class="site-navbar top" id="top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="index.html">Careery</a></div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a href="/home" class="nav-link active">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/portfolio">Portfolio</a></li>
                            <li class="has-children">
                                <a href="services.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="service-single.html">Service Single</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="faq.html">Frequently Ask Questions</a></li>
                                    <li><a href="/mindMaps">Mind Maps</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                top  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        @yield('content')
        <footer class="site-footer slanted-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Scenic Products</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Web Developers</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Company</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Contact Us</h3>
                        <div class="footer-social">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <p class="copyright"><small class="block">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved <i class="icon-heart text-danger" aria-hidden="true">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <!-- SCRIPTS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/stickyfill.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>

    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/custom.js"></script>

    <script src="/js/typed.js"></script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["Career", "Job", "Future"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
        });
    </script>
    <script src="/js/mainscript.js"></script>



</body>

</html>