<?php 
session_start();

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

/* Password hashing variables*/
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

/*If the $hash is false = error message
if ($hash == 0) {
		echo "Error";
	} else {
/* Select from the databse 

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "<p>Your username or password is incorrect!</p>";
	}
	else {
		$_SESSION['id'] = $row['id'];//This is the ID from the database
		header("Location: secret.php");	
		//echo "You are logged in!";
		}
}*/

if ($password_valid) {
	/*CERATING SESSION*/
		$_SESSION['id'] = $row['id'];
		header("Location: secret.php");	
	} else {
		echo "<p>Your username or password is incorrect</p>";}
		
		?>