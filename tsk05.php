<?php 

$userName = 'Jhon';
$password = 'jhon321';


// user input 

$userName1 = 'Jhon';
$password1 = 'jhon321';

if ($userName1 == $userName) {
	if ($password1 == $password) {
		echo "Welcome, $userName !!!";
	} else {
		echo "Wrong password !!!!";
	}// if/else pass !!!
} else {
	echo "Wrong Username !!!";
} // if/else usarname 