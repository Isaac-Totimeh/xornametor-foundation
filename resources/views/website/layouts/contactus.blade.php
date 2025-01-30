@extends('website.layouts.master')
@section('title')
    Contact Us
@endsection
@section('content')
  
  
        <!-- Navbar & Hero Start -->
        <div class="p-0 container-fluid position-relative">
            <nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
                <a href="" class="p-0 navbar-brand">
                    <!-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1> -->
                    <img src=" {{ asset('img/xlogo.png') }} " height="700px" width="200px" alt="Logo">
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
                    <h4 class="mb-4 text-white display-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                    <ol class="mb-0 breadcrumb d-flex justify-content-center wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-primary">Contact</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="py-5 container-fluid contact">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="p-5 mb-5 rounded bg-light">
                                <h4 class="mb-4 text-primary">Get in Touch</h4>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="mb-4 contact-icon text-primary">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">GU-541-7918, Shito Street</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="mb-4 contact-icon text-primary">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">info@xornametorfoundation.gh</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="mb-4 contact-icon text-primary">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">+233 244882283</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="mb-4 contact-icon text-primary">
                                                <i class="fab fa-firefox-browser fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Website</h4>
                                                <p class="mb-0">www.xornametorfoundation.org</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light h-100 wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-primary">Send Your Message</h4>
                                <p class="mb-4">We would love to hear from you. We are ready to answer all your queries and questions.</p>
                                <form>
                                    <div class="row g-4">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="border-0 form-control" id="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="email" class="border-0 form-control" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="phone" class="border-0 form-control" id="phone" placeholder="Phone">
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="border-0 form-control" id="project" placeholder="Project">
                                                <label for="project">Your Project</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="border-0 form-control" id="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="border-0 form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <button class="py-3 btn btn-primary w-100">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded h-100">
                            <iframe class="rounded h-100 w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127066.72272999825!2d-0.26213166624225226!3d5.591373808668131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra!5e0!3m2!1sen!2sgh!4v1737826106064!5m2!1sen!2sgh" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End --> 
@endsection