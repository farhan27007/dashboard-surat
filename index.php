<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
	<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
	<div id="auth">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5">
									<p class="mt-5 d-none d-sm-block">
										<img src="assets/images/avatar/login-ilustration.svg" class="img-fluid" alt="">
									</p>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1"></div>
								<div class="col-lg-6 col-md-6 col-sm-6 mt-5">
									<div class="mb-3 text-center-xs">
										<p class="d-sm-none d-md-none d-lg-none">
											<i data-feather="user" class="icon-login-user"></i>
										</p>
										<h3 class="login-txt">Log In</h3>
										<p>Selamat datang di aplikasi manajemen surat, Silahkan isi Username dan Password anda</p>
									</div>
									<form action="">

										<div class="form-group position-relative has-icon-left">
											<label for="username">Username</label>
											<div class="position-relative mb-1">
												<input type="text" class="form-control" id="username" placeholder="Username anda..">
												<div class="form-control-icon">
													<i data-feather="user"></i>
												</div>
											</div>
											<small class="form-text text-danger fsz-12">Username harus diisi !!</small>
										</div>

										<div class="form-group position-relative has-icon-left">
											<div class="clearfix">
												<label for="password">Password</label>
											</div>
											<div class="position-relative mb-1">
												<input type="password" class="form-control" id="password" placeholder="Password anda..">
												<div class="form-control-icon">
													<i data-feather="lock"></i>
												</div>
											</div>
											<small class="form-text text-danger fsz-12">Password harus diisi !!</small>
										</div>

										<div class='form-check clearfix my-4'>
											<div class="checkbox float-left">
												<input type="checkbox" id="checkbox1" class='form-check-input form-check-success' >
												<label for="checkbox1">Sembunyikan password</label>
											</div>
										</div>


										<div class="clearfix">
											<button class="btn btn-save btn-login-xs btn-lg float-right">Login</button>
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
</body>
</html>

<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/main.js"></script>
