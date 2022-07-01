<?php

session_start();

$errors = array();
// Connect to the database
include 'db.php';

	
	if (isset($_POST['register'])) {
		// Fetch user input
		$email = mysqli_escape_string($db, $_POST['email']);
		$username = mysqli_escape_string($db, $_POST['username']);
		$password_1 = mysqli_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_escape_string($db, $_POST['password_2']);
		$full_name = mysqli_escape_string($db, $_POST['full-name']);
		$gender = mysqli_escape_string($db, $_POST['gender']);
		$contact = mysqli_escape_string($db, $_POST['contact']);
		$shop_name = mysqli_escape_string($db, $_POST['shop-name']);
		$shop_contact = mysqli_escape_string($db, $_POST['shop-contact']);
		$agreed = ($_POST['agreed']);


		//Form validation to ensure all the fields are filled correctly
		
		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match");
		} else if (empty($agreed)) {
			array_push($errors, "Please agree to the terms and Conditions");
		}

		//Check the database to make sure the user doesn't exist
		$user_check_query = "SELECT * FROM vendors WHERE Username = '$username' or Email = '$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);


		if ($user) {
			if ($user['Username'] === $username) {
				header("Location: /OneKenya/vendor/register.php?error=username already exists");
			}
			if ($user['Email'] === $email) {
				header("Location: /OneKenya/vendor/register.php?error=email is already registered");
			}
		}

		//Insert into database
		$password = md5($password_1);
		$query = "INSERT INTO `vendors`(`Email`, `Username`, `Full_name`, `Gender`, `Contact`, `Shop_name`, `Shop_contact`, `Password`) VALUES ('$email','$username','$full_name','$gender','$contact','$shop_name','$shop_contact','$password')";

		$insert = mysqli_query($db, $query);
		$_SESSION['username'] = $email;
		header("Location: /OneKenya/vendor/login.php");

		
	} else {
		header('Location: /OneKenya/vendor/register.php');
	}

?>