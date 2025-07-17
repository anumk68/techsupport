@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap page_banner_wrapss text-center bg-cover"
        style="background-image: url('assets/img/refund_bgimg.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Refund Policy</h1>
            </div>
        </div>
    </div>

    <section class="section-padding privacy_policy_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="privacyy_ul_p">
                        <p>At [Your Company Name], we strive to provide the best possible IT support services to our
                            clients. However, we understand that there may be circumstances where you may need to request a
                            refund. This Refund Policy outlines the terms and conditions for receiving a refund for our
                            services.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Eligibility for Refunds</h3>
                        <p>Refunds are available under the following conditions:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Service Not Delivered: </strong>If we fail to deliver the agreed-upon services
                                within the specified timeframe, you may be eligible for a full refund.</li>
                            <li><strong>Service Dissatisfaction: </strong>If you are not satisfied with the quality of our
                                services, you may request a refund within [number] days of service delivery.</li>
                            <li><strong>Duplicate Payments: </strong>If you have been charged multiple times for the same
                                service, you are entitled to a refund for the duplicate charges.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Non-Refundable Services</h3>
                        <p>The following services are non-refundable:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>One-Time Services: </strong>Fees for one-time services that have been fully
                                delivered are non-refundable.</li>
                            <li><strong>Consultation Fees: </strong>Fees for consultation services are non-refundable once
                                the consultation has been provided.</li>
                            <li><strong>Custom Solutions: </strong>Fees for custom IT solutions and projects are
                                non-refundable after the project has commenced.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Refund Process</h3>
                        <p>To request a refund, please follow these steps:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Contact Us: </strong>Email us at [Your Email Address] or call us at [Your Phone
                                Number] to initiate a refund request. Please provide your order details and the reason for
                                the refund.</li>
                            <li><strong>Review: </strong>Our team will review your request and may contact you for
                                additional information or clarification.</li>
                            <li><strong>Approval: </strong>If your refund request meets our eligibility criteria, we will
                                process your refund within [number] business days.</li>
                            <li><strong>Refund Method: </strong>Refunds will be issued using the original payment method. If
                                the original payment method is unavailable, we will work with you to determine an
                                alternative method.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Partial Refunds</h3>
                        <p>In certain situations, partial refunds may be granted at our discretion. This may include
                            scenarios where a portion of the service has been delivered or if there are extenuating
                            circumstances that warrant a partial refund.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Changes to This Refund Policy</h3>
                        <p>We reserve the right to update or modify this Refund Policy at any time. Any changes will be
                            posted on this page with the updated effective date. Your continued use of our services after
                            any changes constitutes your acceptance of the new terms.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Contact Us</h3>
                        <p>If you have any questions or concerns about this Refund Policy, please contact us</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

     @include('frontend.include.footer-contactForm')

@endsection
