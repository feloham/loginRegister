<?php 

include 'core/init.php';

if (empty($_POST) === false)  {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		$errors[] = "Please enter your User Name and Password.";
	} elseif (user_exists($username) === false) {
		$errors[] = "User Name doesn't exist. Check again or Register";
	} elseif (user_active($username) === false) {
		$errors[] = "You havn't activated your account yet, Check your mail for instructions";
	} else {

	}

	print_r($errors);
}

 ?>