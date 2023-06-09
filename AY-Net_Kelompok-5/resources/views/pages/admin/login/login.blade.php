<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template">
	<meta property="og:title" content="Dompet : Payment Admin Template">
	<meta property="og:description" content="Dompet : Payment Admin Template">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Login | AY NET - Bondowoso</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{url('frontend/images/logo-ay.png')}}">
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{url('frontend/images/logo-ay.png')}}" alt="" width="80"></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{route('postlogin')}}">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                    <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                                <label class="text-label form-label" for="validationCustomUsername">Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                                </div>
                                        </div>
                                        <!-- <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Belum punya akun? <a class="text-primary" href="{{ route('register') }}">Daftar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('frontend/vendor/global/global.min.js')}}"></script>
    <script src="{{url('frontend/js/custom.min.js')}}"></script>
    <script src="{{url('frontend/js/dlabnav-init.js')}}"></script>
	<script src="{{url('frontend/js/styleSwitcher.js')}}"></script>
</body>
</html>