<?php 

function user_exists($username) {
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' ");
	return (mysql_result($query, 0) == 1) ? true : false;
}

function user_active($username) {
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1");
	return (mysql_result($query, 0) == 1) ? true : false;
}

 ?>