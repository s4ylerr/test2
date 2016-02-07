<?php 
session_start();
echo "Hello  ".$_SESSION['user'];
 ?>
 <br>
 <a href="logout.php">logout</a>