@extends('layouts.app')

@section('content')
    <!-- Abvout Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="main-color">About Us</h4>
                        <h1 class="display-5 mb-4">Welcome to Dijisoftwares</h1>
                        <p class="mb-4">DijiSoftwares is a solution-oriented digital services provider located near Egerton
                            University Gate in Njoro, Kenya. Our diverse range of services includes Software Services, Cyber
                            Services, Website Development, Software Development, Graphic Design, System/Software Training,
                            Research Project Assistance, Typesetting, Printing & Scanning Services, and Digital Skills
                            Training.

                            We also offer specialized Technical Services like Computer & Laptop Diagnosis, Software
                            Installation & Updates, and IT Consultancy. For those looking to enhance their tech knowledge,
                            we provide Programming/Coding Lessons, Graphic Design Lessons, and Computer Literacy
                            Training—both in-person and online.

                            At DijiSoftwares, we are dedicated to delivering high-quality solutions tailored to meet the
                            needs of our clients. Whether you're looking for professional IT services or educational
                            training, our experienced team is here to help you succeed. Visit us online at
                            www.DijiSoftwares.com or contact us at softwares@gmail.com or +254793543659 for more
                            information.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x main-color"></i></div>
                                    <div class="ms-4">
                                        <h4>IT Consuluting</h4>
                                        <p>We off Information technology counsaltancy services for businesses that want to
                                            leverage the use of IT in their businesses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x main-color"></i></div>
                                    <div class="ms-4">
                                        <h4>Our Goal</h4>
                                        <p>Promote research and development in the field of softawre engineering so as to
                                            build reliable software products that solves business problems in the modern day
                                            tech space.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="btn main-bg rounded-pill py-3 px-5 flex-shrink-0">Discover
                                    Now</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x main-color me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+254793543659</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('assets/img/about01.jpg') }}" class="img-fluid rounded w-100" alt="">

                        <div class="" style="position: absolute; top: -15px; right: -15px;">
                            <img src="{{ asset('assets/img/about01.jpg') }}" class="img-fluid"
                                style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                        </div>
                        <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                            <img src="{{ asset('assets/img/about01.jpg') }}" class="img-fluid"
                                style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                        </div>
                        <div class="rounded-bottom">
                            <img src="{{ asset('assets/img/about0.jpg') }}" class="img-fluid rounded-bottom w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Services Start -->
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="main-color">Our Services</h4>
                <h1 class="display-5 mb-4">We Provide The Best Software Solutions</h1>
                <p class="mb-0">At Dijisoftwares, we provide top-notch services designed to meet your digital needs.
                    Explore our offerings below and take advantage of our competitive pricing.


                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/web1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color"> Web Development</a>
                            <p class="mb-4">We specialize in craft user-friendly websites that elevate
                                your online presence.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/designer.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">Graphic Design</a>
                            <p class="mb-4">Transform your brand's identity with our creative graphic design services.

                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/designer.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">UI/UX Design</a>
                            <p class="mb-4">Enhance your digital products with intuitive and engaging user interfaces.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/designer.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">IT Proffesinal Counsaltant</a>
                            <p class="mb-4">We provide the best IT counsaltaing services.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service5.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">Computer Diagnosis </a>
                            <p class="mb-4">We diagnose your pc for hardware and software issues to improve its
                                performace.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/cons.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">Cyber Cafe Services</a>
                            <p class="mb-4">Access high-speed internet, printing, and other essential cyber cafe
                                services.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Pricing Section Start -->
    <div class="container-fluid pricing-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-success">Our Pricing</h4>
                <h1 class="display-5 mb-4">Choose Your Plan</h1>
                <p class="mb-0">Select the best plan that suits your needs. We offer flexible and affordable plans to
                    help you grow your business.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center py-5">
                            <h3 class="card-title text-success mb-3">Basic Website</h3>
                            <h4 class="mb-4">$150</h4>
                            <ul class="list-unstyled mb-4">
                                <li>Domain name</li>
                                <li>Frontend Only</li>
                            </ul>
                            <a href="#" class="btn btn-success btn-hover rounded-pill py-2 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center py-5">
                            <h3 class="card-title text-success mb-3">E-comerce Website</h3>
                            <h4 class="mb-4">$400</h4>
                            <ul class="list-unstyled mb-4">
                                <li>Frontend </li>
                                <li>Backend</li>
                                <li>Payment Intergration</li>
                            </ul>
                            <a href="#" class="btn btn-success btn-hover rounded-pill py-2 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center py-5">
                            <h3 class="card-title text-success mb-3">System Development</h3>
                            <h4 class="mb-4">$650 </h4>
                            <ul class="list-unstyled mb-4">
                                <li>Frontend</li>
                                <li>Backend</li>
                                <li>User Support</li>
                            </ul>
                            <a href="#" class="btn btn-success btn-hover rounded-pill py-2 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Section End -->

    <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="main-color">Our Blog & News</h4>
                <h1 class="display-5 mb-4">Weekly Insights on Software Engineering and Development</h1>
                <p class="mb-0">Stay updated with the latest trends in software engineering, coding practices, and
                    development tools. Our expert team at DijiSoftwares delivers in-depth articles every week to help you
                    enhance your skills and stay ahead in the fast-paced tech industry.</p>
            </div>
        </div>

        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('assets/img/service-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">JavaScript</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3 main-color">What are the new javascript updates?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                    suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle"
                        style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('assets/img/service-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Python Updates</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3 main-color">What are the new updates in Python?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                    suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="img-fluid rounded-circle"
                        style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('assets/img/service-3.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Artificial Intelligence</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3 main-color">What are are the new trends in Ai?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                    suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonial-3.jpg') }}" class="img-fluid rounded-circle"
                        style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('assets/img/service-4.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Serverless Technology</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3 main-color">What is Serverless Technology?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                    suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle"
                        style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Blog End -->

    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="main-color">Team</h4>
                <h1 class="display-5 mb-4">Meet Our Proffesional Software Developers</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                    facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa
                    deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Kennedy Otieno</h4>
                            <p class="mb-0">CEO & Founder </p>
                        </div>
                        <div class="team-icon">
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team-2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Jakym Mbuya</h4>
                            <p class="mb-0">Web Developer</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Abdul Hassan</h4>
                            <p class="mb-0">System Developer</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team-4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Benjamin Okumu</h4>
                            <p class="mb-0">Software Developer and Co-Founder</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn main-bg btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="main-color">Testimonial</h4>
                <h1 class="display-5 mb-4">Our Clients Riviews</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                    facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa
                    deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                            blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti
                            laborum accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex main-color">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                            blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti
                            laborum accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex main-color">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('assets/img/testimonial-3.jpg') }}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                            blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti
                            laborum accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex main-color">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                            blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti
                            laborum accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex main-color">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
