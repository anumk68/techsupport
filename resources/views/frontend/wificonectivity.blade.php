@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/wifi_conectiivity_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>wifi-connectivity</h1>
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
                            <img src="assets/img/services/wifi_conect_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Reliable WiFi Connectivity Solutions </h2>
                            <p>To keep WiFi Connectivity uninterrupted in homes, offices and public places, it is important
                                to have relied upon WiFi connections. The ways to perfect network performance, solve trouble
                                connectivity issues and make sure connections are safe are a number of services which can be
                                included in these solutions. When you want someone who will help you to set up fresh WiFi
                                network, enhance the existing one or assist with technical difficulties that you may
                                experience, reliable wifi solutions gives assurance that your network remains stable and
                                efficient.
                            </p>

                            <p>Whether you need door-to-door forwarding services by road, rail, or both, our land shipping
                                solutions will get your shipments from everywhere to anywhere in North America.</p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>802.11a</h5>
                                        <p>Operates on a 5 GHz frequency band, providing fast wireless connections. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>802.11b</h5>
                                        <p>Uses a 2.4 GHz band, offering basic and reliable wireless connectivity. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>802.11g</h5>
                                        <p>Also operates on 2.4 GHz, with faster data transfer rates than 802.11b</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Advanced WiFi Network Solutions</h3>
                            <p>Modern technologies are integrated into advanced WiFi network solutions to improve
                                performance and connectivity. These solutions offer higher speeds more capacity and enhanced
                                dependability by utilizing the most recent standards such as 802. 11ac and 802. 11ax (Wi-Fi
                                6). They have cutting-edge features like seamless roaming for constant network connectivity
                                beamforming for targeted signal transmission and MU-MIMO (Multi-User Multiple Input Multiple
                                Output) for simultaneous data streaming to multiple devices. Strong defense against online
                                threats is ensured by security upgrades like WPA3 encryption.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Wi-Fi Standards</h5>
                                    <ul class="checked-list mt-1">
                                        <li>802.11b</li>
                                        <li>802.11g</li>
                                        <li>802.11n</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Key Technologies </h5>
                                    <ul class="checked-list mt-1">
                                        <li>MIMO (Multiple Input Multiple Output) </li>
                                        <li>MU-MIMO (Multi-User MIMO)</li>
                                        <li>OFDMA (Orthogonal Frequency Division Multiple Access)</li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                                Wi-Fi connectivity support involves assisting users with setting up, maintaining, and
                                troubleshooting their Wi-Fi networks to ensure reliable and efficient internet access.
                            </blockquote>

                            <h4>Professional WiFi Setup and Support
                            </h4>
                            <p>Reliable and effective wireless connectivity catered to your unique requirements is ensured
                                by professional WiFi setup and support services. These services cover every facet of WiFi
                                deployment from initial network design and installation to continuing maintenance and
                                troubleshooting. Experts evaluate your surroundings to reduce interference and maximize
                                signal coverage while utilizing cutting-edge tools and industry best practices. They set up
                                network configurations, routers and access points to ensure smooth operation and security.
                                Monitoring performance, updating firmware and quickly resolving connectivity problems are
                                all part of ongoing support. You can have dependable fast internet access that satisfies
                                contemporary connectivity needs with expert WiFi configuration and support.
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
