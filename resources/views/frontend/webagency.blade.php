@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/Web_agency_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Top Web Development Agency in the USA</h1>
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


    <section class="best-services-wrapper section-padding bg-cover"
        style="background-image: url('assets/img/services-bg.jpg')">
        <div class="container">
            <div class="col-12 col-xl-6 offset-xl-3 col-md-8 offset-md-2 text-center">
                <div class="section-title">
                    <span>Our Services</span>
                    <h2>Professional Web Development Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12 mb-4">
                    <div class="single-service-top-icon wow fadeInUp">
                        <div class="icon">
                            <img src="assets/img/agency_1.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="landing-page.php">Landing page</a></h4>
                            <p>We have a team of very experienced developers who can provide you with any web solution you
                                need. We offer great design and the best solutions for a modern website that will attract
                                your audience’s attention. New company or old, our designs are always ready to fit all your
                                screens and look great on any form of device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-4">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="assets/img/agency_3.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="website-content.php">Website content</a></h4>
                            <p>Our team consists of professionals, who focus on content creation that will engage and appeal
                                to your target audience and achieve your specific goals. Even the simple text on our
                                homepage, the descriptions of our products, or blog entries are written to create the best
                                possible user experience and to move the visitor to make a desired action. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp">
                        <div class="icon">
                            <img src="assets/img/agency_4.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="footers.php">Footer</a></h4>
                            <p>We focus on the functionality and design of the footers. Our template footers contain basic
                                information about the website, navigation links, and social network widgets. When designing
                                your website’s footer, we maintain consistency, improve usability, and establish trust with
                                the website visitors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/agency_5.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="headers.php">Header</a></h4>
                            <p>We specialize in designing engaging headers that create the desired effect and make your
                                website stand out. We design easy-to-understand navigation menus, strong branding messages,
                                and eye-catching images to ensure the first glimpse is impressive. Let us help you design a
                                header that represents your company and is easy to navigate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="assets/img/agency_6.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="cta.php">CTA</a></h4>
                            <p>Our focus is to provide you with the best CTAs that will get your users’ attention through
                                the use of words and design, as well as placement to ensure that you get the results you
                                need for your business.We are here to assist you in reaching your goals by providing you
                                with effective CTAs for your website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-grid-filter-wrapper section-padding ">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="section-title">
                        <span>Our Completed Projects</span>
                        <h2>Strategies to Enhance Quality, and Performance in Tech Projects</h2>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end text-center">
                    <div class="case-cat-filter">
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".web" class="">Web Design</button>
                        <button data-filter=".technology">Technology</button>
                        <button data-filter=".soft">Software</button>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xl-4 col-md-6 grid-item web soft">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/web_agecy_tab1.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Mobile Apps</h3>
                            <p>Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid-item technology web">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/web_agecy_tab2.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Web Application</h3>
                            <p>Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid-item business technology soft">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/web_agecy_tab3.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Online Games</h3>
                            <p>Game</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.include.footer-contactForm')

@endsection
