<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bagader</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Base Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/shortcode.css') }}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body
    class="font-sans antialiased text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-900 flex flex-col min-h-screen">

    @if (!isset($hideHeader) || !$hideHeader)
        @php
            $isSolidNav = request()->routeIs('front.faq') || request()->routeIs('front.terms-and-condition') || request()->routeIs('front.privacy-policy') || request()->routeIs('product.show');
        @endphp
        <header class="site-header header-style-1" style="{{ $isSolidNav ? 'background-color: #000;' : '' }}">
            <div class="pbmit-header-overlay">
                <div class="site-header-menu">
                    <div class="container-fluid">
                        <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                            <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                                <div class="site-branding">
                                    <h1 class="site-title">
                                        <a href="/">
                                            <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="EVgrid">
                                            <img class="sticky-logo-img" src="{{ asset('assets/images/logo.png') }}"
                                                alt="EVgrid">
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="site-navigation">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                    <rect width="36" height="1" transform="translate(0.707) rotate(45)">
                                                    </rect>
                                                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)">
                                                    </rect>
                                                </svg>
                                            </span>
                                            <ul class="navigation clearfix">
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About Us</a></li>
                                                <li><a href="/product">Products</a></li>
                                                <li><a href="/contact">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="pbmit-right-box d-flex align-items-center">
                                <div class="pbmit-button-box">
                                    <div class="pbmit-header-button">
                                        <span style="color: #fff;">Saudi Arabia:</span>
                                        <a href="tel:+9661 448 5150">
                                            <span class="pbmit-header-button-text-1">+9661 448 5150</span>
                                        </a>
                                    </div>
                                    <div class="pbmit-header-button" style="text-align: right;">
                                        <span style="color: #fff;">UAE:</span>
                                        <a href="tel:+9714 227 6881">
                                            <span class="pbmit-header-button-text-1">+9714 227 6881</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="pbmit-button-box-second">
                                    <a class="pbmit-btn " href="#">
                                        <span class="pbmit-button-text">Book Consult</span>
                                        <span class="pbmit-button-icon-wrapper">
                                            <span class="pbmit-button-icon">
                                                <i class="pbmit-base-icon-black-arrow-1"></i>
                                            </span>
                                        </span>
                                    </a>
                                    <div class="pbmit-sticky-corner  pbmit-top-right-corner">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill=""
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 20V0C20 16 16 20 0 20H20Z" fill="red"></path>
                                        </svg>
                                    </div>
                                    <div class="pbmit-sticky-corner pbmit-bottom-left-corner">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 20V0C20 12 12 20 0 20H20Z" fill="red"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('slider')
        </header>
    @endif

    <!-- Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->

    @if (!isset($hideFooter) || !$hideFooter)
        <footer class="site-footer footer-style-1 pbmit-bg-color-blackish">
            <div class="pbmit-footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="pbmit-footer-widget-col-1 col-md-4">
                            <div class="widget">
                                <h2 class="widget-title">Subscribe to our newsletter</h2>
                                <div class="pbmit-footer-text">
                                    <P>
                                        Get exclusive insights, trend
                                        <span class="globalcolor">forecasts and innovative</span>
                                        strategies delivered directly to your inbox.
                                    </p>
                                </div>
                                <form>
                                    <div class="pbmit-footer-newsletter">
                                        <input type="email" class="form-control" name="EMAIL"
                                            placeholder="Your Email Addresss" required="">
                                        <a class="pbmit-btn " href="#">
                                            <span class="pbmit-button-text">Subscribe</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </form>
                                <div class="pbmit-social-media">
                                    <h3 class="pbmit-footer-text"> Follow us on </h3>
                                    <ul class="pbmit-social-links">
                                        <li class="pbmit-social-li pbmit-social-facebook">
                                            <a title="Facebook" href="https://www.facebook.com/GtRadialTiresSaudiArabia"
                                                target="_blank" rel="noopener">
                                                <span><i class="pbmit-base-icon-facebook-app-symbol"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-twitter">
                                            <a title="Twitter" href="https://x.com/bagader_GT" target="_blank"
                                                rel="noopener">
                                                <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                            </a>
                                        </li>

                                        <li class="pbmit-social-li pbmit-social-youtube">
                                            <a title="Youtube" href="https://www.youtube.com/Bagaderest" target="_blank"
                                                rel="noopener">
                                                <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-footer-widget-col-2 col-md-4">
                            <aside class="widget pbmit-two-column-menu widget_text">
                                <h2 class="widget-title">Pages</h2>
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/product">Products</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="pbmit-footer-widget-col-3 col-md-4">
                            <div class="widget widget_text">
                                <h2 class="widget-title">Utility Page</h2>
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="/terms-and-condition">Terms and Conditions</a></li>
                                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                                        <li><a href="/faq">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pbmit-footer-text-area">
                <div class="container">
                    <div class="pbmit-footer-text-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pbmit-footer-copyright-text-area">Copyright © 2026 <a href="/">Bagader</a>, All
                                    Rights Reserved.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @endif


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- jquery Appear JS -->
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <!-- Numinate JS -->
    <script src="{{ asset('assets/js/numinate.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- Magnific JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- countdown JS -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- AOS -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- GSAP -->
    <script src='{{ asset('assets/js/gsap.js') }}'></script>
    <!-- Scroll Trigger -->
    <script src='{{ asset('assets/js/ScrollTrigger.js') }}'></script>
    <!-- Split Text -->
    <script src='{{ asset('assets/js/SplitText.js') }}'></script>
    <!-- Magnetic -->
    <script src='{{ asset('assets/js/magnetic.js') }}'></script>
    <!-- GSAP Animation -->
    <script src='{{ asset('assets/js/gsap-animation.js') }}'></script>
    <!-- Theia Sticky -->
    <script src='{{ asset('assets/js/theia-sticky-sidebar.js') }}'></script>
    <!-- Scripts JS -->
    <script src='{{ asset('assets/js/scripts.js') }}'></script>
</body>
</body>

</html>