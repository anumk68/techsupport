@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/web_develope_servi_bann.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>web development services in the USA
                        </h1>
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
                            <img src="assets/img/services/web_develope_servi.jpg" alt="">
                        </div>
                        <div class="contents">
                            <h2>Top-tier Web Development Services in the USA
                            </h2>
                            <p>We offer our best website development services in the USA so that you can get the right type
                                of solution for your business. Everything we do is focused on delivering websites crafted
                                specifically for your business, with emphasis on Responsiveness, User Experience, and SEO.
                                From brand-new website development to the complete overall of your website, whether your
                                website is an online store or a business site, we get all the work done efficiently and
                                smoothly with features like responsive design for mobiles, and ongoing support.
                                Web development services consist of a vast number of tasks aimed at the development of
                                websites and their maintenance. These services are crucial if an organization is to achieve
                                its objectives of creating an effective online brand and ensuring excellent client
                                relations.
                            </p>

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Custom Web Development</h5>
                                        <p>Tailored solutions to meet specific business needs, from simple websites to
                                            complex web applications.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>E-commerce Development</h5>
                                        <p>Creating online stores that enable businesses to sell products or services
                                            online.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Website Maintenance and Support</h5>
                                        <p>Providing ongoing updates, security patches, and technical support to keep
                                            websites running smoothly.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h3>About Web Development Services
                            </h3>
                            <p>Web development services encompass a diverse range of tasks and expertise aimed at creating,
                                maintaining, and optimizing websites to meet specific business goals and user needs. These
                                services are essential for businesses and organizations looking to establish a strong online
                                presence and effectively engage with their target audience.</p>


                            <!-- <blockquote>
                                            Web designing in a powerful way of just not an only professions, however, in a passion for our Company. <br>
                                            - Asheq Salman
                                        </blockquote> -->

                            <h4>Professional Web Development Services </h4>
                            <p>Professional web development services are crucial for businesses looking to leverage digital
                                channels effectively, enhance customer engagement, and achieve sustainable growth in today’s
                                competitive market landscape. By partnering with experienced web developers, businesses can
                                ensure their websites are technologically advanced, user-friendly, and aligned with
                                strategic business objectives.
                            </p>

                            <div class="service-contact-form">
                                <div class="contact-form">
                                    <h2>Contact us</h2>

                                     <form method="POST" class="row ajax-contact-form" data-route="{{ route('form.submit') }}">
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="fname" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="email" id="email" placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="phone" placeholder="Enter Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="subject" placeholder="Enter Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="single-personal-info">
                                                <textarea id="message" placeholder="Enter message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <input class="submit-btn" type="submit" value="Get A Quote">
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                                <h3>Services Category</h3>
                            </div>
                            <div class="services-category-link">

                                <a href="seo-services.php">SEO Service</a>
                                <a href="ppc-services.php">PPC Services</a>
                                <a href="content-management-services.php">Content Management Services</a>
                                <a href="web-design.php">Web Design</a>
                                <a href="smo-services.php">SMO Services</a>

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
