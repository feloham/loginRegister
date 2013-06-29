<?php 
include 'core/init.php';
include "includes/overall/header.php";
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
		$login = login($username, $password);
			if ($login === false) {
				$errors[] = "This user and password combination is wrong";
			} else {
				$_SESSION['user_id'] = $login;
				header("Location: index.php");
				exit();
			}
	}

	print_r($errors);
}

include "includes/overall/footer.php";
 ?>