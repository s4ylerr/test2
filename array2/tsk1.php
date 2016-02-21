<?php 

$cars = array(array('brand' => 'VW', 'model' => 'Polo', 'color' => 'grey', 'price' => '10000', 'sold' => '10'),
	array('brand' => 'Skoda', 'model' => 'Yeti', 'color' => 'white', 'price' => '15000', 'sold' => '30'),
	array('brand' => 'Honda', 'model' => 'Civic', 'color' => 'black', 'price' => '20000', 'sold' => '50'));

$count = count ($cars);
$sum = 0;
for ($j=0; $j < $count ; $j++) { 
	$cars[$j]['profit']=$cars[$j]['price']*$cars[$j]['sold'];
	$sum += $cars[$j]['profit'];
}

echo "<table border=1>";
echo "<tr>";
echo "  
		<td>Brand</td>
		<td>Model</td>
		<td>Color</td>
		<td>Price</td>
		<td>Sold</td>
		<td>Profit</td>";
echo "</tr>";

for ($i=0 ; $i < $count; $i++) { 
	echo "<tr>";
	foreach ($cars[$i] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo $sum. " Profit for seling all cars";

?>




