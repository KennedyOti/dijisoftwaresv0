@extends('layouts.app')

@section('content')
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
                            <img src="{{ asset('assets/img/service-1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color"> Web Development</a>
                            <p class="mb-4">We specialize in crafting responsive and user-friendly websites that elevate
                                your online presence.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service-2.jpg') }}" class="img-fluid rounded-top w-100"
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
                            <img src="{{ asset('assets/img/service-3.jpg') }}" class="img-fluid rounded-top w-100"
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
                            <img src="{{ asset('assets/img/service-4.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">IT Proffesinal Counsaltant</a>
                            <p class="mb-4">Our IT professional consulting services offer expert advice to help you
                                achieve your business goals
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service-5.jpg') }}" class="img-fluid rounded-top w-100"
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
                            <img src="{{ asset('assets/img/service-6.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 main-color">Cyber Cafe Services</a>
                            <p class="mb-4">Access high-speed internet, printing, and other essential digital services at
                                our cyber cafe.
                            </p>
                            <a class="btn main-bg rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
