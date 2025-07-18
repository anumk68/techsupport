<div class="container-fluid top-bar-wrapper d-none d-sm-block">
    <div class="d-flex justify-content-between align-items-center ms-5 me-5">
        <div class="top-left">
            <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>987-098-098</a>
            <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>987-098-098</a>
            <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>987-098-098</a>

            {{-- <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>info@example.com</a>
            <a href="#"><i class="fal fa-map-marker-alt"></i>Cargo Hub, LD 32614, UK</a> --}}
        </div>

        <div class="d-flex justify-content-between align-items-center gap-5">
<div class="top-right d-none d-md-block d-flex align-items-center">
            <div class="social-pages">
                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a>
            </div>
        </div>

         <div class="support-button">
        <a href="{{ route('front.contact') }}" class="align-text-end"> Get Support</a>
    </div>
        </div>


    </div>
</div>


<header class="header-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-2 col-sm-5 col-md-4 col-6 pr-lg-5">
                <div class="logo">
                    <a href="{{ route('front.index') }}">
                        <img src="{{ asset('public/frontassets/img/tech_support_logo.png') }}" alt="quantech">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 p-lg-0 d-none d-lg-block">
                <div class="menu-wrap">
                    <div class="main-menu d-flex align-items-center justify-content-between flex-wrap gap-4">
                        <ul class="d-flex align-items-center flex-wrap gap-4 m-0 p-0 list-unstyled">
                            @php
                                $laptopheader = App\Models\HeaderMenu::where('navbar', 'Laptop')->get();
                                $printerHeader = App\Models\HeaderMenu::where('navbar', 'Printer')->get();
                                $scannerHeader = App\Models\HeaderMenu::where('navbar', 'Scanner')->get();
                                $tabletHeader = App\Models\HeaderMenu::where('navbar', 'Tablet')->get();
                                $appleHeader = App\Models\HeaderMenu::where('navbar', 'Apple Devices')->get();
                                $routerHeader = App\Models\HeaderMenu::where('navbar', 'Router')->get();
                            @endphp

                            <!-- Your existing menu items -->
                            <li><img src="{{ asset('public/frontassets/img/laptop.png') }}" alt="quantech">
                                <a href="#"> Laptop Issues <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu fd">
                                    @foreach ($laptopheader->chunk(4) as $chunk)
                                        <div class="sub-menu">
                                            @foreach ($chunk as $item)
                                                <li>
                                                    <a href="{{ url('service', $item->slug) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </ul>
                            </li>

                            <!-- Printer -->
                            <li><img src="{{ asset('public/frontassets/img/printer.png') }}" alt="quantech">
                                <a href="#">Printer Issues<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach ($printerHeader as $printerHeaders)
                                        <li><a
                                                href="{{ url('service', $printerHeaders->slug) }}">{{ $printerHeaders->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <!-- Scanner -->
                            <li><img src="{{ asset('public/frontassets/img/scanner.png') }}" alt="quantech">
                                <a href="#">Scanner Issues<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach ($scannerHeader as $scanner)
                                        <li><a href="{{ url('service', $scanner->slug) }}">{{ $scanner->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <!-- Router -->
                            <li><img src="{{ asset('public/frontassets/img/router.png') }}" alt="quantech">
                                <a href="#">Router Issues<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach ($printerHeader as $printerHeaders)
                                        <li><a
                                                href="{{ url('service', $printerHeaders->slug) }}">{{ $printerHeaders->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <!-- Tablet -->
                            <li><img src="{{ asset('public/frontassets/img/tablet.png') }}" alt="quantech">
                                <a href="#">Tablet Issues<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach ($tabletHeader as $tablet)
                                        <li><a href="{{ url('service', $tablet->slug) }}">{{ $tablet->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <!-- Apple -->
                            <li><img src="{{ asset('public/frontassets/img/apple-devices.png') }}" alt="quantech">
                                <a href="#">Apple Devices Issues<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach ($appleHeader as $apple)
                                        <li><a href="{{ url('service', $apple->slug) }}">{{ $apple->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                           {{-- <li>
                             <!-- Button beside the menu -->
                            <a href="{{ route('front.contact') }}"
                                class="btn btn-primary">
                                <i class="fas fa-headset"></i> Get Support
                            </a>
                           </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
            <div class="mobile-nav-wrap">
                <div id="hamburger"><i class="fal fa-bars"></i></div>
                <!-- mobile menu - responsive menu  -->
                <div class="mobile-nav">
                    <button type="button" class="close-nav">
                        <i class="fal fa-times-circle"></i>
                    </button>
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="mobile-menu">
                            <li><a class="has-arrow" href="{{ route('front.index') }}">Home Support</a>
                            </li>
                            <li><a href="{{ route('front.about') }}">about</a></li>
                            <li><a href="#"> Tech Services <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">

                                    <li><a href="{{ route('front.virusAndMalware') }}">Virus & Malware Removal</a>
                                    </li>
                                    <li><a href="{{ route('front.computerTunes') }}">Computer Tune-Ups</a></li>
                                    <li><a href="{{ route('front.homeNetworking') }}">Home Networking</a></li>
                                    <li><a href="{{ route('front.emailService') }}">Email Services</a></li>
                                    <li><a href="{{ route('front.internetConectivity') }}">Internet Connectivity</a></li>
                                    <li><a href="{{ route('front.wifiConectivity') }}">WiFi Connectivity</a></li>
                                    <li><a href="{{ route('front.dataBackup') }}">Data Backup Services</a></li>
                                    <li><a href="{{ route('front.programError') }}">Program Errors & Crashes</a></li>
                                    <li><a href="{{ route('front.microsoftWindow') }}">Microsoft Windows</a></li>
                                    <li><a href="{{ route('front.smartPhone') }}">Smartphones & Tablets</a></li>
                                    <li><a href="{{ route('front.appleMacos') }}">Apple Mac OS</a></li>
                                    <li><a href="{{ route('front.printerAndMultifunction') }}">Printers &
                                            Multifunctions</a></li>
                                    <li><a href="{{ route('front.trainingAndGuidence') }}">Training & Guidance</a>
                                    </li>
                                    <li><a href="{{ route('front.softwareApplication') }}">Software Applications</a>
                                    </li>
                                    <li><a href="{{ route('front.antivirusandsecurity') }}">Antivirus & Security
                                            Software</a>
                                    </li>


                                </ul>

                            </li>
                            <li><a href="#"> IT Services <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('front.webDevelopment') }}">Web Development</a></li>
                                    <li><a href="{{ route('front.appDevelopment') }}">App Development</a></li>
                                    <li><a href="{{ route('front.webAgency') }}">Web Agency</a></li>
                                    <li><a href="{{ route('front.digitalMarketing') }}">digital marketing</a></li>
                                    <li><a href="{{ route('front.uiUxDesign') }}">UI/UX Design</a></li>

                                </ul>
                            </li>

                            <!-- <li><a href="projects.php">projects</a></li> -->

                            <li><a href="{{ route('front.contact') }}">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="action-bar text-white">
                        <div class="single-info-element">
                            <div class="icon">
                                <i class="fal fa-map-marked-alt"></i>
                            </div>
                            <div class="text">
                                <h5>visit our location:</h5>
                                <span>West Jakarta City, UK</span>
                            </div>
                        </div>
                        <div class="single-info-element">
                            <div class="icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="text">
                                <h5>Opening Hours:</h5>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div>
                        <div class="single-info-element">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="text">
                                <h5>Send us mail</h5>
                                <span>info@example.com</span>
                            </div>
                        </div>
                        <div class="call-us">
                            <div class="icon text-white">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="text">
                                <h5>Phone Number</h5>
                                <span>+09 949 858327</span>
                            </div>
                        </div>
                        <a href="{{ route('front.contact') }}" class="theme-btn mt-4">Free Consulting</a>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </div>
    </div>
</header>

<!-- 🔍 Search Bar -->
<div class="search-bar">
    <form action="search.php" method="get" class="d-flex align-items-center">
        <input type="text" name="q" placeholder="Search..." class="form-control">
        <button type="submit" class="btn search-btn ms-2">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>
