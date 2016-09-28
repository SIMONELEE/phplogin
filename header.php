<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Login System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

<header>
	<nav>
    	<ul>
        	<li><a href="index.php">HOME</a></li>
            <?php 
				if (isset($_SESSION['id'])){
			echo "<form action='logout.php'>
					<button>LOG OUT</button>
				</form>";
			} else {
				echo "<form action='login.php' method='POST'>
					<input type='text' name='uid' placeholder='Username'>
					<input type='password' name='pwd' placeholder='Password'>
					<button type='submit'>LOG IN</button>
				</form>";
				}		
				
			?>
            <li><a href="signuppage.php">SIGN UP</a></li>
        </ul>
    </nav>
</header>