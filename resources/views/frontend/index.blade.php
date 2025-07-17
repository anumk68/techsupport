@extends('frontend.include.app')
@section('content')
    <section class="home-services">
        <div class="services-container">
            <div class="services-left">
                <h1>Home services at your doorstep</h1>
                <div class="service-box">
                    <h3>What are you looking for?</h3>
                    <div class="service-grid" id="openPopup">
                        @foreach ($category as $categories)
                            <div class="service-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                data-category-id="{{ $categories->id }}">
                                <img src="{{ asset('storage/app/public/' . $categories->image) }}" alt="Service 1">
                                <span>{{ $categories->category_name }}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="services-right">
                <img src="{{ asset('public/frontassets/img/gallery_banner_1.jpg') }}" alt="Service 1">
                <img src="{{ asset('public/frontassets/img/gallery_banner_2.jpg') }}" alt="Service 2">
                <img src="{{ asset('public/frontassets/img/gallery_banner_3.jpg') }}" alt="Service 3">
                <img src="{{ asset('public/frontassets/img/gallery_banner_4.jpg') }}" alt="Service 4">
            </div>
        </div>
    </section>
    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Most booked services </h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active text-white">
                <div class="service-card">
                    <img src="public/frontassets/img/slide_new_1.jpg" alt="Printer Image" class="product-img">
                    <h3 class="title">Printers</h3>
                    <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i> 4.7</span>
                    </p>

                    <div class="btn-group">
                        <button class="fast-btn">Fast Service</button>
                        <button class="view-btn">View Details</button>
                    </div>

                    <button class="book-btn">Fix Now</button>
                </div>
                <div class="service-card">
                    <img src="public/frontassets/img/slide_new_1.jpg" alt="Printer Image" class="product-img">
                    <h3 class="title">Printers</h3>
                    <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i> 4.7</span>
                    </p>

                    <div class="btn-group">
                        <button class="fast-btn">Fast Service</button>
                        <button class="view-btn">View Details</button>
                    </div>

                    <button class="book-btn">Fix Now</button>
                </div>
                <div class="service-card">
                    <img src="public/frontassets/img/slide_new_1.jpg" alt="Printer Image" class="product-img">
                    <h3 class="title">Printers</h3>
                    <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i> 4.7</span>
                    </p>

                    <div class="btn-group">
                        <button class="fast-btn">Fast Service</button>
                        <button class="view-btn">View Details</button>
                    </div>

                    <button class="book-btn">Fix Now</button>
                </div>
                <div class="service-card">
                    <img src="public/frontassets/img/slide_new_1.jpg" alt="Printer Image" class="product-img">
                    <h3 class="title">Printers</h3>
                    <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i> 4.7</span>
                    </p>

                    <div class="btn-group">
                        <button class="fast-btn">Fast Service</button>
                        <button class="view-btn">View Details</button>
                    </div>

                    <button class="book-btn">Fix Now</button>
                </div>
                <div class="service-card">
                    <img src="public/frontassets/img/slide_new_1.jpg" alt="Printer Image" class="product-img">
                    <h3 class="title">Printers</h3>
                    <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i> 4.7</span>
                    </p>

                    <div class="btn-group">
                        <button class="fast-btn">Fast Service</button>
                        <button class="view-btn">View Details</button>
                    </div>

                    <button class="book-btn">Fix Now</button>
                </div>
                <div class="service-card">
                    <img src="public/frontassets/img/slide_new_1.jpg" alt="Printer Image" class="product-img">
                    <h3 class="title">Printers</h3>
                    <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                            4.7</span>
                    </p>

                    <div class="btn-group">
                        <button class="fast-btn">Fast Service</button>
                        <button class="view-btn">View Details</button>
                    </div>

                    <button class="book-btn">Fix Now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Laptop</h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev-laptop me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next-laptop aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active-laptop text-white">
                @foreach ($laptopServices as $laptop)
                    <div class="service-card">
                        <img src="{{ asset('public/storage/' . $laptop->banner_image) }}" alt="Printer Image"
                            class="product-img">
                        <h3 class="title">{{ $laptop->title }}</h3>
                        <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                                4.7</span></p>

                        <div class="btn-group">
                            <button class="fast-btn">Fast Service</button>
                            <a href="{{ url('service', $laptop->slug) }}">
                                <button class="view-btn">View Details</button>
                            </a>
                        </div>

                        <button class="book-btn">Fix Now</button>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Scanner</h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev-scanner me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next-scanner aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active-scanner text-white">
                @foreach ($scannerServices as $scanner)
                    <div class="service-card">
                        <img src="{{ asset('public/storage/' . $scanner->banner_image) }}" alt="Printer Image"
                            class="product-img">
                        <h3 class="title">{{ $scanner->title }}</h3>
                        <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                                4.7</span></p>

                        <div class="btn-group">
                            <button class="fast-btn">Fast Service</button>
                            <a href="{{ url('service', $scanner->slug) }}">
                                <button class="view-btn">View Details</button>
                            </a>
                        </div>

                        <button class="book-btn">Fix Now</button>
                    </div>
                @endforeach
                {{-- <h5>Scanner Services Not Available</h5> --}}

            </div>
        </div>
    </section>

    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Router</h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev-router me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next-router aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active-router text-white">
                @foreach ($routerServices as $router)
                    <div class="service-card">
                        <img src="{{ asset('public/storage/' . $router->banner_image) }}" alt="Printer Image"
                            class="product-img">
                        <h3 class="title">{{ $router->title }}</h3>
                        <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                                4.7</span></p>

                        <div class="btn-group">
                            <button class="fast-btn">Fast Service</button>
                            <a href="{{ url('service', $router->slug) }}">
                                <button class="view-btn">View Details</button>
                            </a>
                        </div>

                        <button class="book-btn">Fix Now</button>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Tablet</h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev-tablet me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next-tablet aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active-tablet text-white">
                @foreach ($tabletServices as $tablet)
                    <div class="service-card">
                        <img src="{{ asset('public/storage/' . $tablet->banner_image) }}" alt="Printer Image"
                            class="product-img">
                        <h3 class="title">{{ $tablet->title }}</h3>
                        <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                                4.7</span></p>

                        <div class="btn-group">
                            <button class="fast-btn">Fast Service</button>
                            <a href="{{ url('service', $tablet->slug) }}">
                                <button class="view-btn">View Details</button>
                            </a>
                        </div>

                        <button class="book-btn">Fix Now</button>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Apple Devices</h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev-laptop me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next-laptop aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active-laptop text-white">
                @foreach ($appleServices as $apple)
                    <div class="service-card">
                        <img src="{{ asset('public/storage/' . $apple->banner_image) }}" alt="Printer Image"
                            class="product-img">
                        <h3 class="title">{{ $apple->title }}</h3>
                        <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                                4.7</span></p>

                        <div class="btn-group">
                            <button class="fast-btn">Fast Service</button>
                            <a href="{{ url('service', $apple->slug) }}">
                                <button class="view-btn">View Details</button>
                            </a>
                        </div>

                        <button class="book-btn">Fix Now</button>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <h2>Printer </h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev-laptop me-2 aa"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next-laptop aa"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active-laptop text-white">
                @foreach ($printerServices as $printer)
                    <div class="service-card">
                        <img src="{{ asset('public/storage/' . $printer->banner_image) }}" alt="Printer Image"
                            class="product-img">
                        <h3 class="title">{{ $printer->title }}</h3>
                        <p class="subtitle">Repair & Support <span class="ratings_brands"><i class="fas fa-star"></i>
                                4.7</span></p>

                        <div class="btn-group">
                            <button class="fast-btn">Fast Service</button>
                            <a href="{{ url('service', $printer->slug) }}">
                                <button class="view-btn">View Details</button>
                            </a>
                        </div>

                        <button class="book-btn">Fix Now</button>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    @include('frontend.include.footer-contactForm')


    <!-- Modal brands-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Brands</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="popup_issues" class="popup-overlay">
                        <div class="popup-content">
                            <div class="issues-grid">
                                <ul class="brand-list d-flex flex-wrap list-unstyled gap-3">
                                    @foreach ($allbrands as $brands)
                                        <li class="brand-item" style="width: 23%;"
                                            data-category-id="{{ $brands->category_id }}"
                                            data-brand-id="{{ $brands->id }}">
                                            <div class="issue-card-brand-items" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrops">
                                                <div class="img_under_popup">
                                                    <img src="{{ asset('storage/app/public/' . $brands->image) }}"
                                                        alt="Brand Image" class="img-fluid">
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div id="no-brands-message" style="display: none;">
                                    <p>No brands available for this category.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal issues-->
    <div class="modal fade" id="staticBackdrops" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropsLabel">Select Issues</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="popup_issues" class="popup-overlay">
                        <div class="popup-content">
                            <div class="issues-grid">
                                <ul class="d-flex flex-wrap list-unstyled gap-3" style="padding-left: 0;">
                                    @foreach ($allissues as $issue)
                                        <li class="brand-issue-item" style="width: 23%; display: none;"
                                            data-brand-id="{{ $issue->brand_id }}">
                                            <div class="issue-card" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdropsform"
                                                data-issue-id="{{ $issue->id }}">
                                                <div class="img_under_popup">
                                                    <img src="{{ asset('storage/app/public/' . $issue->icon) }}"
                                                        alt="Issue Image" class="img-fluid">
                                                </div>
                                                <span>{{ $issue->issue_name }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div id="no-issue-message" style="display: none;">
                                    <p>No issue available for this brand.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal issues form-->
    {{-- <div class="modal fade form_model_diaogs" id="staticBackdropsform" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropsformLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropsformLabel">Repair Services Request Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                 <div class="d-flex items-center">
                 <div>
                 <img src="public/assets/images/connect.jpg"/>
                 </div>
                  <div class="form_popup">
                        <div class="popup-content">

                            <div class="form_main_popup_model">
                                <div class="form-container">
                                    <form action="{{ route('issueFormSubmit') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="brand_id" id="formBrandId">
                                        <input type="hidden" name="issue_id" id="formIssueId">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="brand_select">Brand</label>
                                                    <select name="brand_id" id="brand_select" class="form-control"
                                                        required>
                                                        <option value="">Select a brand</option>
                                                        @foreach ($allbrands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Model </label>
                                                    <input type="text" name="model_name" id="name"
                                                        placeholder="Enter your Model" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Enter your Your name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" name="email" id="email"
                                                        placeholder="Enter your email id" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Phone No</label>
                                            <input type="no" name="phone" id="subject"
                                                placeholder="Enter your Phone No" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Describe the Issue</label>
                                            <textarea id="message" name="description" rows="3" placeholder="What's the problem with your laptop?"
                                                required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

                </div>

            </div>
        </div>
    </div> --}}



<!-- Modal issues form -->
<div class="modal fade form_model_diaogs" id="staticBackdropsform" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropsformLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content model-content-form">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropsformLabel">Repair Services Request Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Left Side: Image - hidden on small screens -->
                    <div class="col-md-6 d-none d-lg-flex align-items-center justify-content-center">
                        <img src="public/assets/images/connect.jpg" alt="Repair Service" class="img-fluid modal-image" />
                    </div>

                    <!-- Right Side: Form -->
                    <div class="col-12 col-lg-6 form_popup">
                        <div class="popup-content">
                            <div class="form_main_popup_model">
                                <div class="form-container">
                                    <form action="{{ route('issueFormSubmit') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="brand_id" id="formBrandId">
                                        <input type="hidden" name="issue_id" id="formIssueId">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="brand_select">Brand</label>
                                                    <select name="brand_id" id="brand_select" class="form-control" required>
                                                        <option value="">Select a brand</option>
                                                        @foreach ($allbrands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="model_name">Model</label>
                                                    <input type="text" name="model_name" id="model_name" class="form-control"
                                                        placeholder="Enter your Model" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="user_name">Your Name</label>
                                                    <input type="text" name="name" id="user_name" class="form-control"
                                                        placeholder="Enter your name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        placeholder="Enter your email id" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone No</label>
                                                    <input type="tel" name="phone" id="phone" class="form-control"
                                                        placeholder="Enter your Phone No" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="message">Describe the Issue</label>
                                                    <textarea id="message" name="description" rows="3" class="form-control "
                                                        placeholder="What's the problem with your laptop?" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </div>
</div>





    <!-- Modal issues form submit-->
    <div class="modal fade main_spac" id="staticBackdropssubmit" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropssubmitLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropssubmitLabel">Submission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="submission">
                        <div class="container">
                            <div class="card">
                                <h2>Repair Service Request Form</h2>

                                <div class="success-box">
                                    <div class="check-icon">✔</div>
                                    <h3>Submission Successful!</h3>
                                    <p>Our support person will contact you within 10-15 minutes to help resolve the issue.
                                    </p>
                                </div>

                                <div class="help-box">
                                    <h4>Need Help?</h4>
                                    <p>Choose a support option:</p>
                                    <div class="support-buttons">
                                        <button class="chat"><span>💬</span> Chat Support</button>
                                        <button class="call"><span>📞</span> Call Support</button>
                                    </div>
                                </div>

                                <button class="back-btn"><a href="{{ route('front.index') }}">Go Back</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryItems = document.querySelectorAll('.service-item');
            const brandItems = document.querySelectorAll('.brand-item');
            const noBrandsMsg = document.getElementById('no-brands-message');

            categoryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedCategoryId = this.getAttribute('data-category-id');
                    let matchFound = false;

                    brandItems.forEach(brand => {
                        brand.style.display = 'none';
                    });

                    brandItems.forEach(brand => {
                        if (brand.getAttribute('data-category-id') === selectedCategoryId) {
                            brand.style.display = 'block';
                            matchFound = true;
                        }
                    });

                    if (noBrandsMsg) {
                        noBrandsMsg.style.display = matchFound ? 'none' : 'block';
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const brandItems = document.querySelectorAll('.brand-item');
            const issueItems = document.querySelectorAll('.brand-issue-item');
            const noIssuesMsg = document.getElementById('no-issue-message');

            brandItems.forEach(brand => {
                brand.addEventListener('click', function() {
                    const brandId = this.getAttribute('data-brand-id');
                    let matchFound = false;

                    issueItems.forEach(issue => {
                        issue.style.display = 'none';
                    });
                    issueItems.forEach(issue => {
                        if (issue.getAttribute('data-brand-id') === brandId) {
                            issue.style.display = 'inline-block';
                            matchFound = true;
                        }
                    });

                    if (noIssuesMsg) {
                        noIssuesMsg.style.display = matchFound ? 'none' : 'block';
                    }
                });
            });
        });
    </script>
@endsection
