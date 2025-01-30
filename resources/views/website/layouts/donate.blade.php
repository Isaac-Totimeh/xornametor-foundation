@extends('website.layouts.master')
@section('title')
Donate
@endsection
@section('content')
       <!-- Navbar & Hero Start -->
       <div class="p-0 container-fluid position-relative">
        <nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
            <a href="" class="p-0 navbar-brand">
                <!-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1> -->
                <img src="  {{ asset('asset/img/xlogo.png') }} " height="700px" width="200px" alt="Logo">
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
                <h4 class="mb-4 text-white display-4 wow fadeInDown" data-wow-delay="0.1s">Donate</h4>
                <ol class="mb-0 breadcrumb d-flex justify-content-center wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Donate</li>
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
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="overflow-hidden rounded bg-primary position-relative">
                        <img src="  {{ asset('asset/img/p9.jpg') }} " class="rounded img-fluid w-100" alt="">
                        <div class="rounded-bottom">
                            <img src="  {{ asset('asset/img/p10.jpg') }} " class="img-fluid rounded-bottom w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Support Us</h4>
                        <h1 class="mb-4 display-5">We Need Your Help</h1>
                        <p class="mb-4">Xornametor Foundation is here to serve as a beacon of hope by providing sustainable solutions to social and economic challenges. Through impactful programs in education, healthcare, skill development, and community empowerment, we strive to uplift lives, bridge inequalities, and foster resilience.</p>
                        <div class="p-5 rounded bg-light h-100 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="text-primary">Donation Form</h4>
                            <form>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="border-0 form-control">
                                                <option vlaue="">--Select Frequency--</option>
                                                <option value="One Time">One Time</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                            <label for="Frequency">Frequency</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                          <select class="border-0 form-control" id="amountSelect">
                                            <option value="">--Select Amount--</option>
                                            <option value="50">GHC 50.00</option>
                                            <option value="100">GHC 100.00</option>
                                            <option value="1000">GHC 1,000.00</option>
                                            <option value="other">Other</option>
                                          </select>
                                          <label for="Amount">Amount</label>
                                        </div>
                                      </div>
                                      <div class="col-12" id="customAmountContainer" style="display: none;">
                                        <div class="form-floating">
                                          <input
                                            type="text"
                                            class="border-0 form-control"
                                            id="customAmount"
                                            placeholder="Enter Amount"
                                          />
                                          <label for="customAmount">Enter Amount</label>
                                        </div>
                                      </div>
                                      
                                      <script>
                                        const amountSelect = document.getElementById("amountSelect");
                                        const customAmountContainer = document.getElementById("customAmountContainer");
                                      
                                        // Add event listener to the dropdown
                                        amountSelect.addEventListener("change", function () {
                                          // Show or hide the custom amount input based on selection
                                          if (amountSelect.value === "other") {
                                            customAmountContainer.style.display = "block";
                                          } else {
                                            customAmountContainer.style.display = "none";
                                          }
                                        });
                                      </script>
                                      
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="border-0 form-control" placeholder="Comment" id="comment" style="height: 160px"></textarea>
                                            <label for="address">Comment</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="py-3 btn btn-primary w-100">Donate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->

   <!-- Beneficiaries Start -->
   <div class="pb-5 container-fluid service">
    <div class="container pb-5">
        <div class="pb-5 mx-auto text-center wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Beneficiaries</h4>
            <h1 class="mb-4 display-5">Beneficiaries who have been touched positively.</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="  {{ asset('asset/img/class.png') }} " class="img-fluid rounded-top w-100" alt="Image">
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
                        <img src="  {{ asset('asset/img/community.png') }} " class="img-fluid rounded-top w-100" alt="Image">
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
                        <img src="  {{ asset('asset/img/desk.png') }} " class="img-fluid rounded-top w-100" alt="Image">
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

@endsection