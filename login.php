<?php 
include 'core/init.php';

if (empty($_POST) === false)  {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		$errors[] = "Please fill the rewiured fields";
	} elseif (user_exists($username) === false) {
		$errors[] = "User Name doesn't exist";
	} elseif (user_active($username) === false) {
		$errors[] = "Account is not activated";
	} else {

		if (strlen($password) > 32) {
			$errors[] = 'Password is invalid';
		}

		$login = login($username, $password);
			if ($login === false) {
				$errors[] = "This user and password combination is wrong";
			} else {
				$_SESSION['user_id'] = $login;
				header("Location: index.php");
				exit();
			}
	}
}
include "includes/overall/header.php";

if (empty($errors) == false) {
	echo '<h2>We tried to log you in, but...</h2>';
	echo output_errors($errors);
}
include "includes/overall/footer.php";
 ?>