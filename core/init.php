<?php 
session_start();
// error_reporting(0);


require "database/connect.php"; //connect to database and select table
require "functions/general.php"; //sanitize inputs
require "functions/users.php"; //user checking functions

$errors = array();

 ?>