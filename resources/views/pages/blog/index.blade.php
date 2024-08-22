@extends('layouts.app')

@section('content')
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
                <img src="{{ asset('assets/img/blog.jpg') }}" class="img-fluid w-100 rounded" alt="">
                <div class="blog-title">
                    <a href="#" class="btn">JavaScript</a>
                </div>
            </div>
            <a href="#" class="h4 d-inline-block mb-3 main-color">What are the new javascript updates?</a>
            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                suscipit error corporis accusamus labore....
            </p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/team4.png') }}" class="img-fluid rounded-circle"
                    style="width: 60px; height: 60px;" alt="">
                <div class="ms-3">
                    <h5>Admin</h5>
                    <p class="mb-0">October 9, 2025</p>
                </div>
            </div>
        </div>
        <div class="blog-item p-4">
            <div class="blog-img mb-4">
                <img src="{{ asset('assets/img/blog.jpg') }}" class="img-fluid w-100 rounded" alt="">
                <div class="blog-title">
                    <a href="#" class="btn">Python Updates</a>
                </div>
            </div>
            <a href="#" class="h4 d-inline-block mb-3 main-color">What are the new updates in Python?</a>
            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                suscipit error corporis accusamus labore....
            </p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/team1.jpg') }}" class="img-fluid rounded-circle"
                    style="width: 60px; height: 60px;" alt="">
                <div class="ms-3">
                    <h5>Admin</h5>
                    <p class="mb-0">October 9, 2025</p>
                </div>
            </div>
        </div>
        <div class="blog-item p-4">
            <div class="blog-img mb-4">
                <img src="{{ asset('assets/img/blog.jpg') }}" class="img-fluid w-100 rounded" alt="">
                <div class="blog-title">
                    <a href="#" class="btn">Artificial Intelligence</a>
                </div>
            </div>
            <a href="#" class="h4 d-inline-block mb-3 main-color">What are are the new trends in Ai?</a>
            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                suscipit error corporis accusamus labore....
            </p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/team3.jpg') }}" class="img-fluid rounded-circle"
                    style="width: 60px; height: 60px;" alt="">
                <div class="ms-3">
                    <h5>Admin</h5>
                    <p class="mb-0">October 9, 2025</p>
                </div>
            </div>
        </div>
        <div class="blog-item p-4">
            <div class="blog-img mb-4">
                <img src="{{ asset('assets/img/blog.jpg') }}" class="img-fluid w-100 rounded" alt="">
                <div class="blog-title">
                    <a href="#" class="btn">Serverless Technology</a>
                </div>
            </div>
            <a href="#" class="h4 d-inline-block mb-3 main-color">What is Serverless Technology?</a>
            <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                suscipit error corporis accusamus labore....
            </p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/team2.png') }}" class="img-fluid rounded-circle"
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
@endsection