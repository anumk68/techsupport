@extends('frontend.include.app')
@section('content')

    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/Microsoft_windows_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Microsoft Windows Technical Support</h1>
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
                            <img src="assets/img/services/Microsoft_windows_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Expert Microsoft Windows Troubleshooting</h2>
                            <p>Expert Microsoft Windows Troubleshooting has been conventionally programmed to take care of
                                different problems within the Windows operating systems. Our tech masters are equipped with
                                a full set of advanced diagnostic tools, which they use to detect and fix that the system
                                has come across, such as errors, system crashes, and performance problems. No matter whether
                                it's software compatibility glitches, startup account, or needs for the proper operation of
                                settings, software, or etc., our service is ideal and that's how it makes your PC work like
                                a clock. Our specialist will be the one who will upgrade your satisfaction and will also be
                                the one who will reduce errors.
                            </p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Phone Support</h5>
                                        <p>Direct assistance via phone for immediate problem-solving.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Online Chat Support</h5>
                                        <p>Real-time guidance and troubleshooting through online chat platforms.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Knowledge Base and Forums</h5>
                                        <p>Self-help resources, FAQs, and community forums for troubleshooting and tips.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Get Quick Solutions for Windows Issues
                            </h3>
                            <p>After a lightning-quick chat with our proficient technical support members, your dilemmas are
                                solved. Our team is made up of skilled people who have experience of getting rid of various
                                problems rapidly and without mistakes. This broadly covers a person who sees that Windows
                                fails to process information, causing system crashes and hangs. We can also come across it
                                as an application that doesn't start, fails to start, or experiences constant crashes that
                                prevent the computer from further operation.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Technology</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Remote Desktop Tools</li>
                                        <li>Diagnostic and Monitoring Tools</li>
                                        <li>Ticketing and Service Management Systems</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Services offered</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Remote Assistance</li>
                                        <li>On-Site Support</li>
                                        <li>Consultation and Advisory Services</li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                                Microsoft Windows Technical Support offers expert assistance for resolving system errors,
                                crashes, and optimizing your Windows experience efficiently.
                            </blockquote>

                            <h4>Professional Windows Support Services
                            </h4>
                            <p>Experience professional Windows support services tailored to resolve a wide array of
                                technical challenges. Our dedicated team offers expertise in troubleshooting and optimizing
                                Windows operating systems. Whether you need assistance with error diagnostics, system
                                configuration, or performance enhancement, we provide reliable solutions to ensure your
                                computing environment runs smoothly. Trust our knowledgeable technicians to deliver
                                efficient support and enhance your overall Windows experience.</p>

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
