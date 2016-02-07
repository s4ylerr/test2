<?php 
header('content-type:text/html;charset=utf-8');
$frName = array('Гриша' , 'Котов ', 'Пачо','Калфи','Ичи','Яна' );

foreach ($frName as $key => $value) {
	echo "<p>" .$value." е мой приятел </p>";
}


 ?>