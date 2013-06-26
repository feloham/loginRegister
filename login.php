<?php 
include 'core/init.php';

if (empty($_POST) === false)  {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		$errors[] = "Please enter User Name and Password.";
	} elseif (user_exists($username) === false) {
		$errors[] = "User Name doesn't exist";
	} elseif (user_active($username) === false) {
		$errors[] = "Account is not Activated";
	} else {

	}

	print_r($errors);
}

 ?>