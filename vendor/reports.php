<?php 
session_start();

include './includes/db.php';
$query = "SELECT * FROM `orders`";
$result = mysqli_query($db, $query);


if(isset($_SESSION['email'])) {

?>




<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Reports</title>

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

				<!-- Simple Datatable start -->
					<div class="pd-20">
						<h4 class="text-blue h4">Monthly Order Reports</h4>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<form>
									<div class="form-group">
										<input class="form-control month-picker mb-2 mr-sm-2" placeholder="Select Month" type="text">
									</div>
								</form>
							</div>
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
												<td><?php echo $rows['customer']; ?></td>
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
					</div>
			</div>
		</div>
		<?php
			include './includes/footer.php';
		?>
	</div>
	<?php
		include './includes/datatable-js.php';
	?>
</body>
</html>


<?php
	}else{
	header("Location: login.php");
	exit();
	}

?>