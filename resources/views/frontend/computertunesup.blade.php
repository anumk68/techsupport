@extends('frontend.include.app')
@section('content')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/Computer_Tune_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Computer Tune-Up Service</h1>
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
                            <img src="assets/img/services/Computer_Tune_services.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Boost Efficiency: Computer Tune-Up Solutions</h2>
                            <p>B͏oos͏t your computer͏'s effectiveness using our thorough tuning services. Our ski͏lled
                                technician enhance system performance by ͏clearing ͏out ͏unwanted files, updating͏ software,
                                and e͏liminating͏ malware. We͏ guarantee smooth operation of you͏r͏ computer͏ e͏nhanci͏ng
                                speed and depen͏dability for effort͏less daily use. Whether you're facing slu͏ggis͏hness,
                                crashes or simply aim͏i͏ng ͏to͏ optimize ͏per͏forman͏ce our ͏service are customized ͏to suit
                                your req͏uirement. Count on ͏us to enrich your compu͏ting experience with a d͏ependable
                                solution that ͏maintain pe͏ak syste͏m performance.</p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Software Updates</h5>
                                        <p>Ensuring operating systems and applications are up to date.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Disk Cleanup</h5>
                                        <p>Removing temporary and unnecessary files to free up disk space.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Malware Removal</h5>
                                        <p>Scanning and removing viruses, spyware, and other malicious software.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Efficient PC Tune-Up Solutions</h3>
                            <p>Our comprehensive services include thorough system diagnostics, software updates, malware
                                removal, and disk cleanup. We ensure your PC operates smoothly and efficiently, boosting
                                productivity and extending its lifespan. Whether you're experiencing slow startup times or
                                system errors, our expert technicians tailor solutions to meet your needs. Trust us to
                                deliver reliable, proactive maintenance that keeps your PC running at its best, ensuring you
                                get the most out of your technology investment.</p>

                            <div class="row mt-4">
                                <div class="col-md-6 col-md-4">
                                    <h5>Types</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Hardware Diagnostics</li>
                                        <li>Registry Cleanup</li>
                                        <li>Malware Removal</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-md-4">
                                    <h5>Technologies</h5>
                                    <ul class="checked-list mt-1">
                                        <li>System Optimization Software</li>
                                        <li>Automated Maintenance Scripts</li>
                                        <li>Hardware Maintenance Tools</li>
                                    </ul>
                                </div>
                            </div>


                            <h4>Complete Computer Tune-Up Service</h4>
                            <p>Our complete computer tune-up service is designed to refresh and optimize your system for
                                peak performance. We meticulously clean up disk space, update software for security and
                                efficiency, and remove malware to ensure a smooth operation. Our thorough diagnostics
                                address system errors and improve startup speeds, enhancing overall reliability. Whether
                                it's enhancing speed or improving system stability, our expert technicians deliver tailored
                                solutions to meet your needs.</p>

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
