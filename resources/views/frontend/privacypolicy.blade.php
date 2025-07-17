@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap page_banner_wrapss text-center bg-cover"
        style="background-image: url('assets/img/privacy_bgimg.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Privacy Policy</h1>
            </div>
        </div>
    </div>

    <section class="section-padding privacy_policy_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="privacyy_ul_p">
                        <p>At [Your Company Name], we are committed to protecting your privacy and ensuring that your
                            personal information is handled in a safe and responsible manner. This Privacy Policy outlines
                            how we collect, use, and protect your information when you visit our website or use our
                            services.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Information We Collect</h3>
                        <p>We may collect the following types of information:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Personal Information: </strong>Name, email address, phone number, and other contact
                                details when you register on our website, subscribe to our newsletter, or request our
                                services.</li>
                            <li><strong>Technical Information: </strong>IP address, browser type, operating system, and
                                other technical details when you visit our website.</li>
                            <li><strong>Usage Data: </strong>Information about how you use our website and services, such as
                                pages visited, time spent on the site, and links clicked.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>How We Use Your Information</h3>
                        <p>We use the collected information for the following purposes:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>To Provide Services: </strong>To deliver the IT support and services you request.
                            </li>
                            <li><strong>To Improve Our Services: </strong>To enhance our website, services, and customer
                                experience.</li>
                            <li><strong>To Communicate: </strong>To send updates, respond to inquiries, and provide customer
                                support.</li>
                            <li><strong>To Comply with Legal Obligations: </strong>To meet legal and regulatory
                                requirements.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>How We Protect Your Information</h3>
                        <p>We implement a variety of security measures to ensure the safety of your personal information,
                            including encryption, access controls, and secure servers. However, please note that no method
                            of transmission over the internet or electronic storage is 100% secure.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Sharing Your Information</h3>
                        <p>We do not sell, trade, or otherwise transfer your personal information to outside parties, except
                            as described below:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Service Providers: </strong>We may share information with trusted third-party
                                service providers who assist us in operating our website and conducting our business.</li>
                            <li><strong>Legal Compliance: </strong>We may disclose information when required by law or to
                                protect our rights, property, or safety.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Cookies and Tracking Technologies</h3>
                        <p>We use cookies and similar tracking technologies to enhance your experience on our website.
                            Cookies are small files stored on your device that help us understand your preferences and
                            improve our services.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Your Rights</h3>
                        <p>You have the right to:</p>
                        <ul class="privacyy_ul_prt">
                            <li><strong>Access Your Information: </strong>Request a copy of the personal information we hold
                                about you.</li>
                            <li><strong>Correct Your Information: </strong>Request corrections to any inaccurate or
                                incomplete information.</li>
                            <li><strong>Delete Your Information: </strong>Request the deletion of your personal information,
                                subject to certain conditions.</li>
                            <li><strong>Opt-Out: </strong>Unsubscribe from marketing communications at any time.</li>
                        </ul>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Changes to This Privacy Policy</h3>
                        <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with
                            the updated effective date.</p>
                    </div>
                    <div class="privacyy_ul_hding">
                        <h3>Contact Us</h3>
                        <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
                        <div class="privacyy_ul_hding_link">
                            <a href="#">[Your Company Name]</a>
                            <a href="#">[Your Address]</a>
                            <a href="#">[Your Email Address]</a>
                            <a href="#">[Your Phone Number]</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-banner-wrapper bottom_website_form">
        <div class="container">

        @include('frontend.include.footer-contactForm')

        </div>
    </section>
@endsection
