@extends('frontend.include.app')
@section('content')
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('public/frontassets/img/abt_back_banner.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-heading text-white about_main_banner">
                    <h1>about us</h1>
                </div>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>

              @include('frontend.include.contact-form')

        </div>
    </div>
</div>

<section class="about-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-12">
                <div class="about-images-video-popup mb-5 mb-md-0">
                    <img src="{{asset('public/frontassets/img/home1/about_group_sec.jpg')}}" alt="">
                    <img src="{{asset('public/frontassets/img/home1/about_team_mem.jpg')}}" alt="">
                    <!-- <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>
                        </div > -->
                </div>
            </div>
            <div class="col-xl-6 col-12 ps-xl-5">
                <div class="section-title">
                    <span>5 Years of Experience</span>
                    <h2>We provide a variety of IT services that guarantee your success.</h2>
                    <p>Quantech is the partner of choice for many of the world’s leading enterprises,
                        SMEs and technology challengers. We help businesses elevate their value through custom software
                        development, product design.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="info-icon-item">
                            <img src="{{asset('public/frontassets/img/icons/experiance.svg')}}" alt="">
                            <h3>User Experience</h3>
                            <p>Our great team of more than 1400 software experts.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="info-icon-item">
                            <img src="{{asset('public/frontassets/img/icons/settings.svg')}}" alt="">
                            <h3>Quick Support</h3>
                            <p>Our great team of more than 1400 software experts.</p>
                        </div>
                    </div>
                </div>
                <a href="{{route('front.about')}}" class="theme-btn mt-30">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="work-process-wrapper section-padding pt-0">
    <div class="container">
        <div class="col-12 text-center">
            <div class="section-title">
                <span>Work Process</span>
                <h2>How We Work</h2>
            </div>
        </div>
        <div class="row align-center">
            <div class="col-12 col-lg-4">
                <div class="single-work-step sp1">
                    <div class="circle-img bg-cover" style="background-image: url('public/frontassets/img/about-img.jpg')">
                        <span>01</span>
                    </div>
                    <div class="content">
                        <h4>Create A Plan</h4>
                        <p>We focus on the best practices for it solutions and services.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-work-step sp2">
                    <div class="circle-img bg-cover" style="background-image: url('public/frontassets/img/sp2.png')">
                        <span>02</span>
                    </div>
                    <div class="content">
                        <h4>Start Working</h4>
                        <p>We focus on the best practices for it solutions and services.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-work-step sp3">
                    <div class="circle-img bg-cover" style="background-image: url('public/frontassets/img/contact-img.jpg')">
                        <span>03</span>
                    </div>
                    <div class="content">
                        <h4>Publish Business</h4>
                        <p>We focus on the best practices for it solutions and services.</p>
                    </div>
                </div>
            </div>
            <div class="work-line">
                <img src="{{asset('public/frontassets/img/work-line.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="best-services-wrapper section-padding pt-0">
    <div class="container">
        <div class="section-title text-center">
            <h2>We are excellent at providing the <br>best answers.</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-12">
                <div class="single-service-left-icon">
                    <div class="icon check ">
                        <img src="{{asset('public/frontassets/img/icons/check-solid.svg')}}" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">IT for Web Management</a></h4>
                        <p>We carry more than just good coding skills. Our experience makes us stand out from other web
                            development.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="single-service-left-icon">
                    <div class="icon check ">
                        <img src="assets/img/icons/check-solid.svg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Services & Product Engineering</a></h4>
                        <p>We carry more than just good coding skills. Our experience makes us stand out from other web
                            development.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="single-service-left-icon">
                    <div class="icon check ">
                        <img src="assets/img/icons/check-solid.svg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">System of Quality Control</a></h4>
                        <p>Build the product you need on time with an experienced team that uses a clear and effective
                            design process.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="single-service-left-icon">
                    <div class="icon check ">
                        <img src="assets/img/icons/check-solid.svg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Technology for Infrastructure Integration</a></h4>
                        <p>Turn to our experts to perform compr ehensive, multi-stage testing and au
                            dicing of your software.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="single-service-left-icon">
                    <div class="icon check ">
                        <img src="assets/img/icons/check-solid.svg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Extremely Skilled Personnel</a></h4>
                        <p>We carry more than just good coding skills. Our experience makes us stand out from other web
                            development.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="single-service-left-icon">
                    <div class="icon check ">
                        <img src="assets/img/icons/check-solid.svg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Management of Information Security</a></h4>
                        <p>Over the past decade, our customers succeeded by leveraging Intellect soft’s process of
                            building, motivating.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="funfact-box-wrapper section-padding bg-cover" style="background-image: url('assets/img/funfact-bg.jpg')">
    <div class="container">
        <div class="row text-center mtm-30 text-white">
            <div class="col-md-6 col-lg-3">
                <div class="single-digit-count">
                    <div class="icon">
                        <img src="assets/img/icons/users.svg" alt="">
                    </div>
                    <div class="digits"><span>100</span>+</div>
                    <p>Team Members</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single-digit-count">
                    <div class="icon">
                        <img src="assets/img/icons/task-complete.svg" alt="">
                    </div>
                    <div class="digits"><span>5</span>K+</div>
                    <p>Completed Project</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single-digit-count">
                    <div class="icon">
                        <img src="assets/img/icons/award.svg" alt="">
                    </div>
                    <div class="digits"><span>70</span>+</div>
                    <p>Winning Awards</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single-digit-count">
                    <div class="icon">
                        <img src="assets/img/icons/star.svg" alt="">
                    </div>
                    <div class="digits"><span>240</span>+</div>
                    <p>Clients Review</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="testimonial-carousel-wrapper section-padding">
    <div class="container">
        <div class="col-12 col-xl-8 offset-xl-2 text-center">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>Here’s What Our Customer Say</h2>
            </div>
        </div>

        <div class="testimonial-carousel-grid-active">
            <div class="single-testimonial-card">
                <div class="client-img bg-cover" style="background-image: url('assets/img/client1.jpg')"></div>
                <div class="content">
                    <p>IT Solutions provides me day to day challenges and variety
                        in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                    <div class="client-rating mt-15">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Nicholas R.Gomez</h4>
                    <span>IT Manager, IT Solutions Ltd.</span>
                </div>
            </div>
            <div class="single-testimonial-card">
                <div class="client-img bg-cover" style="background-image: url('assets/img/client2.jpg')"></div>
                <div class="content">
                    <p>IT Solutions provides me day to day challenges and variety
                        in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                    <div class="client-rating mt-15">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>James R Lawrence</h4>
                    <span>IT Manager, IT Solutions Ltd.</span>
                </div>
            </div>
            <div class="single-testimonial-card">
                <div class="client-img bg-cover" style="background-image: url('assets/img/client1.jpg')"></div>
                <div class="content">
                    <p>IT Solutions provides me day to day challenges and variety
                        in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                    <div class="client-rating mt-15">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Nicholas R.Gomez</h4>
                    <span>IT Manager, IT Solutions Ltd.</span>
                </div>
            </div>
            <div class="single-testimonial-card">
                <div class="client-img bg-cover" style="background-image: url('assets/img/client2.jpg')"></div>
                <div class="content">
                    <p>IT Solutions provides me day to day challenges and variety
                        in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                    <div class="client-rating mt-15">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>James R Lawrence</h4>
                    <span>IT Manager, IT Solutions Ltd.</span>
                </div>
            </div>
        </div>
    </div>
</section>


  @include('frontend.include.footer-contactForm')

@endsection
