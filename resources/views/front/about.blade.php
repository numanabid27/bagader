@extends('layouts.home')

@section('slider')
    <div class="pbmit-slider-area pbmit-slider-one">
        <div class="swiper-slider" data-autoplay="true" data-loop="false" data-dots="false" data-arrows="false"
            data-columns="1" data-margin="0" data-effect="fade">
            <div class="swiper-wrapper">
                <!-- Slide1 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/banner.png') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-top transform-delay-1">Excellence Since 1965
                                        </h5>
                                        <h2 class="pbmit-title transform-left transform-delay-3">About Bagader</h2>
                                        <div class="pbmit-desc transform-bottom transform-delay-4">
                                            Specialists in the import, distribution, and export of Batteries and Tyres
                                            across the Middle East & Africa.
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
    <!-- History & Vision Section -->
    <section class="section-md">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pbmit-heading-subheading animation-style2">
                        <h4 class="pbmit-subtitle">Who We Are</h4>
                        <h2 class="pbmit-title">Trusted Leaders in Automotive Distribution</h2>
                    </div>
                    <div class="mt-4">
                        <p class="mb-4">Established in 1965, <strong>BAGADER</strong> is a specialist in the import, distribution, and export of Batteries and Tyres. We cater to Automotive and Industrial applications, including cars, trucks, motorcycles, marine, back-up generators, UPS, and Leisure.</p>
                        <p class="mb-4 text-muted">The company is distinguished by its possession of its own distribution network and infrastructure covering the Arabian Peninsula, with branches in Yemen and a strategic hub in Dubai, U.A.E.</p>
                        
                        <div class="row mt-5">
                            <div class="col-md-6 mb-4">
                                <div class="p-4 bg-light rounded h-100">
                                    <h4 class="h5 fw-bold text-primary mb-3">Our Vision</h4>
                                    <p class="small mb-0">To maintain its leadership position in distribution of Tyres & Batteries in the CIS Countries, Middle East & African markets.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="p-4 bg-light rounded h-100">
                                    <h4 class="h5 fw-bold text-primary mb-3">Our Mission</h4>
                                    <p class="small mb-0">To maintain customer loyalty through honest relationships, high-quality products at reasonable prices, and ensuring consistent product availability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/about.png') }}" alt="About Bagader" class="img-fluid rounded shadow-lg">
                        <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded shadow m-4 d-none d-lg-block">
                            <h3 class="fw-bold text-primary mb-0">55+</h3>
                            <span class="text-muted">Years of Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-md bg-light pbmit-bg-color-light">
        <div class="container">
            <div class="text-center mb-5">
                <h4 class="pbmit-subtitle">Why Choose Us</h4>
                <h2 class="pbmit-title">We Drive Performance</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="pbmit-base-icon-star-1 fs-1 text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Competitive Prices</h5>
                        <p class="text-muted small">Highly competitive prices offered to all our clients across the region.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="pbmit-base-icon-user-1 fs-1 text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Customer Loyalty</h5>
                        <p class="text-muted small">Respecting and serving our loyal customers with dedication over the years.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="pbmit-base-icon-delivery-truck fs-1 text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Rapid Delivery</h5>
                        <p class="text-muted small">Fast delivery service and extensive stock reserves to meet market demands.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="pbmit-base-icon-world fs-1 text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Wide Range</h5>
                        <p class="text-muted small">Extensive range of brands catering to both niche and mass market segments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="about-section-one section-md">
        <div class="container">
            <div class="pbmit-ele-header-align-center">
                <div class="pbmit-heading-subheading animation-style2 text-center">
                    <h2 class="pbmit-title">Our Partners</h2>
                    <h4 class="pbmit-subtitle2 mb-5">We directly import from leading manufacturers in China, Germany, Indonesia, India, Korea, Japan and Thailand.</h4>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="pbmit-tab">
                        <ul class="nav nav-tabs justify-content-center border-0 mb-5" role="tablist">
                            <li class="nav-item mx-2" role="presentation">
                                <a class="nav-link active px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="tab" href="#tab-partners-1" aria-selected="true" role="tab" style="border: 1px solid #eee;">
                                    <span>Tyre Brands</span>
                                </a>
                            </li>
                            <li class="nav-item mx-2" role="presentation">
                                <a class="nav-link px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="tab" href="#tab-partners-2" aria-selected="false" role="tab" tabindex="-1" style="border: 1px solid #eee;">
                                    <span>Battery Brands</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Tyre Brands -->
                            <div class="tab-pane show active" id="tab-partners-1" role="tabpanel">
                                <div class="row g-4 justify-content-center align-items-center text-center">
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-2.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-3.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-4.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-10.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-11.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-12.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-13.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-14.png') }}" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                            <!-- Battery Brands -->
                            <div class="tab-pane" id="tab-partners-2" role="tabpanel">
                                <div class="row g-4 justify-content-center align-items-center text-center">
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-1.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-6.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-9.jpg') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-7.png') }}" class="img-fluid" alt=""></div>
                                    <div class="col-6 col-md-3"><img src="{{ asset('assets/images/partner-8.png') }}" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection