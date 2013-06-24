<?php 
$error_connect = "Sorry, wer'e experiencing some downtime.";
mysql_connect('localhost', 'root', 'root') or die($error_connect);
mysql_select_db('lr');

 ?>