<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Login System</title>
</head>
<body>
<h1>PHP Login System</h1>

<form action="login.php" method="POST">
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">LOG IN</button>
</form>

<br><br><br>

<form action="signup.php" method="POST">
	<input type="text" name="first" placeholder="First Name"><br>
    <input type="text" name="last" placeholder="Last Name"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">SIGN UP</button>
</form>

</body>
</html>