@extends('frontend.include.app')
@section('content')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/home_network_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Home Networking Solutions</h1>
                    </div>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        </ol>
                    </nav>

                </div>

              @include('frontend.include.contact-form')

            </div>
        </div>
    </div>
    <section class="service-details-wrapper section-padding pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12 pe-xl-5">
                    <div class="service-details-contents">
                        <div class="service-feature-img">
                            <img src="assets/img/services/home_network_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Reliable Home Network Configuration</h2>
                            <p>Trust our expert services for reliable home network configuration. We optimize Wi-Fi
                                performance and connectivity, ensuring seamless digital experiences for all devices. Whether
                                setting up new networks or improving existing ones, we tailor solutions to meet your
                                specific needs, enhancing reliability and speed. Our technicians ensure secure connections
                                and efficient network management, providing peace of mind and uninterrupted connectivity
                                throughout your home.</p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Network Security</h5>
                                        <p>Implementing firewalls, encryption protocols, and antivirus software to protect
                                            against cyber threats.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Guest Network Setup</h5>
                                        <p>Creating separate networks for guests to ensure privacy and security for main
                                            networks.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Network Troubleshooting</h5>
                                        <p>Identifying and resolving connectivity issues, such as slow speeds or dropped
                                            connections.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Effective Home Network Management</h3>
                            <p>Effective home network management ensures seamless connectivity and security. We optimize
                                Wi-Fi performance, manage devices, and troubleshoot issues to maintain reliable internet
                                access. Our solutions include the setup of secure networks, monitoring traffic, and ensuring
                                efficient data transfer. With proactive maintenance and expert support, we ensure your home
                                network operates smoothly, accommodating all your digital needs with ease</p>

                            <blockquote>
                                Enhance your home network with our solutions. We optimize Wi-Fi, secure connections, and
                                troubleshoot issues for seamless and reliable connectivity.
                            </blockquote>

                            <h4>Comprehensive Home Networking IT Support</h4>
                            <p>Experience seamless connectivity with our comprehensive home networking and IT support
                                services. We provide tailored solutions to optimize your Wi-Fi performance, ensure robust
                                security, and troubleshoot any issues promptly. Our expert technicians handle everything
                                from initial setup and configuration to ongoing maintenance and upgrades, ensuring your home
                                network is fast, reliable, and secure.</p>


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
                                <a href="#" class="theme-btn off-white"><i class="fal fa-cloud-download"></i> Pricing Plan
                                    2023</a>
                                <a href="#" class="theme-btn"><i class="fal fa-file-pdf"></i> Download.pdf</a>
                                <a href="#" class="theme-btn"><i class="fal fa-file-powerpoint"></i> download.ppt</a>
                            </div>
                        </div>

                        <div class="help-line-card text-white bg-cover"
                            style="background-image: url('assets/img/cta-bg.jpeg')">
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
