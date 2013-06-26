<?php 
session_start();
// error_reporting(0);


require "database/connect.php"; 
require "functions/general.php"; //sanitize
require "functions/users.php";

$errors = array();

 ?>