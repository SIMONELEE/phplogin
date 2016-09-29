<?php
session_start(); 
include 'dbh.php';

$first = filter_input(INPUT_POST, 'first') or header('Location: index.php');
$last = filter_input(INPUT_POST, 'last') or die('Missing/illegal age parameter.');
$uid = filter_input(INPUT_POST, 'uid') or die('Missing/illegal email parameter.');
$pwd = filter_input(INPUT_POST, 'pwd') or die('Missing/illegal name parameter.');

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$pwdh = password_hash($pwd, PASSWORD_DEFAULT);
$sql = 'INSERT INTO user (first, last, uid, pwd) VALUES (?,?,?,?)';
echo $sql;

require_once 'dbh.php';
$stmt = $conn->prepare($sql); /*Prepare the parametres*/
$stmt->bind_param('ssss', $first, $last, $uid, $pwdh);
$stmt->execute(); /*execute what is told above*/


header("Location: loginpage.php");

?>