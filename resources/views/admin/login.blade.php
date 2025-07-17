<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('public/assets/images/png/favicon.jpg') }}" type="image/png" />
	<link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
	<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet">
	<title>TechSupport</title>
</head>

<body>
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<img src="{{ asset('public/assets/images/png/favicon.jpg') }}" width="120"
											alt="Techsupport Logo" class="logo-icon mb-2">
									</div>
									<div class="text-center mb-4">
										<h5 class="">TechSupport</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" action="{{ route('loginsubmit') }}" method="POST">
											@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" name="email" class="form-control"
													id="inputEmailAddress" placeholder="jhon@example.com"
													value="{{ old('email') }}">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password"
														class="form-control border-end-0" id="inputChoosePassword"
														value="12345678" placeholder="Enter Password"> <a
														href="javascript:;" class="input-group-text bg-transparent"><i
															class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6 text-end"> <a
													href="{{ route('password.request') }}">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a
															href="{{ route('register') }}">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('public/assets/js/app.js') }}"></script>
</body>

</html>