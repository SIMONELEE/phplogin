<?php 
include 'header.php';


/*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
		} else {
			echo "<p>You are now signed up. <br>Please log in.</p>";
			}
?>


</body>
</html>