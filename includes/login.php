<?php
session_start();

require 'db.php';

if (isset($_POST['login'])) {
	//Check the users input
	$email = mysqli_escape_string($db, $_POST['email']);
	$password = mysqli_escape_string($db, $_POST['password']);

	//Check if the user is registered
	$pass = md5($password);

	$query = "SELECT * FROM `customers` WHERE email = '$email'";
	$result = mysqli_query($db, $query);

	if (mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);

		//echo $user['password'];
		//Check if passwords match
		if ($user['password'] != $pass) {
			header("Location: /OneKenya/login.php?error=Incorrect Password");
			exit();

		}else{
			if ($user['email'] === $email && $user['password'] === $pass ) {
				$_SESSION['email'] = $user['email'];
				$_SESSION['first_name'] = $user['first_name'];
				$_SESSION['last_name'] = $user['last_name'];
				$_SESSION['phone'] = $user['phone'];

				header("Location: /OneKenya/index.php");
				exit();

			}else{
				header("Location: /OneKenya/login.php?error=Unknown error occured");
				exit();
			}
		}

	}else{
		header("Location: /OneKenya/login.php?error=Email is not registered");
		exit();
	}



}else{
	header("Location OneKenya/login.php");
}


?>