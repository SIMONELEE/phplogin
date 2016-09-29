<?php 
include 'header.php';
?>

<?php 
/*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
		} else {
			echo "<p>You are not logged in. <br> Please sign up!</p>";
			}
?>

<br>

<?php 
if (isset($_SESSION['id'])){
		echo "<p>You are already logged in!</p>";
		} else {
			echo "<form id='signupform' action='signup.php' method='POST'>
					<input type='text' name='first' placeholder='First Name'><br>
					<input type='text' name='last' placeholder='Last Name'><br>
					<input type='text' name='uid' placeholder='Username'><br>
					<input type='password' name='pwd' placeholder='Password'><br>
					<button type='submit'>SIGN UP</button>
				</form>";
			}

?>




</body>
</html>