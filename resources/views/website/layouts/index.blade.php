@extends('website.layouts.master')
@section('title')
   Home 
@endsection
@section('content')
   
    <!-- Navbar & Hero Start -->
    <div class="p-0 container-fluid position-relative">
        <nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
            <a href="" class="p-0 navbar-brand">
                <!-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1> -->
                <img src=" {{ asset ('asset/img/xlogo.png')}} " height="700px" width="200px" alt="Logo">
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

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src=" {{ asset ('asset/img/p1.jpeg') }} " class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="mb-4 text-primary text-uppercase fw-bold">Welcome To</h4>
                                    <h1 class="mb-4 text-white display-4 text-uppercase">Xornametor Foundation</h1>
                                    <p class="mb-5 fs-5">Xornametor Foundation is to build a world where underserved communities and individuals are empowered to reach their fullest potential through access to education, healthcare, sustainable livelihoods, and social justice.</p>
                                    <div class="flex-shrink-0 mb-4 d-flex justify-content-center justify-content-md-end">
                                        <a class="px-4 py-3 btn btn-light rounded-pill px-md-5 me-2" href="{{route('donate')}}"> Donate</a>
                                        <a class="px-4 py-3 btn btn-primary rounded-pill px-md-5 ms-2" href="{{ route ('about') }}">Learn More</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2">Follow Us:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="mx-2 btn btn-md-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="mx-2 btn btn-md-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src=" {{ asset ('asset/img/p2.jpeg') }} " class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h4 class="mb-4 text-primary text-uppercase fw-bold">Welcome To </h4>
                                    <h1 class="mb-4 text-white display-4 text-uppercase">Xornametor Foundation</h1>
                                    <p class="mb-5 fs-5">We envision a society driven by compassion, equity, and innovation, where the cycles of poverty and inequality are broken, and every life is uplifted to create a legacy of lasting transformation.</p>
                                    <div class="flex-shrink-0 mb-4 d-flex justify-content-center">
                                        <a class="px-4 py-3 btn btn-light rounded-pill px-md-5 me-2" href="{{route('donate')}}">Donate</a>
                                        <a class="px-4 py-3 btn btn-primary rounded-pill px-md-5 ms-2" href="{{ route ('about') }}">Learn More</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="text-white me-2">Follow Us:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="mx-2 btn btn-md-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="mx-2 btn btn-md-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
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
                                        <h4>More Info</h4>
                                        <p>Do you need more information?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Year Of Touching Lifes</h4>
                                        <p>We have been impacting lives positively 4 years +</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route ( 'about') }}" class="flex-shrink-0 px-5 py-3 btn btn-primary rounded-pill">Learn More</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+233 244882283</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="overflow-hidden rounded bg-primary position-relative">
                        <img src=" {{ asset ('asset/img/p3.jpeg') }} " class="rounded img-fluid w-100" alt="">
                        <div class="rounded-bottom">
                            <img src=" {{ asset ('asset/img/p4.jpeg') }} " class="img-fluid rounded-bottom w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                            <img src=" {{ asset ('asset/img/class.png') }} " class="img-fluid rounded-top w-100" alt="Image">
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

    <!-- Blog Start -->
    <div class="pb-5 container-fluid blog">
        <div class="container pb-5">
            <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog & News</h4>
                <h1 class="mb-4 display-5">STAY UPDATED WITH OUR LATEST NEWS</h1>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="p-4 blog-item">
                    <div class="mb-4 blog-img">
                        <img src=" {{ asset ('asset/img/service-1.jpg') }} " class="rounded img-fluid w-100" alt="">
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
                        <img src=" {{ asset ('asset/img/testimonial-2.jpg') }} " class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
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


    <!-- FAQs Start -->
    <div class="pb-5 container-fluid faq-section">
        <div class="container pb-5 overflow-hidden">
            <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQs</h4>
                <h1 class="mb-4 display-5">Frequently Asked Questions</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="p-5 rounded accordion accordion-flush bg-light" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What Is Xornametor Foundation?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What Does Xornametor Foundation Do?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Does Xornametor Foundation Accept Online Donations?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Is Xornametor Foundation Legit?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                How Can I Support Xornametor Foundation?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="rounded bg-primary">
                        <img src=" {{ asset ('asset/img/p4.jpeg') }} " class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


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