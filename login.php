<?php 
session_start();

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "<p>Your username or password is incorrect!</p>";
	}
	else {
		$_SESSION['id'] = $row['id']; //This is the ID from the database
		//Testing: echo "You are logged in!";
		}
		
header("Location: index.php");
?>