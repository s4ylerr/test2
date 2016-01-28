<?php 

$a = 10;
$b = 10;
$c = 10;

if ($a == $b && $b == $c) {
	echo "ravnostranen";
} elseif (($a == $b && $b != $c) || ($b == $c && $c != $a) || ($a == $c && $C != $b)) {
	echo "ravnobedren";
} else {
	echo "raznostranen";
}
