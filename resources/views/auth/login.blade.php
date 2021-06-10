
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Nlyone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.png')}}" type="image/png">

	<link href='{{asset("https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap")}}' rel="stylesheet">

	<link rel="stylesheet" href='{{asset("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css")}}'>

	<link rel="stylesheet" href='{{ asset("style.css")}}'>

	</head>
	<body style="background-color:#1D2026">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color:white" class="heading-section">Masuk Ke Nlyone</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to Nlyone</h2>
								<p>Belum Punya Akun?</p>
								<a href="register" class="btn btn-white btn-outline-white">Daftar Sekarang</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Masuk</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="login" class="signin-form" method="POST">
                                @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input type="text" class="form-control" name="email" placeholder="Email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="password" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        @if (session()->get('error'))
                            <div class="w-50 text-left">
                                <a style="color:rgb(255, 113, 113); text-decoration: none">{{ session('error') }}</a>
                            </div>
                        @endif
                        @if (session()->get('success'))
                            <div class="w-50 text-left">
                                <a style="color:rgb(113, 215, 255); text-decoration: none">{{ session('success') }}</a>
                            </div>
                        @endif
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src='{{("js/jquery.min.js")}}'></script>
  <script src='{{("js/popper.js")}}'></script>
  <script src='{{("js/bootstrap.min.js")}}'></script>
  <script src='{{("js/main.js")}}'></script>

	</body>
</html>

