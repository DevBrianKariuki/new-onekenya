<?php
session_start();

if (isset($_POST['shipping'])) {
	$county = $_POST['county'];
	$town = $_POST['town'];

	switch ($county) {
		case 'select county':
			$shipping_fee = 0;
			$_SESSION['county'] = "";
			break;
			header("Location: ../cart.php");
		case 'Nairobi':
			$shipping_fee = 150;
			break;
			header("Location: ../cart.php");
		case 'Nakuru':
			$shipping_fee = 420;
			break;
			header("Location: ../cart.php");
		case 'Kiambu':
			$shipping_fee = 250;
			break;
			header("Location: ../cart.php");
		case 'Narok':
			$shipping_fee = 390;
			break;
			header("Location: ../cart.php");
		case 'Machakos':
			$shipping_fee = 270;
			break;
			header("Location: ../cart.php");
		
		default:
			$shipping_fee = 0;
			break;
			header("Location: ../cart.php");
	}
	$_SESSION['town'] = $town;
	$_SESSION['county'] = $county;
	$_SESSION['shipping'] = $shipping_fee;
	header("Location: ../cart.php");
}

?>