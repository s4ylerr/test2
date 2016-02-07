<?php
header('content-type:text/html;charset=utf-8');

$username = $_POST['username'];
$city = $_POST['city'];

echo  $username . ", твоят любим град е " .$city ;

?>