<?php 
session_start();

if(isset($_SESSION['email'])) {

?>



<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Earnings</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/favicon1.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon1.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon16.png">

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

							<!--'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

							<div class="row">
								<div class="col-md-6 mb-30">
									<div class="pd-20 card-box height-100-p">
										<h4 class="h4 text-blue">Total Money Earned</h4>
										<div id="chart8"></div>
									</div>
								</div>
								<div class="col-md-6 mb-30">
									<div class="pd-20 card-box height-100-p">
										<h4 class="h4 text-blue">Total Item Sales</h4>
										<div id="chart9"></div>
									</div>
								</div>
							</div>

							<div class="bg-white pd-20 card-box mb-30">
								<h4 class="h4 text-blue">Earnings</h4>
								<div id="chart1"></div>
							</div>

							<div class="bg-white pd-20 card-box mb-30">
								<h4 class="h4 text-blue">Earnings per item</h4>
								<div id="chart3"></div>
							</div>

							<!--'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

						</div>
					</div>
			</div>
		</div>
		<?php
				include './includes/footer.php';
			?>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="vendors/scripts/calendar-setting.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="vendors/scripts/apexcharts-setting.js"></script>
</body>
</html>



<?php
	}else{
	header("Location: login.php");
	exit();
	}

?>