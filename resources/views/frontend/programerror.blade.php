@extends('frontend.include.app')
@section('content')

    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/Program_errors_crashes_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Program Errors and Crashes Technical Support</h1>
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
                            <img src="assets/img/services/Program_errors_crashes_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>24/7 Program Error and Crash Resolution Services</h2>
                            <p>24/7 Program Error and Crash Resolution Services that support you from software anomalies by
                                responding quickly and efficiently to your needs with our professional assistance of the
                                staff members. In the case of unexpected application crashes or error messages, we are
                                available to our loyal customers who get our expert team round the clock to diagnose and
                                resolve these issues timeously. We implement the latest troubleshooting techniques to find
                                the origin of the program errors and hence, we guarantee that your software runs smoothly
                                and without any problem.
                            </p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Syntax Errors</h5>
                                        <p>Occur when code violates language grammar. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Runtime Errors</h5>
                                        <p>Happen during program execution.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Logical Errors</h5>
                                        <p>Produce incorrect results without crashing.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Effective Troubleshooting for Software Crashes and Errors</h3>
                            <p>Efficiently troubleshooting programs after a crash and error is possible by using a
                                systematic approach. At first, read the error message and see the message type and line. Try
                                the problem continuously to know the existing setup that causes it. Review logs and utilize
                                debugging tools to track down the origin of the error. Deal with the code and remove the
                                comments ending at faulty section will solve the problem.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Technology</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Integrated Development Environments (IDEs) </li>
                                        <li>Automated Testing Framework</li>
                                        <li>Continuous Integration/Continuous Deployment (CI/CD) Tools </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Services offered</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Error Monitoring</li>
                                        <li>Debugging</li>
                                        <li>Logging</li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                                Program errors and crashes fall into three types: syntax errors (code grammar issues),
                                runtime errors (occur during execution), and logical errors (incorrect logic).

                            </blockquote>

                            <h4>Reliable Technical Support for Software Errors and Crashes
                            </h4>
                            <p>The availability of a reliable technical support team to deal with an operational efficiency
                                and downtime is the result of the possible causes of an efficient operation in day-to-day
                                operations. The main part of it is the right detection and definition of the problem via
                                proper error analyzing and troubleshooting. Knowledgeable support teams are experienced in
                                the detection of the root cause of the problem through the use of advanced debugging tools
                                and methods, e.g., syntax error, runtime issues, code's logical error. Successful
                                communication and providing the user with a concise response are helpful in building a good
                                and fair impression with the user.
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

    @include('frontend.include.contactForm')

@endsection
