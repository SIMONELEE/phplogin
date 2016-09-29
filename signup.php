<?php
session_start(); 
include 'dbh.php';

$first = filter_input(INPUT_POST, 'first') or header('Location: index.php');
$last = filter_input(INPUT_POST, 'last') or die('Missing/illegal age parameter.');
$uid = filter_input(INPUT_POST, 'uid') or die('Missing/illegal email parameter.');
$pwd = filter_input(INPUT_POST, 'pwd') or die('Missing/illegal name parameter.');
/*die = php engine to stop the operation and don't evaluate further
if (!$check){ 
    header('Location: http://www.eguard.comli.com/theme2/login.php'); 
}


*/

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = 'INSERT INTO user (first, last, uid, pwd) VALUES (?,?,?,?)';
echo $sql;

require_once 'dbh.php';
$stmt = $conn->prepare($sql); /*Prepare the parametres*/
$stmt->bind_param('ssss', $first, $last, $uid, $pwd); /*tells the parameters = string, string and INT*/
$stmt->execute(); /*execute what is told above*/


header("Location: loginpage.php");


/* '$first', '$last', '$uid', '$pwd')";
$result = mysqli_query($conn, $sql);

$sql = 'INSERT INTO persons (name, email, age) VALUES (?,?,?)'; 
echo $sql;

/*Use parameterisation - the database is told how to read the strings and then execute*/
/*
require_once 'dbcon.php';
$stmt = $link->prepare($sql); /*Prepare the parametres*/
/*$stmt->bind_param('ssi', $n, $e, $a); /*tells the parameters = string, string and INT*/
/*$stmt->execute(); /*execute what is told above*/

?>