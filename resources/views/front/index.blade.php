@extends('layouts.home')

@section('slider')
    <div class="pbmit-slider-area pbmit-slider-one">
        <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false"
            data-columns="1" data-margin="0" data-effect="fade">
            <div class="swiper-wrapper">
                <!-- Slide1 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/slide-1.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-top transform-delay-1">One of the Asian
                                            partners (Supplier) once called Bagader </h5>
                                        <h2 class="pbmit-title transform-left transform-delay-3">The Batteries and
                                            Tyres King</h2>
                                        <div class="pbmit-desc transform-bottom transform-delay-4">
                                            We all need a little space to grow. Give yourself the space you need to
                                            find your inner you.
                                        </div>
                                        <div class="pbmit-button transform-bottom transform-delay-5">
                                            <a class="pbmit-btn" href="#">
                                                <span class="pbmit-button-text">Talk to an expert</span>
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide2 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/slide-2.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-top transform-delay-1">Improve your
                                            Drive</h5>
                                        <h2 class="pbmit-title transform-left transform-delay-3">Leverage The
                                            Potential <br> of the Future.</h2>
                                        <div class="pbmit-desc transform-bottom transform-delay-4">
                                            Although they won't blow up the market, electric automobiles will
                                            gradually get better.
                                        </div>
                                        <div class="pbmit-button transform-bottom transform-delay-5">
                                            <a class="pbmit-btn" href="#">
                                                <span class="pbmit-button-text">Talk to an expert</span>
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide3 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/slide-3.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-top transform-delay-1">Your Nature
                                            Friend.</h5>
                                        <h2 class="pbmit-title transform-left transform-delay-3">Where The energy
                                            and <br> Excitement Collide</h2>
                                        <div class="pbmit-desc transform-bottom transform-delay-4">
                                            The future of transportation will be electric vehicles. We must make the
                                            shift, and it must be sustainable.
                                        </div>
                                        <div class="pbmit-button transform-bottom transform-delay-5">
                                            <a class="pbmit-btn" href="#">
                                                <span class="pbmit-button-text">Talk to an expert</span>
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="page-content">

        <!-- Ihbox Start -->
        <section class="ihbox-section-one">
            <div class="container">
                <div class="ihbox-wrap pbmit-bg-color-blackish">
                    <div class="ihbox-contant">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="ihbox-inner">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('assets/images/homepage-1/ihbox/icon-img-01.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <h2 class="pbmit-element-title">High Quality <br>Charger</h2>
                                            <div class="pbmit-heading-desc">We offer smart, safe and innovative<br> charging
                                                solutions</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="ihbox-inner">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('assets/images/homepage-1/ihbox/icon-img-02.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <h2 class="pbmit-element-title">Quick <br>Installations</h2>
                                            <div class="pbmit-heading-desc">improving accessibility to the <br>future of
                                                mobility!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="ihbox-inner">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('assets/images/homepage-1/ihbox/icon-img-03.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <h2 class="pbmit-element-title">Accessories <br>Store</h2>
                                            <div class="pbmit-heading-desc">we’re raising the bar of the EV <br>charging
                                                ecosystem</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="ihbox-inner">
                                    <div class="pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('assets/images/homepage-1/ihbox/icon-img-04.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <h2 class="pbmit-element-title">Renewable<br>Energy</h2>
                                            <div class="pbmit-heading-desc">Developing next-generation <br>electric vehicle
                                                chargers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ihbox end -->

        <!-- Tab Start -->
        <section class="tab-section-one section-md">
            <div class="tab-wrap">
                <div class="container">
                    <div class="row pbmit-posts-wrapper">
                        <div class="pbmit-left-col col-md-6">
                            <div class="tab-image"></div>
                        </div>
                        <div class="pbmit-contentbox col-md-6">
                            <div class="pbmit-heading-subheading animation-style4">
                                <h4 class="pbmit-subtitle">
                                    Our History
                                </h4>
                                <h2 class="pbmit-title">Type History & Tyre Technology</h2>
                                <div class="pbmit-heading-desc">
                                    Some of the tyre brands put out in the market an unusual looking tyre. It is asymmetric.
                                    It has different tread patterns on its inner and outer sides, giving it a distinct
                                    performance advantage over a tyre with a symmetrical or directional tread.
                                </div>
                            </div>
                            <div class="pbmit-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-2-1" aria-selected="true"
                                            role="tab">
                                            <span>Today's Developments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2-2" aria-selected="false"
                                            role="tab" tabindex="-1">
                                            <span>Tomorrow's Developments</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="tab-2-1" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="pbmit-tab-content-inner">
                                                <div class="row pbmit-tab-contents">

                                                    <div class="col-md-12">
                                                        <ul class="list-group list-group-borderless">
                                                            <li class="list-group-item">
                                                                <span class="pbmit-icon-list-text">The tread pattern on the
                                                                    inner side of a typical asymmetric tyrehas more grooves
                                                                    giving better grip on wet roads</span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span class="pbmit-icon-list-text">The outer side has a
                                                                    higher plain surface area, the benefit ofwhich becomes
                                                                    apparent when cornering at speed on a dry road</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2-2" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="pbmit-tab-content-inner">
                                                <div class="row pbmit-tab-contents">

                                                    <div class="col-md-12">
                                                        <div class="pbmit-tab-inner-content">
                                                            <ul>
                                                                <li>One of the well known brands is starting to make tyres
                                                                    for tomorrow's cars. The science fiction blockbuster,
                                                                    Minority Report movie,</li>
                                                                <li>The featured Tom Cruise riding a Lexus coupe with Ultra
                                                                    High Performance tyres. These are expected to hit the
                                                                    road in 2054!</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <a class="pbmit-btn " href="#">
                                <span class="pbmit-button-text">Get Started</span>
                                <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tab-section-one2">
            <div class="tab-wrap">
                <div class="container">
                    <div class="row pbmit-posts-wrapper align-items-center justify-content-between">

                        <div class="pbmit-contentbox col-md-5">
                            <div class="pbmit-heading-subheading animation-style4">
                                <h2 class="pbmit-title">Tyre Patterns</h2>
                                <div class="pbmit-heading-desc" style="text-align: justify;">
                                    Some tyre brands introduce asymmetric tyre patterns designed for enhanced performance
                                    and safety. These tyres feature different tread designs on the inner and outer sections,
                                    each serving a specific function.

                                    The inner tread pattern focuses on efficient water evacuation through circumferential
                                    and lateral grooves, improving grip on wet roads and reducing the risk of hydroplaning.
                                    The outer tread pattern is built with larger tread blocks and stronger shoulder lugs,
                                    providing superior stability, cornering control, and traction on dry surfaces.

                                    This combination allows asymmetric tyres to deliver balanced handling, improved braking,
                                    reduced road noise, and longer tread life, making them an excellent choice for modern
                                    vehicles that demand high performance in varied driving conditions.
                                </div>
                            </div>


                        </div>
                        <div class="pbmit-left-col col-md-6">
                            <div class="tab-image2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab end -->

        <!-- Service Start -->
        <section class="service-section-one section-md pbmit-bg-color-global pbmit-extend-animation">
            <div class="service-wrap">
                <div class="container pbmit-col-stretched-yes pbmit-col-right">
                    <div class="position-relative">
                        <div class="pbmit-heading-subheading animation-style2">
                            <h4 class="pbmit-subtitle">
                                Charging Solutions That Suit Everyone
                            </h4>
                            <h2 class="pbmit-title">Choose Your Way of Charging</h2>
                        </div>
                    </div>
                    <div class="pbmit-col-stretched-right">
                        <div class="swiper-slider__1">
                            <div class="swiper-wrapper__1 d-flex gap-4">
                                <!-- Slide1 -->
                                <div class="swiper-slide__1">
                                    <article class="pbmit-service-style-2">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-content">
                                                <div class="pbmit-service-image-wrapper">
                                                    <div class="pbmit-featured-img-wrapper">
                                                        <div class="pbmit-featured-wrapper">
                                                            <img src="{{ asset('assets/images/battery-1.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="119.09" height="112.42"
                                                        viewBox="0 0 119.09 112.42">
                                                        <path
                                                            d="M.05,110.13a85.42,85.42,0,0,0,20.78-2c12.23-2.83,20.86-9.88,25.28-21.69,2.55-6.82,4.71-13.79,7.13-20.66C57,55,64.39,48,75.55,45.07c5-1.31,9.92-2.7,14.82-4.26,17.66-5.65,25.37-15.63,26.55-34.2.14-2.16.09-4.32.13-6.48,2.5-.63,2,1.17,2,2.5q0,17.75,0,35.5v74q-57.75,0-115.5-.07C2.34,112.05-.42,113.66.05,110.13Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="pbmit-service-icon">
                                                    <i class="pbmit-evgrid-icon pbmit-evgrid-icon-charging-station"></i>
                                                </div>
                                                <div class="pbmit-content-box">

                                                    <h3 class="pbmit-service-title">
                                                        <a href="service-details.html"
                                                            title="Sealed Maintenance free Battery">Sealed Maintenance free
                                                            Battery</a>
                                                    </h3>
                                                    <div class="pbmit-service-description">
                                                        <p>Home is Most popular location to charge an EV, with more than 64%
                                                            of current EV</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="pbmit-service-btn" href="service-details.html" title="Home Charging">
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href="service-details.html"></a>
                                    </article>
                                </div>
                                <!-- Slide2 -->
                                <div class="swiper-slide__1">
                                    <article class="pbmit-service-style-2">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-content">
                                                <div class="pbmit-service-image-wrapper">
                                                    <div class="pbmit-featured-img-wrapper">
                                                        <div class="pbmit-featured-wrapper">
                                                            <img src="{{ asset('assets/images/battery-2.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="119.09" height="112.42"
                                                        viewBox="0 0 119.09 112.42">
                                                        <path
                                                            d="M.05,110.13a85.42,85.42,0,0,0,20.78-2c12.23-2.83,20.86-9.88,25.28-21.69,2.55-6.82,4.71-13.79,7.13-20.66C57,55,64.39,48,75.55,45.07c5-1.31,9.92-2.7,14.82-4.26,17.66-5.65,25.37-15.63,26.55-34.2.14-2.16.09-4.32.13-6.48,2.5-.63,2,1.17,2,2.5q0,17.75,0,35.5v74q-57.75,0-115.5-.07C2.34,112.05-.42,113.66.05,110.13Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="pbmit-service-icon">
                                                    <i class="pbmit-evgrid-icon pbmit-evgrid-icon-charging-station"></i>
                                                </div>
                                                <div class="pbmit-content-box">
                                                    <h3 class="pbmit-service-title">
                                                        <a href="service-details.html">FB Conventional</a>
                                                    </h3>
                                                    <div class="pbmit-service-description">
                                                        <p>Home is Most popular location to charge an EV, with more than 64%
                                                            of current EV</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="pbmit-service-btn" href="service-details.html" title="Home Charging">
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href="service-details.html"></a>
                                    </article>
                                </div>
                                <!-- Slide3 -->
                                <div class="swiper-slide__1">
                                    <article class="pbmit-service-style-2">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-content">
                                                <div class="pbmit-service-image-wrapper">
                                                    <div class="pbmit-featured-img-wrapper">
                                                        <div class="pbmit-featured-wrapper">
                                                            <img src="{{ asset('assets/images/tyre-1.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="119.09" height="112.42"
                                                        viewBox="0 0 119.09 112.42">
                                                        <path
                                                            d="M.05,110.13a85.42,85.42,0,0,0,20.78-2c12.23-2.83,20.86-9.88,25.28-21.69,2.55-6.82,4.71-13.79,7.13-20.66C57,55,64.39,48,75.55,45.07c5-1.31,9.92-2.7,14.82-4.26,17.66-5.65,25.37-15.63,26.55-34.2.14-2.16.09-4.32.13-6.48,2.5-.63,2,1.17,2,2.5q0,17.75,0,35.5v74q-57.75,0-115.5-.07C2.34,112.05-.42,113.66.05,110.13Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="pbmit-service-icon">
                                                    <i class="pbmit-evgrid-icon pbmit-evgrid-icon-charging-station"></i>
                                                </div>
                                                <div class="pbmit-content-box">
                                                    <h3 class="pbmit-service-title">
                                                        <a href="service-details.html">CHAMPIRO SX2</a>
                                                    </h3>
                                                    <div class="pbmit-service-description">
                                                        <p>Home is Most popular location to charge an EV, with more than 64%
                                                            of current EV</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="pbmit-service-btn" href="service-details.html" title="Home Charging">
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href="service-details.html"></a>
                                    </article>
                                </div>
                                <!-- Slide4 -->
                                <div class="swiper-slide__1">
                                    <article class="pbmit-service-style-2">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-content">
                                                <div class="pbmit-service-image-wrapper">
                                                    <div class="pbmit-featured-img-wrapper">
                                                        <div class="pbmit-featured-wrapper">
                                                            <img src="{{ asset('assets/images/tyre-2.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="119.09" height="112.42"
                                                        viewBox="0 0 119.09 112.42">
                                                        <path
                                                            d="M.05,110.13a85.42,85.42,0,0,0,20.78-2c12.23-2.83,20.86-9.88,25.28-21.69,2.55-6.82,4.71-13.79,7.13-20.66C57,55,64.39,48,75.55,45.07c5-1.31,9.92-2.7,14.82-4.26,17.66-5.65,25.37-15.63,26.55-34.2.14-2.16.09-4.32.13-6.48,2.5-.63,2,1.17,2,2.5q0,17.75,0,35.5v74q-57.75,0-115.5-.07C2.34,112.05-.42,113.66.05,110.13Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="pbmit-service-icon">
                                                    <i class="pbmit-evgrid-icon pbmit-evgrid-icon-charging-station"></i>
                                                </div>
                                                <div class="pbmit-content-box">
                                                    <h3 class="pbmit-service-title">
                                                        <a href="service-details.html">RM 235</a>
                                                    </h3>
                                                    <div class="pbmit-service-description">
                                                        <p>Home is Most popular location to charge an EV, with more than 64%
                                                            of current EV</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="pbmit-service-btn" href="service-details.html" title="Home Charging">
                                                <span class="pbmit-button-icon-wrapper">
                                                    <span class="pbmit-button-icon">
                                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href="service-details.html"></a>
                                    </article>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <section class="pricing-plan" style="padding: 60px 0px 0px;">
            <div class="pricing-plan-wrap">
                <div class="container">
                    <div class=" pbminfotech-ele-ptable-style-1">
                        <div class="pbmit-heading-subheading text-center animation-style2">

                            <h2 class="pbmit-title">Our Products</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('assets/images/battery.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3>Batteries</h3>
                                        <p>For Automotive and Industrial applications, including cars, trucks, motorcycles,
                                            marine, back up generators, UPS, and Leisure.</p>
                                        <a href="#" class="pbmit-btn pbmit-btn-style-2">View Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('assets/images/tyre.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3>Tyres</h3>
                                        <p>For passenger cars, buses, trucks, agricultural trailers, and earthmoving
                                            equipment.</p>
                                        <a href="#" class="pbmit-btn pbmit-btn-style-2">View Products</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About start -->
        <section class="about-section-one section-md">
            <div class="about-contant">
                <div class="container">
                    <div class="pbmit-ele-header-align-center">
                        <div class="pbmit-heading-subheading animation-style2 text-center">
                            <h2 class="pbmit-title">Our Partners</h2>
                            <h4 class="pbmit-subtitle2">

                                We directly import from leading manufacturers in China, Germany, Indonesia, India,
                                Korea,
                                Japan and Thailand.
                            </h4>

                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div>
                                <h6>Established in 1965, BAGADER is a specialist in the import, distribution, and export of
                                    :-</h6>
                                <p style="text-align: justify;">Batteries – for Automotive and Industrial applications,
                                    including cars, trucks,
                                    motorcycles, marine, back up generators, UPS, and Leisure. Tyres and Tubes – for
                                    passenger cars, buses, trucks, agricultural trailers, and earthmoving equipment. The
                                    company is distinguished by its possession of its own distribution network, with its
                                    related infrastructure for its Sub Business Units (SBU’s), that cover the landscape of
                                    the Arabian Peninsula. Inaddition, it has a branch in Yemen, and derives its strength
                                    internationally via its Dubai, U.A.E. branch which facilitates its hub service.

                                    Its highly competitive prices offered to its clients.
                                    Customer satisfaction and respecting our loyal customers over the years
                                    Its rapid delivery service and extensive stock reserves
                                    Its extensive range of makes and brands, that accommodate for the needs of both
                                    segments of the market, the niche and the mass market
                                    With such a strong presence and extensive market coverage our suppliersrate us among the
                                    top distributors $amp; suppliers in sales & growth.

                                    Vision

                                    To maintain its leadership position in distribution of Tyres & Batteries in the CIS
                                    Countries, Middle East & African markets

                                    Mission

                                    To maintain our customer loyalty which can be achieved through honest & trustful
                                    relationships and to supply them with high quality products at reasonable prices and by
                                    ensuring the availability of products at all times.</p>
                            </div>
                        </div>
                        <div class="col-md-6">


                            <div class="pbmit-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-partners-1"
                                            aria-selected="true" role="tab">
                                            <span>Tyre Brands</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-partners-2"
                                            aria-selected="false" role="tab" tabindex="-1">
                                            <span>Battery Brands</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="tab-partners-1" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="pbmit-tab-content-inner">
                                                <div class="row pbmit-tab-contents">

                                                    <div class="col-md-12">
                                                        <div class="row partner_row">
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-2.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-3.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-4.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-10.png') }}"
                                                                    alt="">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-11.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-12.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-13.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-14.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-15.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-16.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-partners-2" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="pbmit-tab-content-inner">
                                                <div class="row pbmit-tab-contents">

                                                    <div class="col-md-12">
                                                        <div class="row partner_row">
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-1.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-6.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-9.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-7.png') }}"
                                                                    alt="">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <img src="{{ asset('assets/images/partner-8.png') }}"
                                                                    alt="">
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Our Clients Start -->
        <section class="our-client-section-one section-md pbmit-bg-color-blackish">
            <div class="our-client-wrap">
                <div class="container">
                    <div class="pbmit-ele-header-align-center">
                        <div class="pbmit-heading-subheading text-center animation-style2">
                            <h4 class="pbmit-subtitle">
                                <span></span>
                                Our Clients
                            </h4>
                            <h2 class="pbmit-title">Compatible brands</h2>
                        </div>
                    </div>
                    <div class="row">
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-1.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-2.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-2.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-3.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-3.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-4.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-4.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-5.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-5.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-6.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-6.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-7.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-7.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-8.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-8.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-9.jpg') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-9.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class=" pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-10.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-10.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class=" pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-11.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper"> <img
                                                src="{{ asset('assets/images/partner-11.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele pbmit-client-style-1 col-md-6 col-lg-3">
                            <div class=" pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <div class="pbmit-client-hover-img">
                                        <img src="{{ asset('assets/images/partner-12.png') }}" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/partner-12.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Clients End -->

        <!-- Testimonial Start -->
        <section class="testimonial-section-one pbmit-element-testimonial-style-3">
            <div class="testimonial-demo">
                <div class="container p-0">
                    <div class="testimonial-item">
                        <div class="pbmit-tween-efect pbmit-tween-text pbmit-tween-effect-style-1">
                            <div class="pbmit-tween-effect" data-x-start="0" data-x-end="0" data-y-start="80" data-y-end="0"
                                data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg"
                                data-skew-x-end="0deg" data-skew-y-start=" 0deg" data-skew-y-end=" 0deg"
                                data-rotate-x-start="0" data-rotate-x-end="0">
                                <h3 class="pbmit-element-title">Testimonials</h3>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-element-testimonial-style-3">
                        <div class="pbmit-posts-inner">
                            <div class="swiper-slider pbmit-gallery-top" data-arrows="true">
                                <div class="swiper-wrapper">
                                    <!-- Slide1 -->
                                    <div class="swiper-slide">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Passages of Lorem Ipsum available, but the majority have suffered
                                                        alteration in some form, by injected humour, or randomised words
                                                        which evenhtly believable.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide2 -->
                                    <div class="swiper-slide">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Passages of Lorem Ipsum available, but the majority have suffered
                                                        alteration in some form, by injected humour, or randomised words
                                                        which evenhtly believable.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide3 -->
                                    <div class="swiper-slide">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Passages of Lorem Ipsum available, but the majority have suffered
                                                        alteration in some form, by injected humour, or randomised words
                                                        which evenhtly believable.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide4 -->
                                    <div class="swiper-slide">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-star-ratings"> <i
                                                    class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Passages of Lorem Ipsum available, but the majority have suffered
                                                        alteration in some form, by injected humour, or randomised words
                                                        which evenhtly believable.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide5 -->
                                    <div class="swiper-slide">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“I would recommend practitioners at this center to everyone! They are
                                                        great to work with and are excellemt trainers. Thank you all!”</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slider pbmit-gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <!-- Slide1 -->
                                    <div class="swiper-slide">
                                        <div class="pbmit-auther-content">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-1/testimonial/testimonial-img-01.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbminfotech-box-title">Hazel Jenkins</h3>
                                            <div class="pbminfotech-testimonial-detail">Ceo &amp; Founder</div>
                                        </div>
                                    </div>
                                    <!-- Slide2 -->
                                    <div class="swiper-slide">
                                        <div class="pbmit-auther-content">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-1/testimonial/testimonial-img-02.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbminfotech-box-title">Dylan Wang</h3>
                                            <div class="pbminfotech-testimonial-detail">Manager</div>
                                        </div>
                                    </div>
                                    <!-- Slide3 -->
                                    <div class="swiper-slide">
                                        <div class="pbmit-auther-content">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-1/testimonial/testimonial-img-03.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbminfotech-box-title">Naomi Violet</h3>
                                            <div class="pbminfotech-testimonial-detail">Manager</div>
                                        </div>
                                    </div>
                                    <!-- Slide4 -->
                                    <div class="swiper-slide">
                                        <div class="pbmit-auther-content">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-1/testimonial/testimonial-img-04.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbminfotech-box-title">Parsons William</h3>
                                            <div class="pbminfotech-testimonial-detail">Co Founder</div>
                                        </div>
                                    </div>
                                    <!-- Slide5 -->
                                    <div class="swiper-slide">
                                        <div class="pbmit-auther-content">
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-1/testimonial/testimonial-img-05.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbminfotech-box-title">Ariana Green</h3>
                                            <div class="pbminfotech-testimonial-detail">Satisfied Client</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 testimonial-left-col">
                            <div class="testimonial-wrap">
                                <div class="testimonial-image">
                                    <div class="testimonial-widget-container">
                                        <img src="{{ asset('assets/images/homepage-1/bg/rating-star.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 testimonial-right-col">
                            <div class="testimonial-wrap">
                                <div class="testimonial-widget">
                                    <div class=" pbmit-custom-heading animation-style4">
                                        <h2 class="pbmit-element-title">Check all 3,583 readers reviews on</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-wrap">
                                <div class="testimonial-contant">
                                    <div class="testimonial-img">
                                        <img src="{{ asset('assets/images/homepage-1/bg/client-logo-page.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

    </div>
@endsection