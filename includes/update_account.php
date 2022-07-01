<?php
session_start();

require 'db.php';


if (isset($_POST['update'])) {
	//Collect users input
	$firstName = mysqli_escape_string($db, $_POST['firstName']);
	$lastName = mysqli_escape_string($db, $_POST['lastName']);
	$phone = mysqli_escape_string($db, $_POST['phone']);
	$password = mysqli_escape_string($db, $_POST['password']);
	$current = mysqli_escape_string($db, $_POST['currentpassword']);


	//Check if passwords match
	$search_email = $_SESSION['email'];
	$query = "SELECT * FROM `customers` WHERE email = '$search_email'";
	$result = mysqli_query($db, $query);

	if (mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);
		$currentPassword = md5($current);
		

		if ($currentPassword != $user['password']) {
			header("Location: ../update.php?error=Please enter the correct current password");
			exit();
		}

		if ($currentPassword === $user['password']) {
			$pass = md5($password);
			$query = "UPDATE `customers` SET `first_name`='$firstName',`last_name`='$lastName',`phone`='$phone',`password`='$pass' WHERE email = '$search_email'";

			if (mysqli_query($db, $query) === true) {
			 	header("Location: ../update.php?success=Your account details have been updated succesfully");
			}else{
				header("Location: ../update.php?error=An error occured");
			}
			
		}

	}else{
		header("Location: ../update.php?error=A technical error occured");
		exit();
	}

}else{
	header("Location: ../login.php");
}

?>