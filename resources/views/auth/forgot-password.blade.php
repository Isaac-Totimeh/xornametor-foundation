<html lang="en"><head>
	<title>GAF-COURSE</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded">
	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('assets/images/logo-icon.png ') }}" type="image/x-icon">
	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<!-- [ signin-img ] start -->
<body><div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="{{asset('assets/images/auth/newlogo.png')}}" alt="" class="img-fluid" width="700px">
				<h1 class="text-white my-4">Change securely!.Change your account password and make your self more secured.</h1>
				<h4 class="text-white font-weight-normal"></h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf 
				<img src="{{ asset('assets/images/auth/auth-logo-dark.png') }}" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h4 class="mb-3 f-w-400">Reset your password</h4>
				<div class="form-group mb-4">
					<label class="floating-label" for="Username">Email address</label>
					<input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus>
				</div>
				<button class="btn btn-block btn-primary mb-4 has-ripple">Reset password<span class="ripple ripple-animate" 
                    style="height: 320px; width: 320px; animation-duration: 0.7s; animation-timing-function: linear; 
                    background: rgb(255, 255, 255); opacity: 0.4; top: -146.141px; left: -12px;"></span></button>
                    </form>
				<div class="text-center">
					
					<p class="mb-0 mt-4 text-muted">Click here to Resend the Link_<a href="{{ __('Email Password Reset Link') }}" class="f-w-400">Resend</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->
<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ripple.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
</body></html>