<?php
header('Content-type:text/html;charset=utf-8');

$n = "3.14";
$r = 5;
$S = $n*($r*$r);
$d = $r*2;
$c = 2*$n*$r;

echo "КРЪГ<p>п = $n</p> <p> r = $r </p> <p>S = $S</p> <p>d = $d</p> <p>C = $c </p> ";
echo "<p>Периметър на кръг: 2*$n*$r=$c</p>";
echo "Лице на кръг:  $n*($r*$r)=$S";


