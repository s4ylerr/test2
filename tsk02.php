<?php

$a = rand(0, 1000);
$b = rand(0, 1000);
echo 'a = ' . $a . ' and b =  ' . $b;

if ($a% 2 == 0) {
	echo '<p>a = ' . $a . ' and b =  ' . $b. '</p>';

} else {
	echo '<p>b = ' . $b . ' and a =  ' . $a. '</p>';

}

