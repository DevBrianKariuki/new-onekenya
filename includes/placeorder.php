<?php

session_start();

if (isset($_POST['placeorder'])) {
	$_SESSION['grand-total'] = $_POST['money'];
	header("Location: ../checkout.php");
}


?>