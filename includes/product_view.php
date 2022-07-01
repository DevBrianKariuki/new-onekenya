<?php 
include 'db.php';

if (isset($_POST['productview'])) {
	echo("Hello");
	$product =  $_POST['product'];
	echo $product;
}



 ?>