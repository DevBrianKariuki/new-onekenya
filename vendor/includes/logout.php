<?php

if (isset($_SESSION['email'])) {
	session_destroy();
	header('location: /OneKenya/vendor/login.php');
} else{
	header('location: /OneKenya/vendor/login.php');
	exit();
}
?>