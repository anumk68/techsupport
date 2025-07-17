@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/Training_guidance_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Technical Support Professional Training and Certification</h1>
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
                            <img src="assets/img/services/Training_guidance_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Professional Certification for Technical Support Specialists</h2>
                            <p>Certifications provided to professionals engaged in technical support is their credibility
                                and high level of expertise. This clearly defined program focuses on issues such as customer
                                service, IT support, and IT troubleshooting. Acquire the certifications that are approved of
                                by businesses in order to promote your career. The training, which comprises diagnosing an
                                operating error or a faulty component in a hardware device, as well as the installation and
                                use of software, enables you to gain, among other things, certain credentials. By taking our
                                guide courses, you are ensured to have not only the necessary skills but you are also
                                surpassing your limits by efficiently solving any computer problem, which goes to the
                                customer's home, and thus providing more satisfaction.
                            </p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Vendor-Specific Certifications</h5>
                                        <p>Offered by technology companies like Microsoft, Cisco, or Apple, focusing on
                                            their products and services.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>CompTIA Certifications</h5>
                                        <p>Industry-standard certifications such as A+, Network+, and Security+ covering
                                            foundational IT skills.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>ITIL Certification</h5>
                                        <p>Focuses on IT Service Management best practices and processes, including
                                            technical support methodologies.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h3>Comprehensive Training for Technical Support Professionals </h3>
                            <p>Get access to a variety of high-end and high-quality online courses to educate your technical
                                support team in how to function in IT environments. It touches on troubleshooting methods,
                                system maintenance, and customer service. Show the art of problem-solving through your
                                ability to take up all problematic and related to the system and that is a good way to
                                improve the customer's mood. Learn the practices of repairing various system modules,
                                network, and hardware, and all other procedures to make the system run more efficiently.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Technology</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Virtual Labs
                                        </li>
                                        <li>E-Learning Platform
                                        </li>
                                        <li>Simulation Software</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Services offered</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Vendor-Specific Certifications</li>
                                        <li>CompTIA Certifications
                                        </li>
                                        <li>ITIL Certification
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                                Advance your career with technical support training and certification. Gain expertise in
                                troubleshooting, customer service, and IT skills for professional success.

                            </blockquote>

                            <h4>Technology Used in Training and Guidance</h4>
                            <p>The use of technology makes the training and guidance process much simpler, one of them is
                                the virtual labs for hands-on experience, E.learning platforms for flexible education,
                                remote access tools for virtual sessions, and simulation software for the practical training
                                scenario. These technologies are dealing with the fact that learning is the most effective
                                when students are directly involved and these actually are the instruments teachers use to
                                interact with a student which in turn is a part of preparing IT support professionals for
                                varying technical challenges in the professional world.
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
