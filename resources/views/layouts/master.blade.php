<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>RT - Organized By Rex Squad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- All stylesheet and icons css  -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css?v=2.0.0') }}">

    </head>

    <body>
        <!-- preloader start here -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader ending here -->

        <!-- scrollToTop start here -->
        <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
        <!-- scrollToTop ending here -->

        <!-- ==========shape image Starts Here========== -->
        <div class="body-shape">
            <img src="{{ asset('assets/images/shape/body-shape.png') }}" alt="shape">
        </div>
        <!-- ==========shape image end Here========== -->

        <!-- ==========Header Section Starts Here========== -->
        <header class="header-section">
            <div class="container">
                <div class="header-holder d-flex flex-wrap justify-content-between align-items-center">
                    <div class="brand-logo d-none d-lg-inline-block">
                        <div class="logo">
                            <a href="index">
                                <img src="{{ asset('assets/images/logo/logo_5.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu-part">
                        <div class="header-top">
                            <div class="header-top-area">
                                <ul class="left">
                                    <li>
                                        <i class="icofont-location-pin"></i> 7238752, REX SQUAD, PK
                                    </li>
                                </ul>
                                <ul class="social-icons d-flex align-items-center">
                                    <li>
                                        <a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="skype"><i class="icofont-skype"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-bottom">
                            <div class="header-wrapper justify-content-lg-end">
                                <div class="mobile-logo d-lg-none">
                                    <a href="index"><img src="{{ asset('assets/images/logo/logo_5.png') }}" alt="logo"></a>
                                </div>
                                <div class="menu-area">
                                    <ul class="menu">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="schedule">schedule</a></li>
                                        <li><a href="teams">Teams</a></li>
                                        <li><a href="rules">RULES</a></li>
                                    </ul>
                                    <a href="register" class="login"><i class="icofont-user"></i> <span>Register Team</span> </a>

                                    <!-- toggle icons -->
                                    <div class="header-bar d-lg-none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="ellepsis-bar d-lg-none">
                                        <i class="icofont-info-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- ==========Header Section Ends Here========== -->

        @yield('content')


        <!-- ================ footer Section start Here =============== -->
        <footer class="footer-section">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-3 justify-content-center g-lg-0">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="footer-top-item lab-item">
                                <div class="lab-inner" style="justify-content: center !important;">
                                    <div class="lab-content">
                                        <span>Club Code: 7238752</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="footer-top-item lab-item">
                                <div class="lab-inner" style="justify-content: center !important;">
                                    <div class="lab-content">
                                        <span>Members : 267/800</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="footer-top-item lab-item">
                                <div class="lab-inner" style="justify-content: center !important;">
                                    <div class="lab-content">
                                        <span>Level : 26</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle padding-top padding-bottom"
                style="background-image: url({{ asset('assets/images/footer/bg.jpg)') }}">
                <div class="container">
                    <div class="row padding-lg-top">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-middle-item-wrapper">
                                <div class="footer-middle-item mb-lg-0">
                                    <div class="fm-item-title mb-4">
                                        <img src="{{ asset('assets/images/logo/logo_5.png') }}" alt="logo">
                                    </div>
                                    <div class="fm-item-content">
                                        <p class="mb-4">We're not just a team; we're a force. The Rex Squad is built on a foundation of trust, resilience, and a shared vision for greatness. Each member brings something unique to the table, and together, we create something unstoppable. Whether we're navigating challenges or celebrating victories, we do it with the same energy and determination that defines us. Ready to take on the world? So are we. Welcome to the Rex Squad.</p>
                                        <ul class="match-social-list d-flex flex-wrap align-items-center">
                                            <li><a href="#"><img src="{{ asset('assets/images/match/social-1.png') }}"
                                                        alt="vimeo"></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/images/match/social-2.png') }}"
                                                        alt="youtube"></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/images/match/social-3.png') }}"
                                                        alt="twitch"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-middle-item-wrapper">
                                <div class="footer-middle-item-3 mb-lg-0">
                                    <div class="fm-item-title">
                                        <h4>Our Newsletter</h4>
                                    </div>
                                    <div class="fm-item-content">
                                        <p>RT organization supported by community leaders</p>
                                        <form>
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" class="form-control" placeholder="Your Email">
                                            </div>
                                            <button type="submit" class="default-button"><span>Send Massage <i
                                                        class="icofont-circled-right"></i></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom-content text-center">
                                <p>&copy;2024 <a href="/">RT</a> - REX SQUAD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ================ footer Section end Here =============== -->

        <!-- All Needed JS -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/circularProgressBar.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/lightcase.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>


        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('set', 'anonymizeIp', true);
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async></script>



    </body>

</html>
