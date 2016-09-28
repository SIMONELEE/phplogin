<?php 
include 'header.php';
?>
<h1>PHP Login System</h1>

<?php /*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
		} else {
			echo "<p>You are not logged in!</p>";
			}
?>


</body>
</html>