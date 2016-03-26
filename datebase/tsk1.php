<?php 

$conn = mysqli_connect('localhost','root','','startup');

if (!$conn) {
	die('Connection failed:'.mysqli_connect_error());
}
else {
	echo "Connected successflully!";
}
$q	="SELECT * FROM products";

$result = mysqli_query ($conn,$q);

if (mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)){
		//var_dumb($row);
		echo "<p>";
		echo $row['product']." ";
		echo $row['gi'];
		echo "<p>";
	}
}

 ?>