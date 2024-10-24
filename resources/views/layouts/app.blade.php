<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Dijisoftwares Ict Hub - Your trusted digital service provider." />
    <meta property="og:title" content="Home - Dijisoftwares Ict Hub" />
    <meta name="description"
        content="DijiSoftwares Ict Hub: Your trusted digital services provider in Kenya. We specialize in Software & Cyber Services, Website & Software Development, Graphic Design, IT Training, and more. Contact us for expert IT solutions and educational training in Kenya.">
    <meta name="keywords"
        content="DijiSoftwares, Dijisoftwares Ict Hub, Hub,  digital services, software services, cyber services, website development, software development, graphic design, IT training, computer literacy, programming lessons, Egerton University, Njoro, Kenya, IT consultancy, laptop diagnosis, software installation, digital skills training, research assistance, typesetting, printing services">

    <meta name="author" content="Kennedy Otieno, Software Engineer">
    <meta name="google-site-verification" content="24iFixU5Sy0m3gSLaQPtbLVjkn_w6eqXtxH64aJXp3o" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dijidoftwares Ict Hub') }}</title>
    <!---Adsense-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6429721231725660"
        crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('assets/img/logo.ico') }}">


    @stack('style')
</head>

<body>
    <div id="app">

        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border main-color" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @if (request()->is(['login', 'register', 'forgot-password', 'password/reset', 'password/email']))
            {{-- AUTHENTICATION CODE --}}
            <div class="container d-flex vh-100">
                <div class="row justify-content-center align-self-center w-100">
                    <div class="col-md-5 rounded-4 shadow-lg p-5">

                        @yield('content')

                    </div>
                </div>
            </div>
        @else
            {{-- PAGES CODE --}}
            <!-- Topbar Start -->
            <div class="container-fluid topbar bg-dark px-5 d-none d-lg-block">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted small me-4"><i
                                    class="fas fa-map-marker-alt main-color me-2"></i>Find A Location</a>

                            <a href="tel:+01234567890" class="text-muted small me-4"><i
                                    class="fas fa-phone-alt main-color me-2"></i>+25493543659</a>
                            <a href="mailto:example@gmail.com" class="text-muted small me-0"><i
                                    class="fas fa-envelope main-color me-2"></i>dijisoftwares@gmail.com</a>
                            <a href="{{ route('bootcamp.index') }}" class="text-muted small me-4"><i
                                    class="fas fa-laptop-code main-color me-2"></i>Coding Bootcamp
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-inline-flex align-items-center" style="height: 45px;">
                            <a href="{{ route('register') }}"><small class="me-3 text-dark"><i
                                        class="fa fa-user main-color me-2"></i>Register</small></a>
                            <a href="{{ route('login') }}"><small class="me-3 text-dark"><i
                                        class="fa fa-sign-in-alt main-color me-2"></i>Login</small></a>
                            {{-- <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                        class="fa fa-home main-color me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My
                                    Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i>
                                    Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i>
                                    Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account
                                    Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log
                                    Out</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->

            <!-- Navbar & Hero Start -->
            <div class="container-fluid position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <img src="{{ asset('assets/img/logo11.jpg') }}" alt="Logo" style="color: green;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{ route('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('about.index') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('service.index') }}" class="nav-item nav-link">Services</a>
                            <a href="{{ route('blog.index') }}" class="nav-item nav-link">Blogs</a>
                            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                            <a href="{{ route('register') }}" class="nav-item nav-link">Signup</a>
                            {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Pages</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Features</a>
                                <a href="team.html" class="dropdown-item">Our team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="offer.html" class="dropdown-item">Our offer</a>
                                <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}
                            <a href="{{ route('contact.index') }}" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <a href="{{ route('apply') }}"
                            class="btn main-bg rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Apply
                            For Courses</a>
                    </div>
                </nav>

                @if (Route::is('/'))
                    <!-- Carousel Start -->
                    <div class="header-carousel owl-carousel">
                        <div class="header-carousel-item">
                            <img src="{{ asset('assets/img/training.jpg') }}" class="img-fluid w-100"
                                alt="Image">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row gy-0 gx-5">
                                        <div class="col-lg-0 col-xl-5"></div>
                                        <div class="col-xl-7 animated fadeInLeft">
                                            <div class="text-sm-center text-md-end">
                                                <!---
                                                <h4 class="main-color text-uppercase fw-bold mb-4">Welcome To
                                                    Dijisoftwares Ict Hub
                                                </h4>
                                                --->
                                                <h1 class="display-4 text-uppercase text-white mb-4">Digital Literacy
                                                    Training </h1>
                                                <p class="mb-5 fs-5">
                                                    Unlock the power of digital skills with our Basic Computer Digital
                                                    Literacy Course at Dijisoftwares ICT Hub! In just 2 weeks (with
                                                    daily 2-hour sessions), you’ll gain essential knowledge on computer
                                                    operations, internet use, file management, and digital communication
                                                    tools. Learn how to navigate operating systems, create documents,
                                                    manage files, browse the internet safely, and communicate
                                                    effectively online. Perfect for beginners looking to confidently use
                                                    digital technologies for everyday tasks. Enroll today and take the
                                                    first step toward mastering the digital world!
                                                </p>
                                                <div
                                                    class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                                    <a class="btn main-light rounded-pill py-3 px-4 px-md-5 ms-2"
                                                        href="{{ route('bootcamp.index') }}">Register Bootcamp</a>
                                                </div>
                                                <div
                                                    class="social-icons d-flex align-items-center justify-content-center justify-content-md-end">
                                                    <h2 class="text-white me-2">Follow Us:</h2>
                                                    <div class="d-flex justify-content-end ms-2">
                                                        <a class="btn btn-md-square btn-light rounded-circle me-2"
                                                            href="">
                                                            <i class="fab fa-facebook-f"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                                            href="">
                                                            <i class="fab fa-twitter"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                                            href="">
                                                            <i class="fab fa-instagram"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle ms-2"
                                                            href="">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-carousel-item">
                            <img src="{{ asset('assets/img/ken1.jpg') }}" class="img-fluid w-100" alt="Image">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row gy-0 gx-5">
                                        <div class="col-lg-0 col-xl-5"></div>
                                        <div class="col-xl-7 animated fadeInLeft">
                                            <div class="text-sm-center text-md-end">
                                                <!---
                                                <h4 class="main-color text-uppercase fw-bold mb-4">Welcome To
                                                    Dijisoftwares
                                                </h4>
                                            -->
                                                <h1 class="display-4 text-uppercase text-white mb-4">Meet our CEO
                                                </h1>
                                                <p class="mb-5 fs-5">Our CEO is a visionary leader with a passion for
                                                    innovation and technology. With years of experience in the industry,
                                                    they have driven our company toward success by fostering a culture
                                                    of creativity, excellence, and growth. Under their leadership, we
                                                    continue to push the boundaries of digital transformation,
                                                    delivering cutting-edge solutions to our clients
                                                </p>
                                                <!--
                                                <div
                                                    class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                                    <a class="btn main-light rounded-pill py-3 px-4 px-md-5 ms-2"
                                                        href="{{ route('apply') }}">Go to Program Website</a>
                                                </div>
                                            -->
                                                <div
                                                    class="social-icons d-flex align-items-center justify-content-center justify-content-md-end">
                                                    <h2 class="text-white me-2">Follow Us:</h2>
                                                    <div class="d-flex justify-content-end ms-2">
                                                        <a class="btn btn-md-square btn-light rounded-circle me-2"
                                                            href="">
                                                            <i class="fab fa-facebook-f"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                                            href="">
                                                            <i class="fab fa-twitter"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                                            href="">
                                                            <i class="fab fa-instagram"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle ms-2"
                                                            href="">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-carousel-item">
                            <img src="{{ asset('assets/img/soft.jpg') }}" class="img-fluid w-100"
                                alt="Image">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row g-5">
                                        <div class="col-12 animated fadeInUp">
                                            <div class="text-center">
                                                <!--
                                                <h4 class="main-color text-uppercase fw-bold mb-4">Welcome To
                                                    Dijisoftwares Ict Hub
                                                </h4>
                                            -->

                                                <h1 class="display-4 text-uppercase text-white mb-4">Professional
                                                    Software Development</h1>
                                                <p class="mb-5 fs-5">
                                                    We are a team of software developers, designers, and project
                                                    managers
                                                    who are passionate about creating innovative software solutions for
                                                    businesses. Our goal is to help you achieve your business goals by
                                                    providing you with the tools you need to succeed. Whether you need a
                                                    custom software solution, a mobile app, or a website, we have the
                                                    expertise and experience to deliver high-quality products that meet
                                                    your needs.
                                                </p>
                                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">

                                                </div>
                                                <div
                                                    class="social-icons d-flex align-items-center justify-content-center justify-content-md-end">
                                                    <h2 class="text-white me-2">Follow Us:</h2>
                                                    <div class="d-flex justify-content-end ms-2">
                                                        <a class="btn btn-md-square btn-light rounded-circle me-2"
                                                            href="">
                                                            <i class="fab fa-facebook-f"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                                            href="">
                                                            <i class="fab fa-twitter"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                                            href="">
                                                            <i class="fab fa-instagram"></i></a>
                                                        <a class="btn btn-md-square btn-light rounded-circle ms-2"
                                                            href="">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Carousel End -->
        @else
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown text-capitalize" data-wow-delay="0.1s">
                        {{ $title }}</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown text-capitalize"
                        data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">
                            {{ str_replace('.index', '', Route::currentRouteName()) }}
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Header End -->
        @endif

    </div>
    <!-- Navbar & Hero End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Dijisoftwares Ict Hub</h4>
                            <!-- <img src="img/logo.png" alt="Logo"> -->
                        </a>
                        <p class="mb-4">Contact Us for quality software services</p>
                        <div class="d-flex">
                            <a href="#" class="main-bg d-flex rounded align-items-center py-2 px-3 me-2">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on the</small>
                                    <h6 class="text-white">App Store</h6>
                                </div>
                            </a>
                            <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                <i class="fas fa-play main-color"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get</small>
                                    <h6 class="text-white">In Touch</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blogs</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Training</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Tech Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt main-color me-3"></i>
                            <p class="text-white mb-0">Egerton University Main Gate</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope main-color me-3"></i>
                            <p class="text-white mb-0">info@dijisoftwares.com</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt main-color me-3"></i>
                            <p class="text-white mb-0">+254793543659</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser main-color me-3"></i>
                            <p class="text-white mb-0">dijisoftwares.com</p>
                        </div>
                        <div class="d-flex">
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter text-white"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-instagram text-white"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-0" href="#"><i
                                    class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Dijisoftwares Ict Hub</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://dijisoftwares.com">Dijisoftwares Ict
                        Hub</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn main-bg btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    @endif

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @stack('scripts')

</body>

</html>
