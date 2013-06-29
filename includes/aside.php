<aside id="Just_A_Random_ID">
    
<?php
if (logged_in() == true) {
	echo "logged in";
} else {
	include "includes/widgets/login.php";
	include "includes/widgets/stats.php";
}
?>

</aside>