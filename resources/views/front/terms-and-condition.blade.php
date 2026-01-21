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
                        <h1 class="pbmit-title">Terms & Conditions</h1>
                    </div>

                    <div class="content-box bg-light p-5 rounded shadow-sm">
                        <p class="lead mb-4">Effective Date: {{ date('F d, Y') }}</p>

                        <h4 class="mb-3">1. Introduction</h4>
                        <p class="mb-4">Welcome to <strong>Bagader</strong>. These terms and conditions outline the rules
                            and regulations for the use of Bagader Trading Est.'s Website. By accessing this website we
                            assume you accept these terms and conditions. Do not continue to use Bagader if you do not agree
                            to take all of the terms and conditions stated on this page.</p>

                        <h4 class="mb-3">2. Intellectual Property Rights</h4>
                        <p class="mb-4">Other than the content you own, under these Terms, Bagader Trading Est. and/or its
                            licensors own all the intellectual property rights and materials contained in this Website. You
                            are granted limited license only for purposes of viewing the material contained on this Website.
                        </p>

                        <h4 class="mb-3">3. Restrictions</h4>
                        <p>You are specifically restricted from all of the following:</p>
                        <ul class="list-unstyled mb-4 ps-3">
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> Publishing any
                                Website material in any other media;</li>
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> Selling,
                                sublicensing and/or otherwise commercializing any Website material;</li>
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> Using this Website
                                in any way that is or may be damaging to this Website;</li>
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> Using this Website
                                in any way that impacts user access to this Website;</li>
                        </ul>

                        <h4 class="mb-3">4. Limitation of liability</h4>
                        <p class="mb-4">In no event shall Bagader Trading Est., nor any of its officers, directors and
                            employees, be held liable for anything arising out of or in any way connected with your use of
                            this Website whether such liability is under contract. Bagader Trading Est., including its
                            officers, directors and employees shall not be held liable for any indirect, consequential or
                            special liability arising out of or in any way related to your use of this Website.</p>

                        <h4 class="mb-3">5. Governing Law & Jurisdiction</h4>
                        <p class="mb-4">These Terms will be governed by and interpreted in accordance with the laws of the
                            United Arab Emirates, and you submit to the non-exclusive jurisdiction of the state and federal
                            courts located in UAE for the resolution of any disputes.</p>

                        <h4 class="mb-3">6. Contact Us</h4>
                        <p class="mb-0">If you have any questions about our Terms and Conditions, please contact us at:</p>
                        <div class="mt-3 p-3 bg-white border rounded">
                            <p class="mb-1"><strong>Bagader Trading Est.</strong></p>
                            <p class="mb-1">Email: info@bagader.com</p>
                            <p class="mb-0">Phone: +971 4 123 4567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection