<?php 
header('content-type:text/html;charset=utf-8');
$a = rand(1, 20);
$b = rand(1, 20);

echo '<p> a = '. $a .'</p>';
echo '<p>b = ' .$b. '</p>';

if ($a > $b) {
	echo $a. ' е по голямо от '. $b;
}else {
	echo $b." е по голямо от ".$a;
}


 ?>