<?php
session_start();

include 'db.php';

if (isset($_POST['submit'])) {
	if (isset($_POST['email']) && isset($_POST['password'])) {

		$email = mysqli_escape_string($db, $_POST['email']);
		$password = mysqli_escape_string($db, $_POST['password']);
		$remember = ($_POST['remember']);
		$pass = md5($password);

		if (isset($rem)) {
			# code...
		}
		

		$query = "SELECT * FROM `vendors` WHERE Email = '$email' AND Password = '$pass'";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			//echo $row['Email'];

			if ($row['Email'] === $email && $row['Password'] === $pass) {
				if (isset($remember)) {
					setcookie('email', $email ,time()+60*60*7);
				}
				$_SESSION['email'] = $row['Email'];
				$_SESSION['name'] = $row['Full_name'];
				$_SESSION['username'] = $row['Username'];
				$_SESSION['contact'] = $row['Contact'];
				$_SESSION['gender'] = $row['Gender'];
				$_SESSION['shop_name'] = $row['Shop_name'];
				$_SESSION['shop_contact'] = $row['Shop_contact'];

				header("Location: /OneKenya/vendor/index.php");
				exit();

			}else{
				echo "<script>alert('Incorrect Username or Password')</script>";
				header("Location: /OneKenya/vendor/login.php?error=Incorrect Email or Password");
				exit();
			}

		}else{
			echo "<script>alert('Incorrect Username or Password')</script>";
			header("Location: /OneKenya/vendor/login.php?error=Incorrect Email or Password");
			exit();
		}

		
		

	}
}else {
	header("Location: ../login.php");
	exit();
}

?>