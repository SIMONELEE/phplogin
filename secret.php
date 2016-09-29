<?php 
include 'header.php';

/*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo "<p>SERET PAGE FOR LOGGED IN USER </p>";
		} else {
			echo $_SESSION['id'];
			}
?>