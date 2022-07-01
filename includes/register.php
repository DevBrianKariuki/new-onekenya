<?php
session_start();

require 'db.php';

if (isset($_POST['register'])) {
	//Collect users input
	$firstName = mysqli_escape_string($db, $_POST['first_name']);
	$lastName = mysqli_escape_string($db, $_POST['last_name']);
	$email = mysqli_escape_string($db, $_POST['email']);
	$phone = mysqli_escape_string($db, $_POST['phone']);
	$password_1 = mysqli_escape_string($db, $_POST['password1']);
	$password_2 = mysqli_escape_string($db, $_POST['password2']);

	if (strlen($phone) < 10 or strlen($phone) > 10 and !is_numeric($phone)) {
		header("Location: /OneKenya/register.php?error=Please enter a valid phone number");
	} else if (strlen($password_1) < 6) {
		header("Location: /OneKenya/register.php?error=Password should be more than 6 characters");
	}else if ($password_1 != $password_2) {
		header("Location: /OneKenya/register.php?error=Passwords do not match");
	}else {
		//Check if the user is already registered
		$query = "SELECT * FROM `customers` where `email` = '$email'";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			$user = mysqli_fetch_assoc($result);

			if ($user['email'] === $email) {
				header("Location: /OneKenya/register.php?error=Email is already registered");
				exit();
			}
		}else{
			//Insert the user into the database
			$pass = md5($password1);
			$insert = "INSERT INTO `customers`(`first_name`,`last_name`, `email`, `phone`, `password`) VALUES ('$firstName','$lastName','$email','$phone','$pass')";

			if (mysqli_query($db, $insert) === true) {
				header("Location: /ONEKENYA1/index.php");
				$_SESSION['email'] = $user['email'];
				$_SESSION['first_name'] = $user['first_name'];
				$_SESSION['last_name'] = $user['last_name'];
				$_SESSION['phone'] = $user['phone'];
			}else{
				header("Location: /OneKenya/register.php?error=An unknown error occured");
			}
		}
	}


}else{
	header("Location: /OneKenya/register.php");
	exit();
}


?> 