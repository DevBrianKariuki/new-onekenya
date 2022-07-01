<?php

session_start();
//session_destroy();

//Add  to cart 
if (isset($_POST['addtocart'])) {
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$vendor = $_POST['vendor'];
	$image = $_POST['image'];

	
	if (isset($_SESSION['cart'])) {
		$items = array_column($_SESSION['cart'], 'item_name');

		if (in_array($product_name, $items)) {

			header("Location: ../shop.php?error=Item already added to cart");
		}else{
			$count = count($_SESSION['cart']);
			$_SESSION['cart'][$count] = array('item_name' => $product_name, 'price' => $price, 'vendor' => $vendor, 'image' => $image, 'Quantity' => 1);
			header("Location: ../shop.php?success=Item added to cart successfully");
		}
		
	} else {

		$_SESSION['cart'][0] = array('item_name' => $product_name, 'price' => $price, 'vendor' => $vendor, 'image' => $image, 'Quantity' => 1);
		header("Location: ../shop.php?success=Item added to cart successfully");
	}
}


//Remove from cart
if (isset($_POST['remove'])) {
	
	foreach ($_SESSION['cart'] as $key => $value) {
		//print_r($key);
		if ($value['item_name'] == $_POST['product_name']) {

			unset($_SESSION['cart'][$key]);
			$_SESSION['cart'] = array_values($_SESSION['cart']);

			if (count($_SESSION['cart']) === 0) {
				header("Location: ../cart.php?error=You have emptied the cart");
			}else{
				header("Location: ../cart.php");
			}

			

		}

	}
}


// Clear cart
if (isset($_POST['clear'])) {

	unset($_SESSION['cart']);
	header("Location: ../cart.php");

}

//Update cart

if (isset($_POST['updatecart'])) {


	for ($x=0; $x < sizeof($_SESSION['cart']); $x++) { 

		$postID = 'qty' . $_SESSION['cart'][$x]['item_name'];
		$item = $_SESSION['cart'][$x]['item_name'];
		//echo($item);

		$newQuantity = $_POST["$postID"];
		if ($newQuantity > 0) {
			$_SESSION['cart'][$x]['Quantity'] = $newQuantity;
			header("Location: ../cart.php");
		}else{
			$_SESSION['cart'][$x]['Quantity'] = $_SESSION['cart'][$x]['Quantity'] ;
			header("Location: ../cart.php");
		}
	}


}

//Add items to wishlist

if (isset($_POST['wish'])) {

	$product = $_POST['product_name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$photo = $_POST['image'];
	$availability = $_POST['availability'];

	if (isset($_SESSION['wish'])) {
		$items = array_column($_SESSION['wish'], 'item');

		if (in_array($product, $items)) {

			header("Location: ../shop.php?error=Item already added to wishlist");
		}else{
			$count = count($_SESSION['wish']);
			$_SESSION['wish'][$count] = array('item' =>  $product, 'image' =>  $photo, 'price' => $price , 'description' => $description, 'availability' => $availability);
			header("Location: ../shop.php?success=Item added to wishlist successfully");
		}


	}else{
		$_SESSION['wish'][0] = array('item' =>  $product, 'image' =>  $photo, 'price' => $price , 'description' => $description, 'availability' => $availability);
		header("Location: ../shop.php?success=Item added to wishlist successfully");
	}


}


//Product view

if (isset($_POST['productview'])) {
	$product_name = $_POST['Product_name'];
	$price = $_POST['Price'];
	$vendor = $_POST['Vendor'];
	$image = $_POST['Image'];
	$description = $_POST['Description'];

	echo $description;
	echo($image);
	$_SESSION['product'] = array('item' => $product_name, 'price' => $price, 'vendor' => $vendor, 'image' => $image, 'description' => $description);
	header("Location: ../product.php");
}


?>