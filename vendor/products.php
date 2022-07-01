
<?php 
session_start();

include './includes/db.php';
$vendor = $_SESSION['shop_name'];
echo $vendor;
$query = "SELECT * FROM `products` WHERE `vendor` = '$vendor' ORDER BY ID DESC";
$result = mysqli_query($db, $query);

if(isset($_SESSION['email'])) {

?>


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OneKenya - Product List</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/favicon1.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon1.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon1.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">


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


				<!-- View Popup html Start -->
				
					<div class="modal fade bs-example-modal-lg" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md modal-dialog-centered">
							<div class="modal-content" style="border-radius: 40px">
								<div class="card card-box">
									<img class="card-img-top" src="products/<?=$rows['image']?>?>" alt="Product Image">
									<div class="card-body">
										<h5 class="card-title weight-500">Product Name</h5>
										<p class="card-text">jhsjdfhjbskhbvskhdvskhhhhhcvsdchvhskvdhcvshdc ?></p>
										<h5 class="card-title weight-500">Category</h5>
										<p class="card-text">Vegetables</p>
										<h5 class="card-title weight-500">Price</h5>
										<p class="card-text">Ksh 1500</p>
										<h5 class="card-title weight-500">Status</h5>
										<p class="card-text"> Available</p>

										<div class="text-right">
											<a href="#" class="btn btn-primary" data-dismiss="modal"><i class="dw dw-edit2"></i> Update</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- View Popup html End -->
				<!-- Edit Popup html Start -->
					<div class="modal fade bs-example-modal-lg" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md modal-dialog-centered">
							<div class="modal-content" style="border-radius: 40px">
								<div class="card card-box">
									<img class="card-img-top" src="vendors/images/img2.jpg" alt="Product Name">
									<div class="card-body">
										<h5 class="card-title weight-500">Edit Product Details</h5>
										<hr>
										<form action=".includes/edit-product.php" action="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label>Product Name</label>
												<input id="productName" class="form-control" type="text" placeholder="Product Name">
											</div>
											<div class="form-group">
												<label>Price</label>
												<input id="productPrice" class="form-control" value="" type="number" placeholder="200.0">
											</div>
												<div class="form-group">
												<label>Category</label>
												<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
														<option>Vegetables</option>
														<option>Fruits</option>
														<option>Juice</option>
														<option>Dried</option>
												</select>
											</div>
											<div class="form-group">
												<label>Description</label>
												<textarea id="productDescription" class="form-control"></textarea>
											</div>

											<div class="text-right">
												<button type="submit" name="edit" class="btn btn-primary" data-dismiss="modal"><i class="dw dw-edit2"></i> Update</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Edit Popup html End -->
				<!-- Delete Popup html Start -->
					<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered max-width-500" role="document">
							<div class="modal-content">
								<div class="modal-body text-center font-18">
									<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to delete?</h4>
									<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
										<div class="col-6">
											<button type="button" class="btn btn-success border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
											NO
										</div>
										<form action="includes/add-product.php" method="POST">
										<div class="col-6">
											<input type="hidden" name="yes">
											<input type="hidden" name="product_name" value=<?php echo $row['product_name'] ?>>
											<button type="submit" name="delete" class="btn btn-danger border-radius-100 btn-block confirmation-btn" ><i class="fa fa-check"></i></button>
											YES
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Delete Popup html End -->

				<!-- View Popup html End -->
				<!-- Add  Product Popup html Start -->
					<div class="modal fade bs-example-modal-lg" id="new-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md modal-dialog-centered">
							<div class="modal-content" style="border-radius: 40px">
								<div class="card card-box">
									<div class="card-body">
										<div class="text-right">
											<label  data-dismiss="modal">X</label>
										</div>
										<h5 class="card-title weight-500">Add Product</h5>
										<hr>
										<form action="includes/add-product.php" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label>Product Name</label>
												<input class="form-control" name="product_name" type="text" placeholder="Product Name" required>
											</div>
											<div class="form-group">
												<label>Price</label>
												<input class="form-control" name="price" value="" type="number" placeholder="200.0" required>
											</div>
											<div class="form-group">
												<label>Product Image</label>
												<input class="form-control" name="product_image" type="file" placeholder="Product Image" required>
											</div>
											<div class="form-group">
												<label>Category</label>
												<select class="selectpicker form-control" name="category" data-style="btn-outline-primary" data-size="5" required>
														<option value="Vegetables">Vegetables</option>
														<option value="Fruits">Fruits</option>
														<option value="Juice">Juice</option>
														<option value="Dried">Dried</option>
												</select>
											</div>
											<div class="form-group">
												<label>Status</label>
												<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5" name="status" required>
														<option value="Available">In Stock</option>
														<option value="Out of Stock">Out of Stock</option>
												</select>
											</div>
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" name="description" required></textarea>
											</div>

											<div class="form-group text-right ">
												<button type="submit" class="btn btn-primary" name="add" > Add &nbsp; <i class="dw dw-add"></i></button>
											</div>
										</form>
	
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Add Product Popup html End -->

	<div class="main-container">
		<div class="card-box mb-30">
				<h2 class="h4 pd-20">Products <?php //echo $vendor; ?></h2>
				<div class="col">
					<button class="btn btn-primary" data-toggle="modal" data-target="#new-modal" data-backdrop="static" style="width: 185px;  margin-top: -30px; float: right;"><b>New Product &nbsp;<i class="dw dw-add"></i> </b></button>
				</div>
				<div style="margin-top: 40px"></div>
				<table class="data-table table hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Name</th>
							<th>Category</th>
							<th>Price (Ksh)</th>
							<th>Date Added</th>
							<th>Status</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

								while ($rows = mysqli_fetch_assoc($result)) {

									$_SESSION['product_delete'] = $rows['product_name'];

							?>
						<tr>
							<td class="table-plus">
								<img src="products/<?=$rows['image']?>?>" width="70" height="70" alt="">
							</td>
							<td >
								<h5 class="font-16" id="product"><?php echo $rows['product_name']; ?></h5>
								<?php echo $_SESSION['shop_name']; ?>
							</td>
							<td><?php echo $rows['category']; ?></td>
							<td id="price"><?php echo $rows['price']; ?></td>
							<td id=""><?php echo $rows['date_added']; ?></td>
							<td id="status"><?php echo $rows['status']; ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" type="button" id="success-modal-btn" data-toggle="modal" data-target="#view-modal" data-backdrop="static"><i class="dw dw-eye"></i>View</a>
										<a class="dropdown-item" onclick="viewProduct()" type="button" id="success-modal-btn" data-toggle="modal" data-target="#edit-modal" data-backdrop="static"><i class="dw dw-edit2"></i>Edit</a>
										<a class="dropdown-item" type="button" id="success-modal-btn" data-toggle="modal" data-target="#success-modal" data-backdrop="static"><i class="dw dw-delete-3"></i>Delete</a>
									</div>
								</div>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
			<?php
				include './includes/footer.php';
			?>
	</div>

	<?php
		include './includes/datatable-js.php';
	?>

	<script>
		
		function viewProduct() {
			let product = document.getElementById('product').innerHTML;
			let price = document.getElementById('price').innerHTML;
			alert(product);
			alert(price);
			document.getElementById('productName').setText = product;
			document.getElementById('productPrice').setText = price;

		}

	</script>



</body>
</html>

<?php
	}else{
	header("Location: login.php");
	exit();
	}

?>