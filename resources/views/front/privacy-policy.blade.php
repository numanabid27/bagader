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
                        <h1 class="pbmit-title">Privacy Policy</h1>
                    </div>

                    <div class="content-box bg-light p-5 rounded shadow-sm">
                        <p class="lead mb-4">Effective Date: {{ date('F d, Y') }}</p>

                        <h4 class="mb-3">1. Introduction</h4>
                        <p class="mb-4">Welcome to <strong>Bagader</strong>. We respect your privacy and represent that we
                            are committed to protecting your personal data. This privacy policy will inform you as to how we
                            look after your personal data when you visit our website (regardless of where you visit it from)
                            and tell you about your privacy rights and how the law protects you.</p>

                        <h4 class="mb-3">2. Information We Collect</h4>
                        <p>We may collect, use, store and transfer different kinds of personal data about you which we have
                            grouped together follows:</p>
                        <ul class="list-unstyled mb-4 ps-3">
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> <strong>Identity
                                    Data:</strong> includes first name, last name, username or similar identifier.</li>
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> <strong>Contact
                                    Data:</strong> includes billing address, delivery address, email address and telephone
                                numbers.</li>
                            <li class="mb-2"><i class="pbmit-base-icon-check-mark text-primary me-2"></i> <strong>Technical
                                    Data:</strong> includes internet protocol (IP) address, your login data, browser type
                                and version, time zone setting and location, and other technology on the devices you use to
                                access this website.</li>
                        </ul>

                        <h4 class="mb-3">3. How We Use Your Information</h4>
                        <p>We will only use your personal data when the law allows us to. Most commonly, we will use your
                            personal data in the following circumstances:</p>
                        <ul class="list-unstyled mb-4 ps-3">
                            <li class="mb-2"><i class="pbmit-base-icon-black-arrow-1 text-primary me-2"></i> To register you
                                as a new customer.</li>
                            <li class="mb-2"><i class="pbmit-base-icon-black-arrow-1 text-primary me-2"></i> To process and
                                deliver your order including: Manage payments, fees and charges; Collect and recover money
                                owed to us.</li>
                            <li class="mb-2"><i class="pbmit-base-icon-black-arrow-1 text-primary me-2"></i> To manage our
                                relationship with you which will include: Notifying you about changes to our terms or
                                privacy policy; Asking you to leave a review or take a survey.</li>
                        </ul>

                        <h4 class="mb-3">4. Cookies</h4>
                        <p class="mb-4">You can set your browser to refuse all or some browser cookies, or to alert you when
                            websites set or access cookies. If you disable or refuse cookies, please note that some parts of
                            this website may become inaccessible or not function properly.</p>

                        <h4 class="mb-3">5. Data Security</h4>
                        <p class="mb-4">We have put in place appropriate security measures to prevent your personal data
                            from being accidentally lost, used or accessed in an unauthorized way, altered or disclosed. In
                            addition, we limit access to your personal data to those employees, agents, contractors and
                            other third parties who have a business need to know.</p>

                        <h4 class="mb-3">6. Contact Us</h4>
                        <p class="mb-0">If you have any questions about this privacy policy or our privacy practices, please
                            contact us at:</p>
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