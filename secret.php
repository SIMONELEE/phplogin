<?php 
include 'header.php';

/*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (!isset($_SESSION['id'])){
		die("<p>Please login to see the content</p>");
		} else {
			echo "<img id='image' src='PHP_02.png' width=422px height=195px alt='PHP Login System'/> <br> <p>You made it! <br>This page is only for those who successfully logged in.</p>";
			}
?>