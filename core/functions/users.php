<?php 

// check if login session is set, returns bool
function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}


//returns true is passed username exists in db
function user_exists($username) { 
	$username = sanitize($username); 	//sanitize passed username before quering db
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' ");
	return (mysql_result($query, 0) == 1) ? true : false;
}

//returns true is passed username has active status equal to '1'
function user_active($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1");
	return (mysql_result($query, 0) == 1) ? true : false;
}

function user_id_from_username($username) {
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'"), 0, 'user_id');
}

function login($username, $password) {
	$user_id = user_id_from_username($username);

	$username = sanitize($username);
	$password = md5($password);

	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password' "),0) == 1) ? $user_id : false;
}

 ?>