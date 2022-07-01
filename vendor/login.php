<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Login</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon1.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon1.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/onekenya.png" style="margin-top: -40px">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="register.php" style="color: green">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-success">Sign in to OneKenya</h2>
						</div>
							<?php if (isset($_GET['error'])) { ?>
				              <div class="text-danger text-center">
				                <?php echo $_GET['error']; ?>
				              </div>
				           <?php } ?>
						<form action="./includes/login-validation.php" method="POST" class="needs-validation">
							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" style="color: green" class="custom-control-input" name="remember" id="customCheck1">
										<label class="custom-control-label" style="color:green" for="customCheck1">Remember Me</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
											<input class="btn btn-success btn-lg btn-block" type="submit" value="Sign In" name="submit">
										<!--<a class="btn btn-primary btn-lg btn-block" hre>Sign In</a>-->
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-success btn-lg btn-block" href="register.php">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>