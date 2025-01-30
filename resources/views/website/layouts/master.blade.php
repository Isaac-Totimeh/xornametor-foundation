<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title') | {{ config('app.name') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="{{ config('app.name') }}" name="description" />
        <meta content="{{ config('app.name') }}" name="author" />
        <meta property="og:title" content="Xornametor Foundation">
        <meta property="og:description" content="To serve as a beacon of hope by providing sustainable solutions to social and economic challenges">
         <!-- Link to Favicon -->
       <link rel="icon" href=" {{ asset ('asset/img/xlogo.png') }} " type="image/x-icon">
       <!-- Alternative for PNG favicon -->
       <link rel="icon" href=" {{ asset ('asset/img/xlogo.png') }} " type="image/png">
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" href=" {{ asset ('asset/img/xlogo.png') }} ">
        <!-- Theme Color -->
        <meta name="theme-color" content="#4CAF50"> <!-- Replace #4CAF50 with your desired header color -->
        <!-- Description -->
        <meta name="description" content="To serve as a beacon of hope by providing sustainable solutions to social and economic challenges">


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{ asset('asset/lib/animate/animate.min.css') }}"/>
        <link href="{{ asset('asset/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
 <!-- Topbar Start -->
 <div class="px-5 container-fluid topbar bg-light d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="mb-2 text-center col-lg-8 text-lg-start mb-lg-0">
            <div class="flex-wrap d-flex">
                <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>GU-541-7918, Shito Street </a>
                <a href="tel:+233 244882283" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+233 244882283</a>
                <a href="mailto:info@xornametorfoundation.gh" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>info@xornametorfoundation.gh</a>
            </div>
        </div>
        <div class="text-center col-lg-4 text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Become A Member</small></a>
                <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

       @yield('content')

       @include('website.layouts.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('asset/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        

        <!-- Template Javascript -->
        <script src="{{ asset ('asset/js/main.js') }}"></script>
    </body>

</html>