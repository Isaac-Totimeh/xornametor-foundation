@extends('website.layouts.master')
@section('title')
    About Us
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
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{route('donate')}}" class="flex-shrink-0 px-4 py-2 my-3 btn btn-primary rounded-pill my-lg-0">Donate</a>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container py-5 text-center" style="max-width: 900px;">
                    <h4 class="mb-4 text-white display-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                    <ol class="mb-0 breadcrumb d-flex justify-content-center wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-primary">About</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="py-5 container-fluid about">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Us</h4>
                            <h1 class="mb-4 display-5">Xornametor Foundation</h1>
                            <p class="mb-4">Xornametor Foundation is to build a world where underserved communities and individuals are empowered to reach their fullest potential through access to education, healthcare, sustainable livelihoods, and social justice. We envision a society driven by compassion, equity, and innovation, where the cycles of poverty and inequality are broken, and every life is uplifted to create a legacy of lasting transformation.</p>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Mission</h4>
                                            <p>To serve as a beacon of hope by providing sustainable solutions to social and economic challenges. Through impactful programs in education, healthcare, skill development, and community empowerment, we strive to uplift lives, bridge inequalities, and foster resilience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Vision</h4>
                                            <p>To touch lives all over.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('donate')}}" class="flex-shrink-0 px-5 py-3 btn btn-primary rounded-pill">Donate</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Donate</h4>
                                            <p class="mb-0 fs-5" style="letter-spacing: 1px;">+233 244882283</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="overflow-hidden rounded bg-primary position-relative">
                            <img src=" {{ asset ('asset/img/p5.jpeg') }} " class="rounded img-fluid w-100" alt="">
                            <div class="rounded-bottom">
                                <img src=" {{ asset ('asset/img/p6.jpeg')}} " class="img-fluid rounded-bottom w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Features Start -->
        <div class="pb-5 container-fluid feature">
            <div class="container pb-5">
                <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our values</h4>
                    <h1 class="mb-4 display-5">Touching Lives.</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="p-4 feature-item">
                            <div class="p-4 mb-4 feature-icon">
                                <i class="fas fa-chart-line fa-4x text-primary"></i>
                            </div>
                            <h4>Empowerment</h4>
                            <p class="mb-4">Fostering opportunities for underserved communities to build sustainable futures and unlock their full potential</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="p-4 feature-item">
                            <div class="p-4 mb-4 feature-icon">
                                <i class="fas fa-university fa-4x text-primary"></i>
                            </div>
                            <h4>Transparency</h4>
                            <p class="mb-4">Ensuring donors know how their contributions are used, with clear reporting and measurable impact.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="p-4 feature-item">
                            <div class="p-4 mb-4 feature-icon">
                                <i class="fas fa-file-alt fa-4x text-primary"></i>
                            </div>
                            <h4>Equity and Inclusion</h4>
                            <p class="mb-4">Committing to fairness, justice, and equal opportunities for all individuals, regardless of their background.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="p-4 feature-item">
                            <div class="p-4 mb-4 feature-icon">
                                <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                            </div>
                            <h4>Sustainability</h4>
                            <p class="mb-4">Driving long-term change by addressing root causes of poverty and inequality with innovative, lasting solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- Team Start -->
        <div class="pb-5 container-fluid team">
            <div class="container pb-5">
                <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="mb-4 display-5">Meet Our Advisers</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src=" {{ asset ('asset/img/xlogo.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src=" {{ asset ('asset/img/xlogo.png') }} " class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->  
@endsection