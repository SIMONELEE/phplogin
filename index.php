<?php 
include 'header.php';

/*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
		} else {
			echo "<p>Welcome. <br>Please sign up or log in.</p>";
			}
?>


</body>
</html>