@extends('frontend.include.app')
@section('content')

    <div class="page-banner-wrap text-center bg-cover"
        style="background-image: url('assets/img/Digital_marketing_agency_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>Best Digital Marketing Agency in the USA</h1>
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
                    <!-- <span>Our Services</span> -->
                    <h2>Best Digital Marketing Services in the USA</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12 pb-3">
                    <div class="single-service-top-icon wow fadeInUp">
                        <div class="icon">
                            <img src="assets/img/icons/P1.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="seo-services.php">SEO Services</a></h4>
                            <p>Keyword research is one of our primary strategies, as well as on-page and off-page
                                optimization and technical SEO to boost your website’s organic traffic. The strategies we
                                have successfully implemented help rank higher on search engine results, provide visitors
                                with a better experience, convert them, and help your business thrive in the digital world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pb-3">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/icons/P2.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="smo-services.php">SMO Services</a></h4>
                            <p>We write and design content, work with social media profiles, and develop tactics to extend
                                the company’s reach and followers. The goal of our SMO services is to create a community for
                                your brand, increase the flow of traffic to your website, and increase your overall
                                marketing strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="assets/img/icons/P3.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="ppc-services.php">PPC Services</a></h4>
                            <p>We develop campaigns on Google AdWords and other social media, Keyword Optimization,
                                Advertising Copywriting, and Advertising Accounts Reporting. We offer PPC that targets
                                quality traffic, quality leads, and quality conversions to ensure that your business attains
                                its marketing objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp">
                        <div class="icon">
                            <img src="assets/img/icons/P4.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="content-management-services.php">Content Management Services</a></h4>
                            <p>CMS is an effective way of managing your online presence and simplifying your work. We focus
                                on designing and promoting interactive posts for websites, blogs, and social media
                                platforms. Our CMS solutions involve content planning, creation, and optimization for Search
                                Engine Optimization, as well as content updates to ensure that the audience remains
                                interested and informed. Experience the difference between our content management services
                                that will help increase your brand’s exposure and interaction with your audience. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/icons/P5.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="web-devlopment.php">Web Development</a></h4>
                            <p>We have expertise in designing visually appealing, easy-to-navigate websites that can help
                                you improve your online sales. Some of the services that we offer are the design and
                                development of custom websites, and e-commerce solutions. We will ensure that we create an
                                effective online presence for your brand that will be able to meet your objectives and
                                appeal to your target consumers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="assets/img/icons/web.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="web-design.php">Web Design</a></h4>
                            <p>We focus on the development of a good and informative website with attractive graphics and
                                navigation menus to reflect the image of your company and also to attract the attention of
                                the target group of the audience. What is essential is to produce visually appealing and
                                aesthetically pleasing designs and layouts that are not only good for the eyes, but are also
                                functional and properly formatted for most used devices. We evaluate your website from the
                                time you start building it and up to the time it gets all the tools that are required to be
                                a success in the market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-grid-filter-wrapper section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="section-title">
                        <span>Our Completed Projects</span>
                        <h2>Enhance Tech Projects with Our Expert Services </h2>
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
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/digi_market_tab_1.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Mobile Apps</h3>
                            <p>Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid-item technology web">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/digi_market_tab_2.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Web Application</h3>
                            <p>Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid-item business technology soft">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/digi_market_tab_3.jpg')">
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
