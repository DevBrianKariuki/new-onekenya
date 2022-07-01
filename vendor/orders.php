<?php 
session_start();

include './includes/db.php';
$query = "SELECT * FROM `orders` ORDER BY ID ASC";
$result = mysqli_query($db, $query);


if(isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Orders</title>

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
				<!-- Update status Popup html Start -->
					<div class="modal fade" id="update-modal" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5>Update Order details</h5>
								</div>
								<div class="modal-body text-center font-18">
									<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
										<form>
											<div class="form-group">
												<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5" style="width: 600px">
														<option>Delivered</option>
														<option>Packed</option>
														<option>Cancelled</option>
														<option>Pending</option>
												</select>
											</div>
										</form>
									</div>
									<div class="text-right">
											<a href="#" class="btn btn-primary" data-dismiss="modal"> Update &nbsp; <i class="dw dw-edit"></i></a>
										</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Update Status Popup html End -->

				<!-- View Popup html Start -->
					<div class="modal fade bs-example-modal-lg" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md modal-dialog-centered" style="padding: 20px">
							<div class="modal-content" style="border-radius: 40px">
								<div class="card card-box">
									<h3>Order Details</h3>
									<div class="row" style="padding: 20px">
										<div class="col-5 border" style="border-radius: 5px">
											<span><b>Reference Code</b></span>
										</div>
										<div class="col-7 border" style="border-radius: 5px">
											<span class="font-weight-500">O7683432-4</span>
										</div>
										<div class="col-5 border" style="border-radius: 5px">
											<span><b>Customer</b></span>
										</div>
										<div class="col-7 border" style="border-radius: 5px">
											<span class="font-weight-500">James Mwangi</span>
										</div>
										<div class="col-5 border" style="border-radius: 5px">
											<span><b>Date Ordered</b></span>
										</div>
										<div class="col-7 border" style="border-radius: 5px">
											<span class="font-weight-500">12-05-2022</span>
										</div>
										<div class="col-5 border" style="border-radius: 5px">
											<span><b>Status</b></span>
										</div>
										<div class="col-7 border" style="border-radius: 5px">
											<span class="font-weight-500">Delivered</span>
											<a class="text-blue text-right" href="#" data-toggle="modal" data-target="#update-modal" data-backdrop="static">Update Status</a>
										</div>


											<table class="table table-striped hover">
											  <thead>
											    <tr>
											      <th scope="col">Product</th>
											      <th scope="col">Name</th>
											      <th scope="col">Price (Ksh)</th>
											      <th scope="col">Qty</th>
											    </tr>
											  </thead>
											  <tbody>
											    <tr>
											      <td scope="row"><img src="vendors/images/product-1.jpg" width="70" height="70" alt=""></td>
											      <td scope="col">Cabbage</td>
											      <td scope="col">200</td>
											      <td scope="col">56</td>
											    </tr>
											    <tr>
											      <td scope="row"><img src="vendors/images/product-1.jpg" width="70" height="70" alt=""></td>
											      <td scope="col">Potatoes</td>
											      <td scope="col">300</td>
											      <td scope="col">63</td>
											    </tr>
											    </tr>
											    <tr>
											      <td scope="row"><img src="vendors/images/product-1.jpg" width="70" height="70" alt=""></td>
											      <td scope="col">Potatoes</td>
											      <td scope="col">300</td>
											      <td scope="col">63</td>
											    </tr>
											    <tr>
											    	<div class="row">
												    	<div class="col-7 text-right">
												    		<td class="text-primary"><b>Total</b></td>
												    	</div>
												    	<div class="col-5">
												    		<td>Ksh 7,234</td>
												    	</div>
											    	</div>
											    </tr>
											  </tbody>
											</table>
							

										<div class="text-right">
											<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- View Popup html End -->
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">


							<!-- Simple Datatable start -->
								<div class="pd-20">
									<h4 class="text-blue h4">Orders</h4>
								</div>
								<div class="pb-20">
									<table class="data-table table stripe hover nowrap">
										<thead>
											<tr>
												<th class="table-plus datatable-nosort">Ref Code</th>
												<th>Customer</th>
												<th>Date Ordered</th>
												<th>Amount (Ksh)</th>
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