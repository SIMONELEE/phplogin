<?php 
include 'header.php';
?>
<h1>PHP Login System</h1>

<form action="login.php" method="POST">
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">LOG IN</button>
</form>

<?php /*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
		} else {
			echo "You are not logged in!";
			}
?>

<br><br><br>

<form action="logout.php">
	<button>LOG OUT</button>
</form>

</body>
</html>