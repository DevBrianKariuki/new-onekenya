<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'onekenya') or die("Couldn't connect to the database");


	if (isset($_POST['add']) && isset($_FILES['product_image'])) {

		$product_name = mysqli_escape_string($db,$_POST['product_name']);
		$product_id = uniqid('ITEM-');
		$price =  mysqli_escape_string($db, $_POST['price']);
		$category =  mysqli_escape_string($db, $_POST['category']);
		$status =  mysqli_escape_string($db, $_POST['status']);
		$description = mysqli_escape_string($db, $_POST['description']);
		$date = date("Y/m/d H:i");
		$vendor = $_SESSION['shop_name'];
		
		$img_name = $_FILES['product_image']['name'];
		$img_size = $_FILES['product_image']['size'];
		$tmp_name = $_FILES['product_image']['tmp_name'];
		$error = $_FILES['product_image']['error'];


		if ($error === 0) {
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);

				$allowed_ex = array('jpg', 'jpeg', 'png');

				if (in_array($img_ex_lc, $allowed_ex)) {
					$new_image_name = strtoupper($product_name).'.'.$img_ex_lc;
					$img_upload_path = '../products/'.$new_image_name;
					move_uploaded_file($tmp_name, $img_upload_path);

					//Insert into database

					$query = "INSERT INTO `products`( `product_id`, `product_name`, `price`, `image`, `category`, `description`, `status`, `date_added`, `vendor`) VALUES ('$product_id','$product_name','$price', '$new_image_name','$category','$description','$status','$date', '$vendor')";
					mysqli_query($db, $query);
					header("Location: /OneKenya/vendor/products.php");




				}else{
					$em = "You can't upload files of this type";
					header("Location: /OneKenya/vendor/products.php?error=$em");
				}


		}else{
			$em = "Unknown error occured";
			header("Location: /OneKenya/vendor/products.php?error=$em");
		}

	}

?>