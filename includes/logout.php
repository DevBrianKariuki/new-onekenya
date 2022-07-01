<?php

	session_start();
	unset($_SESSION['cart']);
	unset($_SESSION['email']);
	session_destroy();
	header("Location: ../login.php");


?>