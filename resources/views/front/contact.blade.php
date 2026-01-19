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
                            style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/contact.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-top transform-delay-1">One of the Asian
                                            partners (Supplier) once called Bagader </h5>
                                        <h2 class="pbmit-title transform-left transform-delay-3">Contact Us</h2>
                                        <div class="pbmit-desc transform-bottom transform-delay-4">
                                            We all need a little space to grow. Give yourself the space you need to
                                            find your inner you.
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
    <style>
        .contact-form .form-control::placeholder {
            color: #000 !important;
            opacity: 1;
            /* Firefox */
        }

        .contact-form .form-control::-ms-input-placeholder {
            /* Edge 12 -18 */
            color: #000 !important;
        }
    </style>
    <section class="contact-section section-md">
        <div class="container">
            <div class="contact-form-wrap bg-white shadow-lg p-5 rounded-4" style="border-radius: 20px;">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="pbmit-heading-subheading animation-style2">
                            <h4 class="pbmit-subtitle">Contact Us</h4>
                            <h2 class="pbmit-title">Get In Touch With Us</h2>
                            <div class="pbmit-heading-desc">
                                We are here to help! Send us your query and we will get back to you as soon as possible.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control py-3 px-4" name="name"
                                            placeholder="Your Name" required
                                            style="background: #f8f9fa; border: none; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control py-3 px-4" name="email"
                                            placeholder="Your Email" required
                                            style="background: #f8f9fa; border: none; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="tel" class="form-control py-3 px-4" name="phone"
                                            placeholder="Your Phone"
                                            style="background: #f8f9fa; border: none; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <textarea class="form-control py-3 px-4" name="message" rows="5"
                                            placeholder="Your Message" required
                                            style="background: #f8f9fa; border: none; border-radius: 10px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="pbmit-btn">
                                        <span class="pbmit-button-text">Send Message</span>
                                        <span class="pbmit-button-icon-wrapper">
                                            <span class="pbmit-button-icon">
                                                <i class="pbmit-base-icon-black-arrow-1"></i>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection