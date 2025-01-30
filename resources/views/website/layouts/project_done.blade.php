@extends('website.layouts.master')
@section('title')
    Our Projects
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
            <h4 class="mb-4 text-white display-4 wow fadeInDown" data-wow-delay="0.1s">Our Projects</h4>
            <ol class="mb-0 breadcrumb d-flex justify-content-center wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-primary">Projects</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->


<!-- Projects Start -->
<div class="pb-5 container-fluid service">
    <div class="container pb-5">
        <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Projects</h4>
            <h1 class="mb-4 display-5">Wonderful Projects Undertaken</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src=" {{ asset ('asset/img/class.png') }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <a href="#" class="mb-4 h4 d-inline-block">Abotoase Classroom Block</a>
                        <p class="mb-4">Abotoase Classroom Block</p>
                        <a class="px-4 py-2 btn btn-primary rounded-pill" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src=" {{ asset ('asset/img/community.png') }} " class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <a href="#" class="mb-4 h4 d-inline-block">CK Korpe Community</a>
                        <p class="mb-4">CK Korpe Community</p>
                        <a class="px-4 py-2 btn btn-primary rounded-pill" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src=" {{ asset ('asset/img/desk.png') }} " class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <a href="#" class="mb-4 h4 d-inline-block">Desk Donation</a>
                        <p class="mb-4">Desk Donation</p>
                        <a class="px-4 py-2 btn btn-primary rounded-pill" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Testimonial Start -->
<div class="pb-5 container-fluid testimonial">
    <div class="container pb-5">
        <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonial</h4>
            <h1 class="mb-4 display-5">Our Community Reviews</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
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
                    <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
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
                    <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
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
                    <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
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