<?php
session_start(); 

include 'dbh.php';


$first = filter_input(INPUT_POST, 'first') or die('Please fill out all fields for sign up.');
$last = filter_input(INPUT_POST, 'last') or die('Please fill out all fields for sign up.');
$uid = filter_input(INPUT_POST, 'uid') or die('Please fill out all fields for sign up.');
$pwd = filter_input(INPUT_POST, 'pwd') or die('Please fill out all fields for sign up.');

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

/* Added hashing to the password*/
$pwdh = password_hash($pwd, PASSWORD_DEFAULT);
$sql = 'INSERT INTO user (first, last, uid, pwd) VALUES (?,?,?,?)';
//echo $sql;

require_once 'dbh.php';
$stmt = $conn->prepare($sql); /*Prepare the parametres*/
$stmt->bind_param('ssss', $first, $last, $uid, $pwdh); /*Bind the parameters - incl. the password hashing */
$stmt->execute(); /*execute what is told above*/


header("Location: loginpage.php");

?>