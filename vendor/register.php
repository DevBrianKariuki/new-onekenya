<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Register</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon1.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon1png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.phpl">
					<img src="vendors/images/onekenya.png" style="margin-top: -40px">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php" class="text-success">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col-lg-3">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-xl-9 col-md-9 col-lg-9" style="padding: 10px">
					<div class="register-box bg-white box-shadow border-radius-10"style="padding: 30px">
						<div class="wizard-content">
							<form action="./includes/registration.php" method="POST" class="tab-wizard2 wizard-circle wizard">
								<!--<?php //include './includes/errors.php'; ?>-->
								<h5 style="padding: 10px">Basic Account Credentials</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email Address <span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="email"  name="email" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="username" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="password" name="password_1" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="password" name="password_2" class="form-control" required>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5 style="padding: 10px">Personal Information</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Full Name<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="full-name" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Gender<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="female">Female</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Contact<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="contact" class="form-control">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 3 -->
								<h5 style="padding: 10px">Shop Details</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Shop Name<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="shop-name" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Contact<span style="color: red">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="shop-contact" class="form-control">
											</div>
										</div>
										<!--<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Shop Logo </label>
											<div class="col-sm-8">
												<input type="file" name="shop-logo" class="form-control">
											</div>-->
										</div>
										<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" name="agreed" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and privacy policy</label>
										</div>
										<div>
											<button type="submit" class="btn btn-success" name="register"><b>Register</b></button>
										</div>
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Registration Successful</h3>
					<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
					Please login to your account
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.php" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<!--<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>-->
</body>

</html>