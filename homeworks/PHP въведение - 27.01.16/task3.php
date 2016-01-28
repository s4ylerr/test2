<?php
header('Content-type:text/html;charset=utf-8');

$a = 6;
$b = 4;
$c = 3;
$h = 2;
$P = $a+$b+(2*$c);
$S = (1/2)*($a+$b)*$h;

echo "ТРАПЕЦ <p>a = 6</p> <p>b = 4</p> <p>c = 3</p> <p>h = 2</p> <p>P = $P</p> <p>S = $S </p>";
echo "<p>Периметър на трапец: $a+$b+(2*$c) = $P</p>";
echo "Лице на трапец: (1/2)*($a+$b)*$h = $S";