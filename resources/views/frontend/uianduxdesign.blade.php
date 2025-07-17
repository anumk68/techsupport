@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/UIUX_design_banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>UI/UX Design Services in the USA</h1>
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
                    <span>Comprehensive UI/UX Design Services</span>
                    <h2>Transform your brand with premium UI/UX design.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12 mb-4">
                    <div class="single-service-top-icon wow fadeInUp">
                        <div class="icon">
                            <img src="assets/img/first_one.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="Strategy.php">Strategy</a></h4>
                            <p>Creating effective UI/UX design solutions for enhancing users’ engagement and satisfaction on
                                web resources. This approach involves user study, development of mock-up interfaces, and
                                successive validation to deliver simple and compelling user experiences that advance your
                                business objectives efficiently</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-4">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/first_two.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="scope.php">scope</a></h4>
                            <p>All the design services within the UI/UX include the identification of users and their
                                perceived needs up to the designing of the prototype which is followed by the testing of the
                                prototype. They are versatile based on the project that we are working on and aim at
                                providing meaningful and entertaining content to your target demographic. We, being the best
                                SEO company, will help you alter your brand and enhance user satisfaction. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="assets/img/first_three.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="structure.php">structure</a></h4>
                            <p>Structure of the UI/UX design process that we follow, which includes research, prototyping,
                                and testing. We adjust every process with a focus on the user's needs and the formation of a
                                consistent persona that will fit your objectives. This process ensures the chaining of all
                                the operations and the constant actions, which will be appealing to the user and beneficial
                                for the business. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp">
                        <div class="icon">
                            <img src="assets/img/first_four.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="skeleton.php">skeleton</a></h4>
                            <p>The process of building the overall structure that comprises UI/UX includes the basics like
                                wireframing and prototyping that help in developing user journeys and interactions. It helps
                                in following a proper methodology to create easy-to-use interfaces that would be easy to
                                navigate and interact with. Our team follows the user-oriented approach to establish smooth
                                digital solutions in line with your business objectives and engage your targeted audience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 pt-3">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/first_five.png" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="surface.php">surface</a></h4>
                            <p>UI/UX surface design is more about improving specific aspects of color and graphic design of
                                the interfaces. This encompasses using specific colors, fonts, and other interactive
                                features that are preferred by the brand’s target market and the brand itself. This is
                                because when developing interfaces, we focus on usability and appeal which leads to
                                designing interfaces that captivate the audience. </p>
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
                        <h2>Effective Methods to Improve Your Tech Projects</h2>
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
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/uiux_tab1.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Mobile Apps</h3>
                            <p>Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid-item technology web">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/uiux_tab2.jpg')">
                        <a href="project-details.php" class="plus-link"><i class="fal fa-plus"></i></a>
                        <div class="content">
                            <h3>Web Application</h3>
                            <p>Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid-item business technology soft">
                    <div class="single-project-card bg-cover"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('assets/img/project/uiux_tab3.jpg')">
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
