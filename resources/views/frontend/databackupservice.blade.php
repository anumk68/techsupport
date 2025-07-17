@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/data_backup_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Modern Data Backup Solutions</h1>
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
                            <img src="assets/img/services/data_backup_service.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Simplify Your Data Backup Strategy with Modern Solutions</h2>
                            <p>Simplify your backup plan for data by utilizing contemporary dependable and efficient
                                solutions. With features like automated backups, cloud storage integration and advanced
                                encryption for increased security these solutions simplify the process of safeguarding your
                                priceless data. Using contemporary backup solutions gives you peace of mind knowing that
                                your data is secure and easily accessible whenever you need it regardless of the size of
                                your company. To properly protect your important data and streamline your workflow learn
                                about the most recent advancements in data backup.
                            </p>
                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Cloud Backup Services</h5>
                                        <p>Store data securely in remote servers accessible via the internet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>On-Premises Backup</h5>
                                        <p>Data backups stored locally within an organization's physical infrastructure.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Hybrid Backup Solutions</h5>
                                        <p>Combine both cloud and on-premises backup for flexibility and redundancy.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h3>Secure and Efficient Data Backup Solutions</h3>
                            <p>Your important data is safe and easily accessible with our effective and secure data backup
                                solutions. To protect data from loss corruption or unauthorized access these solutions make
                                use of sophisticated encryption automated procedures and dependable storage infrastructure.
                                Businesses gain from simplified backup techniques that support business continuity whether
                                they use on-premises solutions for control and compliance or cloud-based services for
                                scalability and off-site redundancy. In an increasingly digital world putting these
                                cutting-edge solutions into practice reduces risks and guarantees data integrity giving
                                people peace of mind
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-4">
                                    <h5>Technology</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Encryption </li>
                                        <li>Compression</li>
                                        <li>Automation </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <h5>Services offered</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Database Backup</li>
                                        <li>Server Backup</li>
                                        <li>Cloud Backup
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                                Secure and reliable data backup services ensuring data protection and continuity through
                                advanced technologies and solutions.
                            </blockquote>

                            <h4>Cloud-Based Data Backup Services</h4>
                            <p>Securing and safeguarding important data can be done securely and scalable with the help of
                                cloud-based data backup services. These services guarantee data redundancy and accessibility
                                by using distant servers that can be accessed online. Flexible storage options accommodate
                                different organizational needs while automated processes and advanced encryption improve
                                security and efficiency. Businesses are able to concentrate on growth without having to
                                worry about data loss or system failures thanks to cloud-based backups.
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
