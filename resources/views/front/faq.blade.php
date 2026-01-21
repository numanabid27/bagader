@extends('layouts.home')

@section('slider')
    <div class="d-flex justify-content-between align-items-center" style="padding-top: 91px">
    </div>
@endsection

@section('content')
    <section class="section-md">
        <div class="container-fluid" style="margin:0 auto; max-width: 1700px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pbmit-heading-subheading animation-style2 mb-5">
                        <h1 class="pbmit-title">Frequently Asked Questions</h1>
                    </div>

                    <div class="content-box bg-light p-5 rounded shadow-sm">
                        <div class="accordion" id="faqAccordion">

                            <!-- Question 1 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold text-dark bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        What brands of tyres and batteries do you distribute?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body bg-white text-muted">
                                        We import and distribute a wide range of leading global brands from China, Germany,
                                        Indonesia, India, Korea, Japan, and Thailand. This includes top-tier brands for both
                                        automotive and industrial applications.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Do you offer warranties on your products?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body bg-white text-muted">
                                        Yes, all our tyres and batteries come with standard manufacturer warranties. The
                                        specific warranty period and terms may vary depending on the product brand and type.
                                        Please contact our sales team for detailed warranty information for specific items.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Where are your branches located?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body bg-white text-muted">
                                        Bagader Trading Est. has a strong presence across the Arabian Peninsula. We have
                                        multiple branches in Yemen and a strategic distribution hub in Dubai, U.A.E.,
                                        allowing us to serve the entire Middle East and Africa region efficiently.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Can I purchase products directly from the website?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body bg-white text-muted">
                                        Currently, our website serves as a product catalog. You can browse our full range of
                                        tyres and batteries and use the "Place Order" feature to submit an inquiry. Our
                                        sales team will then contact you to finalize the purchase and arrange delivery.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Do you provide bulk or wholesale supply?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body bg-white text-muted">
                                        Absolutely. We specialize in wholesale distribution and supply to retailers, fleet
                                        operators, and industrial clients across the CIS countries, Middle East, and African
                                        markets. Contact us for bulk pricing and export inquiries.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection