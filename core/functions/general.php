<?php 
function sanitize($username) {
	return mysql_real_escape_string($username);
}
 ?>