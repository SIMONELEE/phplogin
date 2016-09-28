<?php 
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

header("Location: index.php");
?>