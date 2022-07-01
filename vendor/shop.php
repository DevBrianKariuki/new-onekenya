<?php 
session_start();

if(isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Shop</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

</head>
<body>

	<div>
		<?php 
			include './includes/profile.php';
		?>
	</div>


	<div>
		<?php 
			include './includes/menu.php';
		?>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">

						<!--'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->
							
					<div class="row">
						<div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="profile-photo">
									<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
									<img src="vendors/images/photo8.jpg" alt="" class="avatar-photo">
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
													</div>
												</div>
												<div class="modal-footer">
													<input type="submit" value="Update" class="btn btn-primary">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5 class="text-center h5 mb-0"><?php echo $_SESSION['name']; ?></h5>
								<p class="text-center text-muted font-14">Shop Owner</p>
								<div class="profile-info">
									<ul>
										<li>
											<span><b>Email Address</b></span>
											<?php echo $_SESSION['email']; ?>
										</li>
										<li>
											<span><b>Phone Number</b></span>
											<?php echo $_SESSION['contact']; ?>
										</li>
										<li>
											<span><b>Username</b></span>
											<?php echo $_SESSION['username']; ?>
										</li>
										<li>
											<span><b>Gender</b></span>
											<?php echo $_SESSION['gender']; ?>
										</li>
									</ul>
								</div>
								<div class="profile-social">
									<h5 class="mb-20 h5 text-blue">Social Links</h5>
									<ul class="clearfix">
										<li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
						</div>



						<div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="profile-photo">
									<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
									<img src="vendors/images/photo3.jpg" alt="" class="avatar-photo">
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img id="image" src="vendors/images/photo3.jpg" alt="Shop Logo">
													</div>
												</div>
												<div class="modal-footer">
													<input type="submit" value="Update" class="btn btn-primary">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5 class="text-center h5 mb-0"><?php echo $_SESSION['shop_name']; ?></h5>
								<p class="text-center text-muted font-14">Groceries Shop</p>
								<div class="profile-info">
									<ul>
										<li>
											<span><b>Shop Name</b></span>
											<?php echo $_SESSION['shop_name']; ?>
										</li>
										<li>
											<span><b>Phone Number</b></span>
											<?php echo $_SESSION['shop_contact']; ?>
										</li>
									</ul>
								</div>
							</div>
						</div>




						<!--'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

					</div>
				</div>
			</div>
		</div>
		<div class="footer-wrap pd-20 mb-20 card-box" style="margin-top: 20px">
				Copyright ©2022 All rights reserved | OneKenya Farmers</a>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="vendors/scripts/calendar-setting.js"></script>
</body>
</html>

<?php
	}else{
	header("Location: login.php");
	exit();
	}

?>