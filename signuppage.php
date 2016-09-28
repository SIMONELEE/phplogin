<?php 
include 'header.php';
?>

<?php /*if the session has been set, then echo the id or echo "You are not logged in".*/
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
		} else {
			echo "You are not logged in!";
			}
?>

<br><br><br>

<?php 
if (isset($_SESSION['id'])){
		echo "You are already logged in!";
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