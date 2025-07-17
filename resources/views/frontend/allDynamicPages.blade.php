@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-heading text-white about_main_banner">
                        <h1>{{ $data->banner_content }}</h1>
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
                            <img src="assets/img/services/b1.jpg" alt="">
                        </div>
                        <div class="contents">
                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-cogs"></i>
                                        </div>
                                        <h5>Automatic and Manual Cleanups</h5>
                                        <p>We utilize scripts and tools to scan your website for malware rapidly. Your
                                            website will be checked by our analysts manually as well. Our incident response
                                            team can handle any hack.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-scanner-touchscreen"></i>
                                        </div>
                                        <h5>Fast Response Times</h5>
                                        <p>If you require an immediate reply, we have got you covered. You can select a
                                            subscription that suits you. Talk to us regarding our one-time priority tidy up
                                            service.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="fal fa-bolt"></i>
                                        </div>
                                        <h5>Experienced Security Analysts</h5>
                                        <p>Our dedicated researchers keep an eye on active campaigns of malwares. We strive
                                            to offer the best service of eliminating malwares with a team of skilled
                                            analysts.</p>
                                    </div>
                                </div>
                            </div>
                            {!! $data->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12 mt-5 mt-xl-0">
                    <div class="service-sidebar-wrapper">
                        <div class="single-sidebar-widgets">
                            <div class="wid-title">
                                <h3>Services Category</h3>
                            </div>
                            <div class="services-category-link overflow-auto" style="max-height: 400px;">
                                @foreach ($category as $item)
                                    @if ($item->id != $data->id)
                                        <a href="{{ url('service', $item->slug) }}"
                                            class="d-block mb-1">{{ $item->title }}</a>
                                    @endif
                                @endforeach
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
                                <a href="{{route('front.contact')}}" class="theme-btn mt-20">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.include.footer-contactForm')
@endsection
