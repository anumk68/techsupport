@extends('frontend.include.app')
@section('content')

<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('assets/img/App_devlopment_agency_banner.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-heading text-white about_main_banner">
                    <h1>App Devlopment Agency in USA</h1>
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
                <h2>Expert App Development Services for Your Needs!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-12 mb-4">
                <div class="single-service-top-icon wow fadeInUp">
                    <div class="icon">
                        <img src="assets/img/icons/desktop.png" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="ios-devlopment.php">IOS Development</a></h4>
                        <p>We specialize in designing mobile iOS applications aimed at promoting and expanding our
                            clients' businesses through innovative and
                            tailored solutions. Our team leverages cutting-edge technology and industry best practices
                            to create apps.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-4">
                <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <img src="assets/img/icons/mobile.png" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="android-devlopment.php">Android Devlopment</a></h4>
                        <p>Our specialization in Android development is based on the fact that our primary aim is to
                            create new mobile solutions that may fit our
                            clients’ requirements. We offer to create and implement Android applications that provide an
                            efficient experience to the user as well
                            as improve the performance of the business.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-4">
                <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <img src="assets/img/icons/ux.png" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="java-devlopment.php">Java Mobile App</a></h4>
                        <p>We offer business-oriented Java mobile application development services that ensure our
                            clients get the most efficient application.
                            Thus, we focus on Java’s strength, to develop powerful and reliable mobile applications that
                            meet the end-users’ requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 pt-3">
                <div class="single-service-top-icon wow fadeInUp">
                    <div class="icon">
                        <img src="assets/img/icons/qa.png" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="flutter-app.devlopment.php">Flutter Mobile App</a></h4>
                        <p>Flutter mobile app development services that our company offers rely on Google’s Flutter
                            framework to create fluid, multi-OS applications.
                            This is possible with Flutter since its single codebase enables the development of beautiful
                            and fast applications that can be deployed
                            on Android and iOS.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 pt-3">
                <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <img src="assets/img/icons/stock.png" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="swift-app.php">Swift Mobile App</a></h4>
                        <p>We specialize in providing Swift mobile application development services that target building
                            robust and user-friendly applications for iPhone
                            and iPad devices. With the help of Apple’s Swift programming language, we guarantee your app
                            runs as a smooth, stylish, and high-performing
                            piece of software.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 pt-3">
                <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <img src="assets/img/icons/web.png" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="react-native.php">React Native</a></h4>
                        <p>Our React Native development services can help your company create efficient cross-platform
                            mobile solutions. In this model,
                            we build strong applications for both iOS and Android operating systems, hence making
                            development cheaper and shorter.
                        </p>
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
                    <h2>Improve And Enhance Performance of Tech Projects</h2>
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
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/app_develope_tab1.jpg')">
                    <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Mobile Apps</h3>
                        <p>Design</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item technology web">
                <div class="single-project-card bg-cover"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/app_develope_tab2.jpg')">
                    <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Web Application</h3>
                        <p>Development</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item business technology soft">
                <div class="single-project-card bg-cover"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/app_develope_tab3.jpg')">
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
