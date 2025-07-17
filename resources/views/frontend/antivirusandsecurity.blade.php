@extends('frontend.include.app')
@section('content')

   <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/antivirus_security_software_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                <div class="page-heading text-white about_main_banner">
                <h1>antivirus-&-security-software</h1>
            </div>
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                  </ol>
            </nav>
                </div>
    @include('frontend.include.contactForm')

            </div>
        </div>
    </div>
    <section class="service-details-wrapper section-padding pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12 pe-xl-5">
                    <div class="service-details-contents">
                        <div class="service-feature-img">
                            <img src="assets/img/services/antivirus_security_software_service.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Protect Your Systems: Professional Security Software Assistance </h2>
                            <p>Get full support for your antivirus and security program by turning to a professional that specializes in safeguarding your systems. The tech support team is aiming to provide you with solutions and help you stay in touch with your antivirus programs and security software to make sure they function as they should do. Whether it's the setting up part or the problem-solving part, we are excellent at crafting solutions that perfectly fit your needs. Expect us to give the best possible protection, hence prevent any threats from getting into your data and perform your operations securely.</p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Installation and Setup
                                        </h5>
                                        <p>Assisting users with the proper installation and configuration of antivirus and security software to ensure it functions correctly.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Troubleshooting and Issue Resolution</h5>
                                        <p>Diagnosing and resolving software issues, such as virus infections, software errors, or performance issues, to maintain system security.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Updates and Maintenance </h5>
                                        <p>Managing updates, patches, and upgrades to ensure antivirus definitions are current and software remains effective against emerging threats.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Technologies</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Signature-Based Detection</li>
                                        <li>Behavioral Analysis
                                        </li>
                                        <li>Heuristic Analysis</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Services</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Installation and Configuration</li>
                                        <li>Troubleshooting and Issue Resolution
                                        </li>
                                        <li>Consultation and Guidance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                            Secure your systems with expert antivirus and security software technical support for comprehensive protection and reliable system integrity
                            </blockquote>

                            <h4>Professional Help for Antivirus and Security Issues</h4>
                            <p>Having an expert security team provides antivirus specialist support for their user's security by guided professional support to analyze possible vulnerabilities and to apply proactive measures. The consultancy team offers installation, configuration, and ongoing maintenance to secure the infrastructure from cyber threats. We ensure that your system is safe and stable by identifying the problem and eliminating it using the right solutions in time that caused the issue. Along with patch management, the Cloudstores provide our customers with a range of cybersecurity technologies to protect your information and hardware in case of an unexpected security breach. Our security specialists are always ready to offer you the kind of support you need to protect yourself against the latest threats and minimize any data and information breaches.</p>


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12 mt-5 mt-xl-0">
                    <div class="service-sidebar-wrapper">
                        <div class="single-sidebar-widgets">
                            <div class="wid-title">
                                <h3>Services Category</h3>
                            </div>
                            <div class="services-category-link">
                                <a href="services-details.php">IT Management</a>
                                <a href="services-details.php">Web Development</a>
                                <a href="services-details.php">App Development</a>
                                <a href="services-details.php">Cyber Services</a>
                            </div>
                        </div>

                        <div class="single-sidebar-widgets doc-sidebar">
                            <div class="wid-title">
                                <h3>Documents</h3>
                            </div>
                            <div class="download-service-doc">
                                <a href="#" class="theme-btn off-white"><i class="fal fa-cloud-download"></i> Pricing Plan 2023</a>
                                <a href="#" class="theme-btn"><i class="fal fa-file-pdf"></i> Download.pdf</a>
                                <a href="#" class="theme-btn"><i class="fal fa-file-powerpoint"></i> download.ppt</a>
                            </div>
                        </div>

                        <div class="help-line-card text-white bg-cover" style="background-image: url('assets/img/cta-bg.jpeg')">
                            <span>Let's Work Together</span>
                            <h2>IT Service Agency</h2>
                            <div class="single-menu-box">
                                <div class="icon d-flex mt-30 align-center">
                                    <p><i class="fal fa-phone-volume"></i> +012 (345) 6789</p>
                                </div>
                                <a href="contact.php" class="theme-btn mt-20">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      @include('frontend.include.footer-contactForm')

@endsection
