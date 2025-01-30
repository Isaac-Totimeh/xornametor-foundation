@extends('website.layouts.master')
@section('title')
    Blogs
@endsection
@section('content')
  <!-- Navbar & Hero Start -->
  <div class="p-0 container-fluid position-relative">
    <nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
        <a href="" class="p-0 navbar-brand">
            <!-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1> -->
            <img src=" {{ asset ('asset/img/xlogo.png') }} " height="700px" width="200px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="py-0 navbar-nav ms-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">Who We Are</a>
                    <a href="{{ route('project.done') }}" class="nav-item nav-link">Our Projects</a>
                    <a href="{{ route('blogs') }}" class="nav-item nav-link">Blog</a>
                    <a href="{{route ('beneficiaries') }}" class="nav-item nav-link">Beneficiaries</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route('donate')}}" class="flex-shrink-0 px-4 py-2 my-3 btn btn-primary rounded-pill my-lg-0">Donate</a>
        </div>
    </nav>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container py-5 text-center" style="max-width: 900px;">
            <h4 class="mb-4 text-white display-4 wow fadeInDown" data-wow-delay="0.1s">Our News</h4>
            <ol class="mb-0 breadcrumb d-flex justify-content-center wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-primary">News</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->


<!-- Blog Start -->
<div class="pb-5 container-fluid blog">
    <div class="container pb-5">
        <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog & News</h4>
            <h3 class="mb-4 display-5">STAY UPDATED WITH OUR LATEST NEWS</h3>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="p-4 blog-item">
                <div class="mb-4 blog-img">
                    <img src=" {{ asset ('asset/img/service-1.jpg') }}" class="rounded img-fluid w-100" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="mb-3 h4 d-inline-block">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src=" {{ asset ('asset/img/testimonial-1.jpg') }} " class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="p-4 blog-item">
                <div class="mb-4 blog-img">
                    <img src=" {{ asset ('asset/img/service-2.jpg') }} " class="rounded img-fluid w-100" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Non-Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="mb-3 h4 d-inline-block">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src=" {{ asset ('asset/img/testimonial-2.jpg') }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="p-4 blog-item">
                <div class="mb-4 blog-img">
                    <img src=" {{ asset ('asset/img/service-3.jpg') }} " class="rounded img-fluid w-100" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="mb-3 h4 d-inline-block">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src=" {{ asset ('asset/img/testimonial-3.jpg') }} " class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="p-4 blog-item">
                <div class="mb-4 blog-img">
                    <img src=" {{ asset ('asset/img/service-4.jpg') }} " class="rounded img-fluid w-100" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Non-Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="mb-3 h4 d-inline-block">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src=" {{ asset ('asset/img/testimonial-1.jpg') }} " class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
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