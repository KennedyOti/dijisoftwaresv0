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
    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="main-color">Team</h4>
                <h1 class="display-5 mb-4">Meet Our Proffesional Software Developers</h1>
                <p class="mb-0">At DijiSoftwares, we take pride in our team of highly skilled and dedicated software
                    developers. Our professionals are experts in their fields, committed to delivering cutting-edge
                    solutions tailored to meet the unique needs of our clients. They work tirelessly to ensure that every
                    project is executed with precision, creativity, and a deep understanding of the latest technological
                    advancements.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team4.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('assets/img/team1.jpg') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('assets/img/team2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Abdul Hassan</h4>
                            <p class="mb-0">Software Developer</p>
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
                            <img src="{{ asset('assets/img/team3.jpg') }}" class="img-fluid" alt="">
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
@endsection
