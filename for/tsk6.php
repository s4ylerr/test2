<?php 
header('content-type:text/html;charset=utf-8');
$temp = array();
$sum = 0;

for ($i=0; $i <90; $i++) { 
$temp[$i]=rand (-10, 40);
	$sum += $temp[$i];
	

}
$sr = $sum/90;

echo "средната температура е " .$sr;

echo "<pre>";
sort($temp);
print_r($temp);
echo "</pre>";
$j=0;
while ( $j < 5) { // Да се довърши !!!!
	echo $temp[$j];
	$j++;
	
}
$t=85;
echo "<p>";
while ($t<= 89) {
	echo $temp[$t];
	$t++;
}
echo "</p>";
 ?>