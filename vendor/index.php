<?php 
session_start();

include './includes/db.php';
$query = "SELECT * FROM `orders` LIMIT 5";
$result = mysqli_query($db, $query);

if(isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Online shop for Groceries,Vegetables,Cereals</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
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
		<div class="xs-pd-20-10 pd-ltr-20">

			<div class="title pb-20">
				<h2 class="h3 mb-0">Electron Ventures Ltd</h2>
			</div>

			<div class="card-box pd-20 height-100-p mb-30" >
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/photo8.jpg" alt="" style="max-height: 200px">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue"><?php echo $_SESSION['name']; ?></div>
						</h4>
						<p class="font-18 max-width-600">To OneKenya Farmers,its always our pleasure to have you around</p>
					</div>
				</div>
			</div>

			<div class="row pb-10">
				<div class="col-xl-4 col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
								<div class="widget-data">
									<a href="orders.php">
										<div class="weight-700 font-24 text-dark">43</div>
										<div class="font-14 text-secondary weight-500">Orders</div>
									</a>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-list"></i></div>
								</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<a href="products.php">
									<div class="weight-700 font-24 text-dark">15</div>
									<div class="font-14 text-secondary weight-500">Products</div>
								</a>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><span class="icon-copy dw dw-file"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<a href="earnings.php">
									<div class="weight-700 font-24 text-dark">Ksh 187,543</div>
									<div class="font-14 text-secondary weight-500">Total Earnings</div>
								</a>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row pb-10">
				<div class="col-md-4 mb-20">
					<div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
						<div class="d-flex justify-content-between pb-20 text-white">
							<div class="icon h1 text-white">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
								<!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
							</div>
							<div class="font-14 text-right">
								<div><i class="icon-copy ion-arrow-up-c"></i> 5.45%</div>
								<div class="font-12">Since last month</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-end">
							<div class="text-white">
								<div class="font-14">Sales</div>
								<div class="font-24 weight-500">186</div>
							</div>
							<div class="max-width-150">
								<div id="appointment-chart"></div>
							</div>
						</div>
					</div>
					<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
						<div class="d-flex justify-content-between pb-20 text-white">
							<div class="icon h1 text-white">
								<i class="fa fa-user-o" aria-hidden="true"></i>
							</div>
							<div class="font-14 text-right">
								<div><i class="icon-copy ion-arrow-down-c"></i>3.69%</div>
								<div class="font-12">Since last month</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-end">
							<div class="text-white">
								<div class="font-14">Customers</div>
								<div class="font-24 weight-500">300</div>
							</div>
							<div class="max-width-150">
								<div id="surgery-chart"></div>
							</div>
						</div>
					</div>
				</div>
				<!--===================================================================================================================================================================-->
				<div class="col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p pd-20 min-height-200px">
						<div class="d-flex justify-content-between pb-10">
							<div class="h5 mb-0">Top Customers</div>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
								</div>
							</div>
						</div>
						<div class="user-list">
							<ul>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="vendors/images/photo1.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">50k</span>
											<div class="font-14 weight-600">Dr. Maina Kingangi</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">samuelmwangi@gmail.com</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Thank</a>
									</div>
								</li>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="vendors/images/photo2.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">33k</span>
											<div class="font-14 weight-600">Charles Kim</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">samuelmwangi@gmail.com</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Thank</a>
									</div>
								</li>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="vendors/images/photo3.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">67k</span>
											<div class="font-14 weight-600">Daniel Kemboi</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">samuelmwangi@gmail.com</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Thank</a>
									</div>
								</li>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="vendors/images/photo4.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">35k</span>
											<div class="font-14 weight-600">Samuel Mwangi</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">samuelmwangi@gmail.com</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Thank</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p pd-20 min-height-200px">
						<div class="d-flex justify-content-between">
							<div class="h5 mb-0">Sales Report</div>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</div>

						<div id="diseases-chart"></div>
					</div>
				</div>
			</div>



			<div class="card-box pb-10">
				<!-- Simple Datatable start -->
								<div class="pd-20">
									<h4 class="text-blue h4">Recent Orders</h4>
								</div>
								<div class="pb-20">
									<table class="data-table table stripe hover nowrap">
										<thead>
											<tr>
												<th class="table-plus datatable-nosort">Ref Code</th>
												<th>Date Ordered</th>
												<th>Customer</th>
												<th>Amount</th>
												<th>Status</th>
												<th class="datatable-nosort">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php

													while ($rows = mysqli_fetch_assoc($result)) {

												?>
												<tr>
												<td class="table-plus"><?php echo $rows['ref_code']; ?></td>
												<td><?php echo $rows['first_name'] . " " . $rows['last_name']; ?></td>
												<td><?php echo $rows['date_ordered']; ?></td>
												<td><?php echo $rows['amount']; ?></td>
												<td><?php echo $rows['status']; ?></td>
												<td>
													<div class="dropdown">
														<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
															<i class="dw dw-more"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
															<a class="dropdown-item" type="button" id="success-modal-btn" data-toggle="modal" data-target="#view-modal" data-backdrop="static"><i class="dw dw-eye"></i> View</a>
														</div>
													</div>
												</td>
											</tr>
											<?php
												}
											?>
											
										</tbody>
									</table>
								</div>
							</div>
				<!-- Simple Datatable End -->
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
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard3.js"></script>
</body>
</html>

<?php
	}else{
	header("Location: login.php");
	exit();
	}

?>