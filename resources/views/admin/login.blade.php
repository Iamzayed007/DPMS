<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>MEDIC_BD - Login</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('backend/assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/font-awesome.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/style.css')}}">

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
                            <h1 class="text-light">MEDI<span class="text-success">C_BD</span> </h1>
							{{-- <img class="img-fluid" src="{{url('backend/assets/img/logo-white.png')}}" alt="Logo"> --}}
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">

								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<!-- Form -->
                                <form method="post" action=" {{route('lo')}} ">
                                    @csrf
                                    @error('email')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
									<div class="form-group">
										<input name="email" class="form-control @error('email') alert alert-danger @enderror" type="text" placeholder="Email">
									</div>

                                    @error('password')
                                    <div class="error">
                                     {{ $message }}
                                     </div>
                                     @enderror

									<div class="form-group">
										<input name="password" class="form-control @error('password') alert alert-danger @enderror" type="password" placeholder="Password">

									</div>

									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>


							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{url('backend/assets/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{url('backend/assets/js/script.js')}}"></script>

    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>
