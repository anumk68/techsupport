@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap page_banner_wrapss text-center bg-cover"
        style="background-image: url('assets/img/terms_con_bgimg.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Terms and Conditions</h1>
            </div>
        </div>
    </div>

    <section class="section-padding privacy_policy_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="privacyy_ul_p">
                        <p>Welcome to [Your Company Name]! By accessing or using our website and services, you agree to
                            comply with and be bound by the following Terms and Conditions. Please read these terms
                            carefully before using our services.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Acceptance of Terms</h3>
                        <p>By using our website or services, you acknowledge that you have read, understood, and agree to be
                            bound by these Terms and Conditions. If you do not agree to these terms, please do not use our
                            website or services.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Services Provided</h3>
                        <p>[Your Company Name] offers IT support services, including but not limited to:</p>
                        <ul class="privacyy_ul_prt">
                            <li>Technical support</li>
                            <li>System maintenance</li>
                            <li>Network management</li>
                            <li>Cybersecurity solutions</li>
                            <li>Data backup and recovery</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Use of Services</h3>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Eligibility: </strong>You must be at least 18 years old to use our services.</li>
                            <li><strong>User Account: </strong>You may need to create an account to access certain services.
                                You are responsible for maintaining the confidentiality of your account information and for
                                all activities that occur under your account.</li>
                            <li><strong>Prohibited Activities: </strong>You agree not to use our services for any unlawful
                                or prohibited activities, including but not limited to violating intellectual property
                                rights, spreading malware, or engaging in fraudulent activities.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Payment and Fees</h3>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Service Fees: </strong>Fees for our services will be communicated to you in advance.
                                You agree to pay all charges associated with the services you select.</li>
                            <li><strong>Payment Terms: </strong>Payments must be made according to the terms specified in
                                the invoice. Late payments may incur additional charges.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Confidentiality</h3>
                        <p>We are committed to maintaining the confidentiality of your information. Both parties agree to
                            protect confidential information and not to disclose it to any third parties without prior
                            written consent, except as required by law.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Intellectual Property</h3>
                        <p>You have the right to:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Ownership: </strong>All content and materials on our website, including text,
                                graphics, logos, and software, are the property of [Your Company Name] or our licensors and
                                are protected by intellectual property laws.</li>
                            <li><strong>License: </strong>We grant you a limited, non-exclusive, non-transferable license to
                                access and use our website and services for your personal or business purposes.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Limitation of Liability</h3>
                        <ul class="privacyy_ul_prt">
                            <li><strong>No Warranty: </strong>Our services are provided "as is" and "as available" without
                                any warranties, express or implied. We do not guarantee that our services will be
                                uninterrupted, error-free, or secure.</li>
                            <li><strong>Liability Limitation: </strong>To the maximum extent permitted by law, [Your Company
                                Name] shall not be liable for any indirect, incidental, special, consequential, or punitive
                                damages, or any loss of profits or revenues.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Indemnification</h3>
                        <p>You agree to indemnify and hold harmless [Your Company Name], its affiliates, and their
                            respective officers, directors, employees, and agents from any claims, liabilities, damages,
                            losses, or expenses arising out of your use of our services or your violation of these Terms and
                            Conditions.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Termination</h3>
                        <p>We reserve the right to suspend or terminate your access to our services at any time, without
                            notice, for conduct that we believe violates these Terms and Conditions or is harmful to other
                            users or our business interests.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Governing Law</h3>
                        <p>These Terms and Conditions are governed by and construed in accordance with the laws of [Your
                            Country/State]. Any disputes arising out of or in connection with these terms shall be subject
                            to the exclusive jurisdiction of the courts of [Your Country/State].</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Changes to Terms</h3>
                        <p>We may update these Terms and Conditions from time to time. Any changes will be posted on this
                            page with the updated effective date. Your continued use of our services after any changes
                            constitutes your acceptance of the new terms.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Contact Us</h3>
                        <p>If you have any questions or concerns about these Terms and Conditions, please contact us </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @include('frontend.include.footer-contactForm')

@endsection
