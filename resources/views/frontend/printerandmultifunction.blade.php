@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/Printers_multifunctions_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Printers and Multi-function Technical Support
                        </h1>
                    </div>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12 col-xxl-6 col-lg-5 col-sm-12">
                    <div class="form_box home_page_form">
                        <div class="service-contact-form">
                            <div class="contact-form">
                                <h2>Fill The Form Now</h2>
                                <form action="{{ route('form.submit') }}" class="row" id="contact-form"><grammarly-extension
                                        data-grammarly-shadow-root="true"
                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                        class="dnXmp"></grammarly-extension><grammarly-extension
                                        data-grammarly-shadow-root="true"
                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                        class="dnXmp"></grammarly-extension>
                                    @csrf
                                    <input type="hidden" name="form_id" value="computer_tones_up1">
                                    <div class="col-md-6 col-12">
                                        <div class="form_a">
                                            <label for="name">Name</label>
                                            <input class="formmm" type="text" name="name" id="fname"
                                                placeholder="Enter Name" tabindex="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form_a">
                                            <label for="email">Enter Email Address</label>
                                            <input class="formmm" type="email" name="email" id="email"
                                                placeholder="Enter Email Address" tabindex="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form_a">
                                            <label for=" Number">Enter Number</label>
                                            <input class="formmm" type="text" name="phone" id="phone"
                                                placeholder="Enter Number" tabindex="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form_a">
                                            <label for=" Subject">Enter Subject</label>
                                            <input class="formmm" type="text" name="subject" id="subject"
                                                placeholder="Enter Subject" tabindex="0">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form_a">
                                            <label for=" Services">Tech Services </label>
                                            <select class="custom-select select_form" name="tech_services" tabindex="0"
                                                required>
                                                <option value="Virus &amp; Malware Removal">Virus &amp; Malware Removal
                                                </option>
                                                <option value="Computer Tune-Ups">Computer Tune-Ups</option>
                                                <option value="Home Networking">Home Networking</option>
                                                <option value="Email Services">Email Services</option>
                                                <option value="Internet Connectivity">Internet Connectivity</option>
                                                <option value="WiFi Connectivity">WiFi Connectivity</option>
                                                <option value="Data Backup Services">Data Backup Services</option>
                                                <option value="Program Errors &amp; Crashes">Program Errors &amp; Crashes
                                                </option>
                                                <option value="Microsoft Windows">Microsoft Windows</option>
                                                <option value="Smartphones &amp; Tablets">Smartphones &amp; Tablets</option>
                                                <option value="Apple Mac OS">Apple Mac OS</option>
                                                <option value="Printers &amp; Multifunctions">Printers &amp; Multifunctions
                                                </option>
                                                <option value="Training &amp; Guidance">Training &amp; Guidance</option>
                                                <option value="Software Applications">Software Applications</option>
                                                <option value="Antivirus &amp; Security Software">Antivirus &amp; Security
                                                    Software</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form_a">
                                            <label for=" Services">It Services</label>
                                            <select class="custom-select select_form" name="it_services" tabindex="0"
                                                required>
                                                <option value="Web Development">Web Development</option>
                                                <option value="App Development">App Development</option>
                                                <option value="Web Agency">Web Agency</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="UI/UX Design">UI/UX Design</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form_a">

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <button type="submit" class="btn btn-primary">Get A Quote</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="service-details-wrapper section-padding pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12 pe-xl-5">
                    <div class="service-details-contents">
                        <div class="service-feature-img">
                            <img src="assets/img/services/Printers_multifunctions_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Printers and Multi-function Device Support</h2>
                            <p>Enjoy all the benefits of our printing and multifunction device assistance that comes with
                                our expertly provided support tickets. We can make the process of scanning, adjusting
                                settings, and maintaining the device as efficient as possible. From print issues to the
                                deployment of multifunctional, scanning, and copying capabilities, to the improving of
                                device security, our knowledgeable personnel employ tailored solutions for the workplace to
                                be in order. Allow us to be your trusted provider, offering fast and skilled help and taking
                                full advantage of your printer and multi-functional devices.
                            </p>
                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Troubleshooting and Maintenance</h5>
                                        <p>Diagnosing and resolving issues with printers and multi-function devices.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Optimization and Configuration</h5>
                                        <p>Enhancing performance and configuring devices for optimal functionality.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Security and Network Integration</h5>
                                        <p>Implementing security measures and integrating devices into office networks for
                                            seamless operation.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Effortless Printing Solutions & Support
                            </h3>
                            <p>Making the printing process quick and easy is our main concern, however, our support covers
                                all aspects of office administration as well. Our business is the integration and operation
                                of the printing machine in its maximum capacity through the optimization of its operation
                                and maximum satisfaction of all features involved in it. The goal here is a smooth, quick
                                set-up or integration, and a reliable performance tune-up that runs your judicial system
                                like a star. We are your one-stop-shop to get easy printing and so improve your own
                                productivity through custom solutions that are perfect for you.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Technology</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Remote Access Tools
                                        </li>
                                        <li>Diagnostic Software
                                        </li>
                                        <li>Network Management Software</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Services offered</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Troubleshooting and Repair Services</li>
                                        <li>Installation and Configuration Assistance</li>
                                        <li>Maintenance and Support Contracts </li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>

                                Get expert support for printers and multi-function devices. Troubleshoot issues, optimize
                                performance, and ensure smooth operation with our specialized assistance

                            </blockquote>

                            <h4>Expert Help for Your Printing Needs
                            </h4>
                            <p>Get the expert's support in all your printing needs with our specialized services. We provide
                                complete and responsive solutions which will fix the issues, improve the performance, and
                                provide the capability of usage with the printers and multifunctional equipment at ease. Be
                                it for fixing technical problems, connecting internet setups, or bettering security
                                measures, be assured of our technicians' superior ability to successfully and efficiently
                                come up with assistive services that will perfectly suit your requirements.
                            </p>

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
                                <a href="#" class="theme-btn off-white"><i class="fal fa-cloud-download"></i>
                                    Pricing Plan 2023</a>
                                <a href="#" class="theme-btn"><i class="fal fa-file-pdf"></i> Download.pdf</a>
                                <a href="#" class="theme-btn"><i class="fal fa-file-powerpoint"></i>
                                    download.ppt</a>
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

    @include('frontend.include.contactForm')

@endsection
