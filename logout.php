<?php 
session_start();

/*Going to end (destroy) the session when logged out*/
session_destroy();

header("Location: index.php");
?>